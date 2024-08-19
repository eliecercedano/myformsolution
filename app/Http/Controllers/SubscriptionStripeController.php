<?php

namespace App\Http\Controllers;
use Session;
use Stripe\Card;
use Stripe\Charge;
use Stripe\StripeClient;
use Stripe\Exception\ApiErrorException;
use Exception;
use Illuminate\Http\Request;

use \App\Http\Requests\RequestCreateOrUpdateCustomerSubscription;
use \App\Http\Requests\RequestCancelCustomerSubscription;
use \App\Http\Requests\RequestChangeCardCustomerSubscription;

class SubscriptionStripeController extends Controller
{
    protected $client;
    protected $secret_token;
    protected $free_plan_product;


    /**
     * Construct Stripe Class 
     *
     * @param secret_token $email
     * @param client
     */

    public function __construct()
    {
        $this->secret_token = config( 'services.stripe.secret' );
        $this->client       = new StripeClient( $this->secret_token );
        $this->free_plan_product    = config( 'services.stripe.free_plan' );


    }

    /**
     * END POINT List Subscriptions Items from Stripe Api
     *
     * @return object
     * @throws Exception
     */
    public function listSubscriptionProduts()
    {   
        try {
            $response = $this->client->products->all([
                                                        'limit' => 3,
                                                        'active' => true
                                                    ]);
            $subscription_items= array();
           
            $products_list = $response->data;

            $response = $this->client->prices->all([
                                                        'limit' => 3,
                                                        'active' => true
                                                    ]);

            $prices_list = $response->data;

            foreach($prices_list as $index => $price_list){
                foreach($products_list as $index => $product_list){
                    if($product_list->default_price == $price_list->id){
                        array_push($subscription_items,
                            array(
                                'product_id'            => $product_list->id,
                                'product_name'          => $product_list->name,
                                'product_description'   => $product_list->description,
                                'product_images'        => $product_list->images,
                                'product_active'        => $product_list->active,
                                'product_price'         => convertToCents($price_list->unit_amount),
                                'product_price_id'      => $price_list->id,
                            )
                        );
                    }
                }
            }

            usort($subscription_items, function ($item1, $item2) {
                return $item1['product_price'] <=> $item2['product_price'];
            });
            $data = $subscription_items;
            $code     = 200;
            $message = 'Subscription was created';
            $response = successResponse($data, $message, $code  );

            return response()->json( $response, $code);

        } catch (ApiErrorException $e) {

            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
     * END POINT to create new Customer on Stripe Api
     *
     * @param string $email
     * @param string $product_sus_id
     * @param string $token_card
     * @return Json Response ( 400 error / 200 success)
     */

    public function createCustomerSubscriptionFree(){
        $email = session('email_user');

        $product_sus_id = $this->free_plan_product;
        $customer = $this->saveCustomer($email);

        $product = $this->getProductInfo( $product_sus_id );
        $price_id = $product['default_price'];


        if ( $customer['id']  ) {
            $subscription = $this->createNewSubscription( $customer['id'] , $price_id);
        }
    }

    /**
     * END POINT to create new Customer on Stripe Api
     *
     * @param string $email
     * @param string $product_sus_id
     * @param string $token_card
     * @return Json Response ( 400 error / 200 success)
     */

    public function createCustomerSubscription(RequestCreateOrUpdateCustomerSubscription $request){
        $email          = session('email_user');
        $product_sus_id = $request->input('product_sus_id');
        $token_card     = $request->input('token_card');

        $customer = $this->getCustomer($email);

        $product = $this->getProductInfo( $product_sus_id );
        $price_id = $product['default_price'];

        if ($customer === false) {
            $customer = $this->saveCustomer($email);
        }
        if (! $this->checkSubscriptionActive( $customer['id'] ) ) {
            if ( ! $this->customerCardExists( $customer['id'] , $token_card ) ){
                    $this->newCardCustomer( $customer['id'] , $token_card );
            }
            $subscription = $this->createNewSubscription( $customer['id'] , $price_id);

            if ( $subscription ) {
            
                $data = array  (
                                    'subscription_id'       =>  $subscription['id'], 
                                    'customer_id'           =>  $subscription['customer'],
                                    'product_id'            =>  $subscription['items']['data'][0]['plan']['product'],
                                    'status'                    =>  $subscription['status'],
                                    'current_period_start'      =>  gmdate("Y-m-d", $subscription['current_period_start']),
                                    'current_period_end'        =>  gmdate("Y-m-d", $subscription['current_period_end']),
                                    'cancel_at_period_end'      => $subscription['cancel_at_period_end'],
                                    'cancel_at'      => ( $subscription['cancel_at']  === null) ? null : gmdate("Y-m-d", $subscription['cancel_at']),
                                    
                                    'amount'         =>  convertToCents($subscription['items']['data'][0]['plan']['amount']),
                                );
                Session::put('info_subscription', (object) $data);
                $code     = 200;
                $message = 'Subscription was created';
                $response = successResponse($data, $message, $code  );

            } else {

                $code     = 400;
                $message = 'Error, try again if error continue please contact administrator';
                $response = errorResponse( $message, $code );

            }                 
        }else{
            $code     = 400;
            $message = 'Customer already Has a Active Subscription';
            $response = errorResponse( $message, $code );
        }
    
        return response()->json( $response, $code);
    }

    /**
     * END POINT to create new Customer on Stripe Api
     *
     * @param string $email
     * @param string $product_sus_id
     * @param string $token_card
     * @return Json Response ( 400 error / 200 success)
     */

    public function updateCustomerSubscription(RequestCreateOrUpdateCustomerSubscription $request){
        $email              = session('email_user');
        $product_sus_id_old = Session::get('info_subscription')->product_id;
        $subscription_id    = Session::get('info_subscription')->subscription_id;
        $token_card         = $request->input('token_card');
        $product_sus_id_new = $request->input('product_sus_id');
        
        if ($product_sus_id_old !== $product_sus_id_new) {
            $response = $this->client->subscriptions->retrieve($subscription_id);
            $item_subscription =$response->items->data[0]->id;

            $product = $this->getProductInfo( $product_sus_id_new );
            $price_id = $product['default_price'];

            $updated_sus = $this->updateSubscription($subscription_id, $item_subscription, $price_id );

           if ($updated_sus) {
                $data = array  (
                                    'subscription_id'       =>  $updated_sus['id'], 
                                    'customer_id'           =>  $updated_sus['customer'],
                                    'product_id'            =>  $updated_sus['items']['data'][0]['plan']['product'],
                                    'status'                    =>  $updated_sus['status'],
                                    'current_period_start'      =>  gmdate("Y-m-d", $updated_sus['current_period_start']),
                                    'current_period_end'        =>  gmdate("Y-m-d", $updated_sus['current_period_end']),
                                    'cancel_at_period_end'      => $updated_sus['cancel_at_period_end'],
                                    'cancel_at'      => ( $updated_sus['cancel_at']  === null) ? null : gmdate("Y-m-d", $updated_sus['cancel_at']),
                                    
                                    'amount'         =>  convertToCents($updated_sus['items']['data'][0]['plan']['amount']),
                                );
                Session::put('info_subscription', (object) $data);

                $code     = 200;
                $message = 'Subscription was updated';
                $response = successResponse($data, $message, $code  );
           }else{
                $code     = 400;
                $message = 'Error, try again if error continue please contact administrator';
                $response = errorResponse( $message, $code );
           }            
        }else{
            $code     = 400;
            $message = "product_sus_id is same that want update";
            $response = errorResponse( $message, $code );
        }

        return response()->json( $response, $code);
    }

    /**
     * END POINT to cancel subscription
     *
     * @param string $email
     * @param string $product_sus_id
     * @param string $token_card
     * @return Json Response ( 400 error / 200 success)
     */

    public function cancelCustomerSubscription(RequestCancelCustomerSubscription $request){
        $subscription_id = $request->input('subscription_id');

        $cancelSubs = $this->stripeCancelSubscription( $subscription_id );
        if ( empty( $cancelSubs) ) {
            $code     = 400;
            $message = "error on try cancelled suscripcion";
            $response = errorResponse( $message, $code );
        }else{
            $code = 200;
            $data = $cancelSubs;
            $message = 'subscriptions has been cancelled';
            $response = successResponse($data, $message, $code  );
        }
        
        return response()->json( $response, $code);
    }

    /**
     * END POINT to list invoice 
     *
     * @param string $email
     * @return Json Response ( 400 error / 200 success)
     */
    public function paymentSubscriptionList( $id_customer_stripe ){

        $invoices =    $this->getPaymentListStripe( $id_customer_stripe );

        if ( !empty( $invoices ) ) {

            foreach ($invoices as $key => $invoice) {
                $data[$key] = array  (
                                    'invoice_id'        =>  $invoice['id'], 
                                    'invoice_number'    =>  $invoice['number'], 
                                    'subscription_id'   =>  $invoice['subscription'],
                                    'customer_id'       =>  $invoice['customer'],
                                    'description'       =>  $invoice['lines']['data']['0']['description'],
                                    'billing_reason'    =>  $invoice['billing_reason'],
                                    'status'            =>  $invoice['status'],
                                    'created'           =>  gmdate("Y-m-d", $invoice['created']),
                                    'amount_paid'       =>  convertToCents($invoice['amount_paid']),
                                    'invoice_pdf' =>  $invoice['invoice_pdf'],
                                );
            }

            $code = 200;
            $message = 'request ok';
            $response = successResponse($data, $message, $code  );

        }else{
            $message = "Dealer(customer_stripe), don't have Payment Yet";
            $code     = 400;
            $response = errorResponse( $message, $code );
        }
        
        return response()->json( $response, $code);
    }

    /**
     * END POINT TO get info card
     *
     * @param string $email
     * @return Json Response ( 400 error / 200 success)
     */
    public  function getCardDealer($id_customer_stripe ){

        try {
            $response = $this->client->customers->allSources(
                                                                $id_customer_stripe,
                                                                ['object' => 'card', 'limit' => 1]
                                                            );

            if ($response->data[0]) {
                $card    = $response->data[0];
                $message = 'request ok';
                $code    = 200;
                $data = array  (
                                    'card_id'     =>  $card['id'],
                                    'brand'       =>  $card['brand'],
                                    'brand_icon'  =>  cardBrandIcon($card['brand']),
                                    'exp_month'   =>  zeroFill($card['exp_month']),
                                    'exp_year'    =>  $card['exp_year'],
                                    'last4'       =>  $card['last4'],
                                );            
                $response = successResponse($data, $message, $code  );
            }else{
                $code     = 400;
                $message = "not  card associate";
                $response = errorResponse( $message, $code );
            }

            return response()->json( $response, $code);
        } catch (ApiErrorException $e) {

            throw new Exception($e->getMessage(), 500);
        }

    }

    /**
     * Get Suscripcion active from Dealer
     *
     * 
     * @return array suscripcion response
     * code: api code response
     * message:api message
     * data:api response data
     */
    public function getSubscriptionCustomerInfo() {
        $email          = session('email_user');
        $customer       =   $this->getCustomer( $email );

        if ($customer === false) {
            $code = 400;
            $message = "dealer email don't register on stripe";
            $response = errorResponse( $message, $code );
     
        }else{
            $subscriptions =    $this->searchSubscriptionsByCustomer($customer['id']); // STRIPE
            if ($subscriptions === false) {
                $code = 400;
                $message = "Dealer(customer_stripe), don't have active subscriptions";
                $response = errorResponse( $message, $code );

            }else{
                $data = $subscriptions;
                $code = 200;
                $message = 'request ok';
                $response = successResponse($data, $message, $code  );
            }
        }
        return response()->json( $response, $code);
    }

    
    /**
     * END POINT to change  card Customer on Stripe Api
     *
     * @param string $email
     * @param string $token_card
     * @return Json Response ( 400 error / 200 success)
     */
    public function changeCardCustomer(RequestChangeCardCustomerSubscription $request){
        $email          = session('email_user');
        $token_card     = $request->input('token_card');
        $customer =   $this->getCustomer( $email );

        if ( $customer ) {

            $old_card = $this->checkCardStripe($customer['id'], $token_card);
            
            if ($old_card) {
                $code    = 200;
                $message = 'new card was added';
                $data    = $this->UpdateNewCard($old_card, $token_card, $customer['id'] );  
                $response = successResponse($data, $message, $code  );
            }else{
                $code = 400;
                $message = "Card already exist on stripe, try with another card";
                $response = errorResponse( $message, $code );
            }
        }else{
            $code = 400;
            $message = "dealer email don't register on stripe";
            $response = errorResponse( $message, $code );
        }
        return response()->json( $response, $code);
    }

    /**
    * Check Card Exist on stripe
    * @param string | string
    * @return array
    */
    private function checkCardStripe($id_customer_stripe ,$token_new_card){
        try {
            $token_val     = $this->client->tokens->retrieve($token_new_card, []);

                //only enter if token is  valid
                if ( $token_val['card'] ) {
                    $response = $this->client->customers->allSources( $id_customer_stripe,
                                                                            [
                                                                                'object' => 'card', 
                                                                                'limit' => 1
                                                                            ]);
                    $old_card = $response->data[0] ?? false;
                    $data     = $old_card;
                    $new_card = $token_val['card'];
                    if (   $old_card['exp_month'] === $new_card['exp_month'] 
                    && $old_card['exp_year']  === $new_card['exp_year']  
                    && $old_card['last4']     === $new_card['last4']     
                    && $old_card['fingerprint'] === $new_card['fingerprint'] 
                    ) {
                    
                        $data= false;
                }
            }
            return $data;
        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
    * Update suscription on Stripe
    * @param string | string 
    * @return object|bool
    * @throws Exception
    */
    private function updateSubscription($subscription_id, $item_subscription, $price_id ){
        try {
                $response=$this->client->subscriptions->update($subscription_id, [
                  'cancel_at_period_end' => false,
                  'proration_behavior' => 'always_invoice',
                  'items' => [
                    [
                      'id' =>  $item_subscription,
                      'price' => $price_id,
                    ],
                  ],
                ]);
            
            return $response ?? false;
        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
    * Update new_card info and delete old card
    * @param string | string | string
    * @return array
    */
    private function UpdateNewCard($old_card ,$token_card, $id_customer_stripe){
        try {
        
            // add new card first check is OK
            $new_card = $this->client->customers->createSource($id_customer_stripe, ['source' => $token_card ]);

            if ($new_card['id']) {
                $deletedCard =   $this->client->customers->deleteSource(
                                                                        $id_customer_stripe,
                                                                        $old_card['id'],[]
                                                            );
                $data = array  (
                                'customer'       =>  $new_card['customer'],
                                'brand'          =>  $new_card['brand'],
                                'brand_icon'     =>  cardBrandIcon($new_card['brand']),
                                'exp_month'      =>  zeroFill($new_card['exp_month']),
                                'exp_year'       =>  $new_card['exp_year'], 
                                'last4'          =>  $new_card['last4']
                            );
            }
            return $data;
        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

     /**
     * Update suscription to be cancelled at period end
     *
     * @return string (price_id) /  response (price_id)
     * @throws Exception
     */
    private function stripeCancelSubscription( $subscription_id ){
        try { 
            $subscription = $this->client->subscriptions->update($subscription_id,
                                                                    ['cancel_at_period_end' => true ]
                                                                );

            if ($subscription) {
                $data = array  (
                                    'subscription_id' =>  $subscription['id'], 
                                    'customer_id'     =>  $subscription['customer'],
                                    'status'                    =>  $subscription['status'],
                                    'current_period_start'      =>  gmdate("Y-m-d", $subscription['current_period_start']),
                                    'current_period_end'        =>  gmdate("Y-m-d", $subscription['current_period_end']),
                                    'cancel_at_period_end'      => $subscription['cancel_at_period_end'],
                                    'cancel_at'      => ( $subscription['cancel_at']  === null) ? null : gmdate("Y-m-d", $subscription['cancel_at']),
                                );
            }
            return $data;
        } catch (ApiErrorException $e) {
            if ($e->getError()->type === 'invalid_request_error') {
                response( 400, $e->getMessage() );
            }
            throw new Exception($e->getMessage(), 500);
        }
    }

     /**
     * Get Suscripcion active from Dealer
     *
     * 
     * @return object|bool
     * @throws Exception
     */
    private function searchSubscriptionsByCustomer( $id_customer_stripe, $status = 'active' ){

        try {
            $data   = false;
            $response = $this->client->subscriptions->all   ([
                                                                'limit'  => 1,
                                                                'customer' => $id_customer_stripe,
                                                       ]);

            if ( $response->data ) {
                $subscription = $response->data[0];   
                $data = array  (
                                    'subscription_id' =>  $subscription['id'], 
                                    'customer_id'     =>  $subscription['customer'],
                                    'product_id'         =>  $subscription['items']['data'][0]['plan']['product'],
                                    'status'                    =>  $subscription['status'],
                                    'current_period_start'      =>  gmdate("Y-m-d", $subscription['current_period_start']),
                                    'current_period_end'        =>  gmdate("Y-m-d", $subscription['current_period_end']),
                                    'cancel_at_period_end'      => $subscription['cancel_at_period_end'],
                                    'cancel_at'      => ( $subscription['cancel_at']  === null) ? null : gmdate("Y-m-d", $subscription['cancel_at']),
                                    
                                    'amount'         =>  convertToCents($subscription['items']['data'][0]['plan']['amount']),
                                );
            }


            return $data;
        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
     * Get price_id from product_id(subscription objet) on Stripe Api
     *
     * @param string $product_sus_id
     * @return object data
     * @throws Exception
     */
    public function getProductInfo( $product_sus_id ){
        try {
            $response = $this->client->products->all([ 'ids'   => [$product_sus_id ] ]);

            if (!$response->data[0]['default_price']) {
                response(400, 'product_sus_id is incorrect');
            }

            return $response->data[0];

        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
     * Get customer if exist  on Stripe Api
     *
     * @param string $email
     * @return object data / false
     * @throws Exception
     */
    private function getCustomer(string $email) {
        try {
            $response = $this->client->customers->all(['email' => $email]);
            return $response->data[0] ?? false;

        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
     * Save Customer on Stripe Data with card
     *
     * @param string $email
     * @param string $token_card
     * @return response  
     * @throws Exception
     */
    private function saveCustomer(string $email){
        try {
                $response = $this->client->customers->create([
                    'email' => $email,
                ]); 

                return $response;            

        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
     * Checks if the customer's has a active subscription
     *
     * @param string $id_customer_stripe
     * @param string $price_product_id
     * @return object data / false
     * @throws Exception
     */
    private function checkSubscriptionActive(string $id_customer_stripe  ){
        try {
            $response = $this->client->subscriptions->all([
                                                            'customer' =>  $id_customer_stripe,
                                                        ]);
            return $response->data[0] ?? false;

        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
     * Send Request to Stripe Api To create new Suscripcion
     *
     * @param string $id_customer_stripe
     * @param string $price_product_id
     * @return object data | bool
     * @throws Exception
     */
    private function createNewSubscription( string $id_customer_stripe , string $price_product_id){
        try {
            $response = $this->client->subscriptions->create([
                                                                'customer' => $id_customer_stripe,
                                                                'items' => [
                                                                    ['price' => $price_product_id]
                                                                ],
                                                            ]);
    
            return $response ?? false;
        }catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }

    }

    /**
     * Check card exists on the Stripe Api
     *
     * @param string $id_customer_stripe
     * @param string $token_card
     * @return object data | bool
     * @throws Exception
     */
    private function customerCardExists($id_customer_stripe, $token_card)  {
        try {
            $token     = $this->client->tokens->retrieve($token_card, []);

            //only enter if token is  valid
            if ( $token['card'] ) {

                  $response = $this->client->customers->allSources( $id_customer_stripe,
                                                                            [
                                                                                'object' => 'card', 
                                                                                'limit' => 1
                                                                            ]);
                  return $response->data[0] ?? false;

            }
                
        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

     /**
     * Create new card if not exists on the Stripe Api
     *
     * @param string $id_customer_stripe
     * @param string $token_card
     * @return object data | bool
     * @throws Exception
     */
    private function newCardCustomer($id_customer_stripe, $token_card){
        try {
            $response = $this->client->customers->createSource($id_customer_stripe, ['source' => $token_card]);
             return $response ?? false;
        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }

    /**
     * Get Payments List done by Dealer on stripe
     *
     * @param string $id_customer_stripe
     * @param string $status 
     * @return object|bool
     * @throws Exception
     */
    private function getPaymentListStripe ( $id_customer_stripe, $status = 'active' ){
        try {
            $data   = false;
            $response = $this->client->invoices->all   ([
                                                                'limit'  => 100,
                                                                'customer' => $id_customer_stripe,
                                                            ]);
            return $response->data ?? false;

        } catch (ApiErrorException $e) {
            throw new Exception($e->getMessage(), 500);
        }
    }
}