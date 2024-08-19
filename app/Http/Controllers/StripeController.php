<?php

namespace App\Http\Controllers;
use Session;
use Stripe\Card;
use Stripe\Charge;
use Stripe\StripeClient;
use Stripe\Exception\ApiErrorException;
use Illuminate\Http\Request;

use App\Http\Controllers\SubscriptionStripeController;

class StripeController extends Controller
{

    protected $client;
    protected $secret_token;

    /**
     * Construct Stripe Class 
     *
     * @param secret_token $email
     * @param client
     */

    public function __construct()
    {
        $this->secret_token =config( 'services.stripe.secret' );
        $this->client = new StripeClient( $this->secret_token );   
    }


    public function index()
    {
        $subscription = new SubscriptionStripeController();
        $response_products_list =$subscription->listSubscriptionProduts()   ;                 
        $response_info =$subscription->getSubscriptionCustomerInfo();
        
        $products_list = $response_products_list->getData()->data;
        $subscription_info = $response_info->getData();


        if ($subscription_info->code === 200) {
            $subscription_info = $subscription_info->data;
            
            $response_history_payments = $subscription->paymentSubscriptionList( $subscription_info->customer_id );
            $history_payments = $response_history_payments->getData() ;
            
            if ( $history_payments->code === 200 ) {
                $history_payments = $history_payments->data;
            }
            
            if ($subscription_info->product_id === config( 'services.stripe.free_plan' )) {

                $subscription_card = [];

            } else{
                $response_card = $subscription->getCardDealer($subscription_info->customer_id);
                $subscription_card =  $response_card->getData();
                if ($subscription_card->code === 200) {
                    $subscription_card = $subscription_card->data;
                }

            }
        }
        $data = array(
                        'products_list' => $products_list,
                        'subscription_info' => $subscription_info,
                        'subscription_card' => $subscription_card,
                        'history_payments'  => $history_payments
                    );
        $page_title = 'Stripe';
        $page_description = 'Subscriptions';
        $action = 'subscriptions';
        return view('app.stripe.index', compact('page_title','page_description','action', 'data'));
    }

}