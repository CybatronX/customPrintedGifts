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
        <link href="./productListGrid/productListGrid.css" rel="stylesheet">
        <!-- Styles -->
 
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
        
        <div class="wrapper">

      <div class="grid">

        <!-- Row One -->
        <div class="col-one-third">
          <div class="price rounded" style="float:right">
            $19.99
          </div>
          <div class="product">
            <div class ="productImage">
               <img class="over" src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/output.png" />
              <img src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/customPrintableObjects/mensTshirt.jpg" alt="">
            </div>
            <div class= "productDetails">
               <div class="row nav-row">
                 Custom Men's T-shirt
              </div>
              <div class="row nav-row">
                <button type="button" class="btn btn-success selectSizeButton">Choose Size</button>
              </div>
            </div>
          </div>
        </div>    
        <div class="col-one-third">
          <div class="price rounded" style="float:right">
            $19.99
          </div>
          <div class="product">
            <div class ="productImage">
               <img class="over" src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/output.png" />
              <img src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/customPrintableObjects/womensTshirt.jpg" alt="">
            </div>
            <div class= "productDetails">
               <div class="row nav-row">
                 Custom Men's T-shirt
              </div>
              <div class="row nav-row">
                <button type="button" class="btn btn-success selectSizeButton">Choose Size</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-one-third">
          <div class="price rounded" style="float:right">
            $19.99
          </div>
          <div class="product">
            <div class ="productImage">
               <img class="overHoodie" src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/output.png" />
              <img src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/customPrintableObjects/hoodies.jpg" alt="">
            </div>
            <div class= "productDetails">
               <div class="row nav-row">
                 Custom Men's T-shirt
              </div>
              <div class="row nav-row">
                <button type="button" class="btn btn-success selectSizeButton">Choose Size</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-one-third">
          <div class="price rounded" style="float:right">
            $19.99
          </div>
          <div class="product">
            <div class ="productImage">
               <img class="over" src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/output.png" />
              <img src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/customPrintableObjects/sweatshirt.jpg" alt="">
            </div>
            <div class= "productDetails">
               <div class="row nav-row">
                 Custom Men's T-shirt
              </div>
              <div class="row nav-row">
                <button type="button" class="btn btn-success selectSizeButton">Choose Size</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-one-third">
          <div class="price rounded" style="float:right">
            $19.99
          </div>
          <div class="product">
            <div class ="productImage">
               <img class="over" src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/output.png" />
              <img src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/customPrintableObjects/vneckTees.jpg" alt="">
            </div>
            <div class= "productDetails">
               <div class="row nav-row">
                 Custom Men's T-shirt
              </div>
              <div class="row nav-row">
                <button type="button" class="btn btn-success selectSizeButton">Choose Size</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-one-third">
          <div class="price rounded" style="float:right">
            $19.99
          </div>
          <div class="product">
            <div class ="productImage">
               <img class="overMug" src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/output.png" />
              <img src="https://s3-us-west-2.amazonaws.com/crazygiftstempphoto/customPrintableObjects/mugs.jpg" alt="">
            </div>
            <div class= "productDetails">
               <div class="row nav-row">
                 Custom Men's T-shirt
              </div>
              <div class="row nav-row">
                <button type="button" class="btn btn-success selectSizeButton">Choose Size</button>
              </div>
            </div>
          </div>
        </div>
    </div><!-- /.wrapper -->

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="./bootstrap-imageupload/dist/js/bootstrap-imageupload.js"></script>

        <script>
        </script>
    </body>
</html>
