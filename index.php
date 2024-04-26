<?php

include_once('vendor/autoload.php');

use IntaSend\IntaSendPHP\Checkout;
use IntaSend\IntaSendPHP\Customer;

$credentials = [
    'publishable_key' =>  'ISPubKey_live_fbd8e0b7-cbbf-4176-81d6-55a1d7fd681a'
];

// TODO: Add user data
//create app

$customer = new Customer();
$customer->first_name = "Joe";
$customer->last_name = "Doe";
$customer->email = "joe@doe.com";
$customer->country = "KE";
$customer->city = "Nairobi";
$customer->address = "Apt 123, Westland road";
$customer->zipcode = "0100";
$customer->state = "Nairobi";

$amount = 10;
$currency = "KES";

// Add your website and redirect url where the user will be redirected on success
$host = "https://example.com";
$redirect_url = "https://example.com/callback";
$ref_order_number = "test-order-10";

$checkout = new Checkout();
$checkout->init($credentials);
$resp = $checkout->create($amount = $amount, $currency = $currency, $customer = $customer, $host=$host, $redirect_url = $redirect_url, $api_ref = $ref_order_number, $comment = null, $method = null);

print_r($resp);
