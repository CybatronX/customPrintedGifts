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

            .progress {
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
              transition-duration: 40s;
            }

            .progressBarContainer {
                display:none;
                width:100%;
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

            <p>A Bootstrap/jQuery plugin to preview image uploads.</p>            

            <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data" id="imageUploadForm">
                <div class="imageupload panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">Upload Image</h3>

                    </div>
                    <div class="file-tab panel-body">
                        <label class="btn btn-default btn-file">
                            <span>Browse</span>
                            <!-- The file is stored here. -->
                            <input type="file" id="image-file" name="image-file">
                        </label>
                        <button type="button" class="btn btn-default">Remove</button>
                        <input type="submit" class="btn btn-primary" name="submit" value="Upload"> 
                        <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    </div>
                </div>
            </form>
        </div>

        <a href="#myModal" role="button" class="btn modalButton btn-large btn-primary" data-toggle="modal">Launch Demo Modal1</a>

        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">  
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Uploading and converting image into a Nostalgic sketch...</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container progressBarContainer">
                         <!-- Skill Bars -->
                            <div class="progress skill-bar">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" >
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>





    </div>
    </div>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="./bootstrap-imageupload/dist/js/bootstrap-imageupload.js"></script>

        <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload({
                maxFileSizeKb:8192
            });

            // $('#imageupload-disable').on('click', function() {
            //     $imageupload.imageupload('disable');
            //     $(this).blur();
            // })

            // $('#imageupload-enable').on('click', function() {
            //     $imageupload.imageupload('enable');
            //     $(this).blur();
            // })

            // $('#imageupload-reset').on('click', function() {
            //     $imageupload.imageupload('reset');
            //     $(this).blur();
            // });

            $(document).ready(function() {
                $( "#imageUploadForm" ).submit(function( event ) {
                    $("#myModal").modal('show');
                    $(".progressBarContainer").modal('show');

                    $('.progress .progress-bar').css("width",
                    function() {
                        return $(this).attr("aria-valuenow") + "%";
                    })

                    return false;
                });
            });
        </script>
    </body>
</html>
