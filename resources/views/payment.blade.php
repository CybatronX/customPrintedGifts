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

            
        </div>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="./bootstrap-imageupload/dist/js/bootstrap-imageupload.js"></script>
    </body>
</html>
