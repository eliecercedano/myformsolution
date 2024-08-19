<?php

if (! function_exists('successResponse')) {
    function successResponse( array  $data, string $success_messages, int $success_code = 400 ){
        if (empty($data)){
            throw new Exception("data can't be empty", 500);
        }
        if (empty($success_messages)){
            throw new Exception("messages can't be empty", 500);
        }
        return ([        
                                'code'    => $success_code,
                                'success' => TRUE, 
                                'message' => $success_messages, 
                                'data'    => $data
                            ]);
    }
}

if (! function_exists('errorResponse')) {
    function errorResponse( string $error_messages, int $error_code = 200){
        if (empty($error_messages)){
            throw new Exception("messages can't be empty", 500);
        }
        return ([
                                'code'     => $error_code,
                                'success'  => FALSE, 
                                'errors'   => $error_messages
                            ]);
    }
}

if (! function_exists('convertToCents')) {
    function convertToCents(string $amount) {
        $amount = preg_replace("/([^0-9\\.])/i", "", $amount);
        return  number_format( doubleval($amount)  / 100 , 2, '.', '');
    }
}

if (! function_exists('zeroFill')) {
    function zeroFill (string $month){
        return str_pad($month, 2, '0', STR_PAD_LEFT);
    }
}

if (! function_exists('cardBrandIcon')) {
    function cardBrandIcon (string $card){
        switch ($card) {
            case 'MasterCard':
                $card ='fa-cc-mastercard';
                break;
            case 'Visa':
                $card ='fa-cc-visa';
                break;
            case 'American Express':
                $card ='fa-cc-amex';
                break;
            case 'Discover':
                $card ='fa-cc-discover';
                break;
            case 'Diners Club':
                $card ='fa-cc-diners-club';
                break;
            case 'JCB':
                $card ='fa-cc-jcb';
                break;
            default:
                $card ='fa-credit-card';
                break;
        }
        return $card;
    }
}

if (! function_exists('typeSubscription')) {
    function typeSubscription (string $product_id){
        $free_plan       = config( 'services.stripe.free_plan' );
        $premium_plan    = config( 'services.stripe.premium_plan' );
        $entreprise_plan = config( 'services.stripe.enterprise_plan' );
        if ($free_plan === $product_id) {
           $plan = 'FREE';
        }elseif ($premium_plan === $product_id) {
            $plan = 'PREMIUM';
        }elseif ($entreprise_plan === $product_id) {
           $plan = 'ENTERPRISE';
        }else{
            throw new Exception('user_id should have a plan', 500);
        }
        return $plan;
    }
}
