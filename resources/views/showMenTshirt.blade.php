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
            <div class="content">
                <!-- content here -->
                <div class="product-grid product-grid--flexbox">
                    <div class="product-grid__wrapper">
                        <!-- Product list start here -->

                        <!-- Single product -->
                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="http://i.imgur.com/y83H9n1.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Single product -->

                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="https://images.apple.com/euro/macbook/a/screens/specs/images/finish_silver_large.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="https://images.apple.com/euro/macbook/a/screens/specs/images/finish_silver_large.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="https://images.apple.com/euro/macbook/a/screens/specs/images/finish_silver_large.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="https://images.apple.com/euro/macbook/a/screens/specs/images/finish_silver_large.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="https://images.apple.com/euro/macbook/a/screens/specs/images/finish_silver_large.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="https://images.apple.com/euro/macbook/a/screens/specs/images/finish_silver_large.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="https://images.apple.com/euro/macbook/a/screens/specs/images/finish_silver_large.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-grid__product-wrapper">
                            <div class="product-grid__product">
                                <div class="product-grid__img-wrapper">         
                                    <img src="https://images.apple.com/euro/macbook/a/screens/specs/images/finish_silver_large.jpg" alt="Img" class="product-grid__img" />
                                </div>
                                <span class="product-grid__title">Product title</span>
                                <span class="product-grid__price">1.399€</span>
                                <div class="product-grid__extend-wrapper">
                                    <div class="product-grid__extend">
                                        <p class="product-grid__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis velit itaque odit.</p>
                                        <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>              
                                        <span class="product-grid__btn product-grid__view"><i class="fa fa-eye"></i> View more</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>

        </div>

        <div class="container">

            <div class="span4">
                <img src="http://i.imgur.com/y83H9n1.jpg" class = "center-block"/>
                <!-- <img src={{$sketchURL}} class = "center-block"/> -->
            </div>
 
        </div>

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="./bootstrap-imageupload/dist/js/bootstrap-imageupload.js"></script>

        <script>
        </script>
    </body>
</html>
