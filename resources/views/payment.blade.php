<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="./bootstrap-imageupload/dist/css/bootstrap-imageupload.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./SqPaymentForm/SqPaymentForm.css">

        <!-- link to the SqPaymentForm library -->
        <script type="text/javascript" src="https://js.squareup.com/v2/paymentform">
        </script>

        <!-- link to the local SqPaymentForm initialization -->
        <script type="text/javascript" src="./SqPaymentForm/SqPaymentForm.js">
        </script>

        <!-- link to the custom styles for SqPaymentForm -->


        
        <!-- Styles -->
        <style>

            body {
                padding-top: 70px;
            }

            .imageupload {
                margin: 20px 0;
            }

            #container {
              margin: 20px;
              width: 400px;
              height: 8px;
              position: relative;
            }

            #myModal{
                width:100%;
                height:100%;
                position:absolute;
                top:0;
                left:0;
                z-index: 9999;
                background:white;
            }

/*            .progress {
              height: 35px;

            }
            .progress .skill {
              font: normal 12px "Open Sans Web";
              line-height: 35px;
              padding: 0;
              margin: 0 0 0 20px;   
              text-transform: uppercase;
            }
            .progress .skill .val {
              float: right;
              font-style: normal;
              margin: 0 20px 0 0;
            }

            .progress-bar {
              text-align: left;
                -webkit-transition-duration: 40000ms;
                -moz-transition-duration: 40000ms;
                -o-transition-duration: 40000ms;
                 transition-duration: 40000ms;
              width:0%;
            }

            .progressBarContainer {
                display:block;
                width:100%;
            }*/

        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">bootstrap-imageupload</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="">Demo</a>
                        </li>
                        <li>
                            <a href="https://github.com/egonolieux/bootstrap-imageupload">GitHub</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">   

            <div id="sq-ccbox">
              <!--
                You should replace the action attribute of the form with the path of
                the URL you want to POST the nonce to (for example, "/process-card")
              -->
              <form id="nonce-form" novalidate action="path/to/payment/processing/page" method="post">
                Pay with a Credit Card
                <table>
                <tbody>
                  <tr>
                    <td>Card Number:</td>
                    <td><div id="sq-card-number"></div></td>
                  </tr>
                  <tr>
                    <td>CVV:</td>
                    <td><div id="sq-cvv"></div></td>
                  </tr>
                  <tr>
                    <td>Expiration Date: </td>
                    <td><div id="sq-expiration-date"></div></td>
                  </tr>
                  <tr>
                    <td>Postal Code:</td>
                    <td><div id="sq-postal-code"></div></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <button id="sq-creditcard" class="button-credit-card" onclick="requestCardNonce(event)">
                        Pay with card
                      </button>
                    </td>
                  </tr>
                </tbody>
                </table>

                <!--
                  After a nonce is generated it will be assigned to this hidden input field.
                -->
                <input type="hidden" id="card-nonce" name="nonce">
              </form>
            </div>

            <div id="sq-walletbox">
              Pay with a Digital Wallet
              <!-- Placeholder for Apple Pay for Web button -->
              <button id="sq-apple-pay" class="button-apple-pay"></button>

              <div id="sq-masterpass-label" class="wallet-not-enabled">Masterpass not enabled</div>
              <!-- Placeholder for Masterpass button -->
              <button id="sq-masterpass" class="button-masterpass"></button>
            </div>


            
        </div>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="./bootstrap-imageupload/dist/js/bootstrap-imageupload.js"></script>
    </body>
</html>
