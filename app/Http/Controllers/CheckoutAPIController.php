<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class CheckoutAPIController extends Controller
{
    public function processPayment(){


      $orderArray = array(
        "redirect_url" => "https://mysite.com/confirm-order.php",
        "idempotency_key" => trim(Uuid::uuid1()->toString()),
        "ask_for_shipping_address" => true,
        "merchant_support_email" => "support@mysite.com",
        "order" => array(
          "reference_id" => "MYSTORE123456",
          "line_items" => array(

            // List each item in the order as an individual line item
            array(
              "name" => "Lamy 2000 Fountain Pen - Black Amber, Fine (Limited Edition)",
              "quantity" => "1",
              "base_price_money" => array(
                "amount" => 59000,
                "currency" => "USD"
              ),
            ),
            array(
              "name" => "Lamy Steel Nib - Black, Broad",
              "quantity" => "2",
              "base_price_money" => array(
                "amount" => 1300,
                "currency" => "USD"
              ),
            ),
          )
        ),
      );


      // CONFIG FUNCTION: Create a Square Checkout API client if needed
      initApiClient();
      // Create a new API object to send order information to Square Checkout
      $checkoutClient = new \SquareConnect\Api\CheckoutApi();
      try {
        // Send the order array to Square Checkout
        $apiResponse = $checkoutClient->createCheckout(
          $GLOBALS['LOCATION_ID'],
          $orderArray
        );
        // Grab the redirect url and checkout ID sent back
        $checkoutUrl = $apiResponse['checkout']['checkout_page_url'];
        $checkoutID = $apiResponse['checkout']['id'];
      } catch (Exception $e) {
        echo "The SquareConnect\Configuration object threw an exception while " .
             "calling CheckoutApi->createCheckout: ", $e->getMessage(), PHP_EOL;
        exit();
      }
      // Redirect the customer to Square Checkout
      header("Location: $checkoutUrl");

    }
}
