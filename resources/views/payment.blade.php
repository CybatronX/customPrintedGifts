<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Checkout | Square Swag Store</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/sqpaymentform.css">
    </head>
    <body>
        <div id="cocoon">

            <header class="container">
                <div class="left">
                    <a href="./index.php" class="back">Back</a>
                </div>
                <div id="square-logo"></div>
            </header>


            <div class="container">
                <h1 class="pageTitle">Review &amp; Complete Your Order</h1>

                <div id="paymentDetails" class="panel">
                    <h4 class="panelTitle">Payment Details</h4>

                    <div id="sq-ccbox">
                        <form id="nonce-form" novalidate action="./process-card.php" method="post">
                            
                            <!-- 
                                This needs to get wired up to... the transactions notes?
                                regardless, we need to record this somewhere. Additionally it would
                                be great to hook up some error checking / validation for the name and 
                                email address fields.
                            -->
                            <fieldset>
                                <legend>Your Information</legend>
                                <input class="sq-input full" type="text" placeholder="Full name" />
                                <input class="sq-input full" type="text" placeholder="Email address" />
                            </fieldset>

                            <!-- 
                                Need to hardcode/hide/remove the ZIP field from this form.
                            -->
                            <fieldset>
                                <legend>Card Details</legend>
                                <div id="sq-card-number"></div>
                                <div id="sq-cvv"></div>
                                <div id="sq-expiration-date"></div>
                                <div id="sq-postal-code" class="full"></div>
                            </fieldset>
                            
                            <!--
                                After a nonce is generated it will be assigned to this hidden input field.
                            -->
                            <input type="hidden" id="card-nonce" name="nonce">
                        </form>
                    </div>

                </div>

                <div id="orderSummary">
                    <div class="panel clearfix">
                        <h4 class="panelTitle">Order Summary</h4>

                        <div class="lineItems">
                            <div class="lineItem clearfix">
                                <div class="left">
                                    <img src="img/products/01.jpg" />
                                </div>
                                <div class="left"> <!-- insert quantity and product name here -->
                                    1 &times; {ProductName}
                                </div>
                                <div class="right tabularFigures"> <!-- insert price here -->
                                    <strong>$1.00</strong>
                                </div>
                            </div>
                        </div> <!-- end line items -->


                        <!--
                            DECISION TIME:
                            Are we going to hardcode/fake this discount thing (i.e. fake a $0 payment), 
                            or should we just omit this section and show the payment for what it is ($1.00).
                        -->

                        <div class="discounts">
                            <div class="discount clearfix">
                                <div class="left">Demo Discount</div>
                                <div class="right tabularFigures negative">($1.00)</div>
                            </div>
                        </div> <!-- end discounts -->

                        <div class="orderSummation clearfix">
                            <div class="left"><strong>Total</strong></div>
                            <div class="right tabularFigures orderTotal"><strong>$0.00</strong></div> <!-- insert total if not faking -->
                        </div>
                    </div>
                    <button id="sq-creditcard" class="button-credit-card" onclick="requestCardNonce(event)">Pay with Card</button>
                </div>
            </div>

        </div> <!-- end cocoon -->




        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- link to the SqPaymentForm library -->
        <script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>
        <script type="text/javascript" src="js/sqpaymentform.js"></script>
        

    </body>
</html>