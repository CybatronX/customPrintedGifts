<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutAPIController extends Controller
{
    public function processPayment(){
      // $token  = $_POST['stripeToken'];
      // $email  = $_POST['stripeEmail'];

      // $customer = \Stripe\Customer::create(array(
      //     'email' => $email,
      //     'source'  => $token
      // ));

      // $charge = \Stripe\Charge::create(array(
      //     'customer' => $customer->id,
      //     'amount'   => 0.99,
      //     'currency' => 'usd'
      // ));

      // $stripePublicKey = config('stripeTest.key');
      echo "...Start....";
      echo config('services.square.appId');
      echo config('services.square.secret');
      echo "...End..."; 
      echo config('app.log_level');
    }
}
