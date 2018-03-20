<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <script src="https://js.stripe.com/v3/"></script>
        
        <!-- Styles -->
        <style>

            body {
                padding-top: 70px;
            }

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
          <form action="/charge" method="post" id="payment-form">
            <div class="form-row">
              <label for="card-element">
                Credit or debit card
              </label>
              <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
              </div>

              <!-- Used to display Element errors. -->
              <div id="card-errors" role="alert"></div>
            </div>

            <button>Submit Payment</button>
          </form>
            
        </div>

        <script>
          var stripe = Stripe('pk_test_bC4fwLOsJOPNerzh2wQz8KGN');
          var elements = stripe.elements();

          // Custom styling can be passed to options when creating an Element.
          var style = {
            base: {
              // Add your base input styles here. For example:
              fontSize: '16px',
              color: "#32325d",
            }
          };

          // Create an instance of the card Element.
          var card = elements.create('card', {style: style});

          // Add an instance of the card Element into the `card-element` <div>.
          card.mount('#card-element');

          card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
              displayError.textContent = event.error.message;
            } else {
              displayError.textContent = '';
            }
          });

          // Create a token or display an error when the form is submitted.
          var form = document.getElementById('payment-form');
          form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
              if (result.error) {
                // Inform the customer that there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
              } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
              }
            });
          });

          function stripeTokenHandler(token) {
            alert('Token received: ' + token); /* FOR TESTING ONLY */
          }
        </script>

    </body>
</html>
