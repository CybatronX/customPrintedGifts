  c<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
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
      echo "Hello";
    }
}
