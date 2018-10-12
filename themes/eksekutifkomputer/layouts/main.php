<?php
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use yii\debug\Toolbar;

// You can use the registerAssetBundle function if you'd like
//$this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> <?php echo Html::encode($this->title); ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->theme->baseUrl; ?>/files/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/font-awesome.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->theme->baseUrl; ?>/files/css/font/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/owl.theme.default.min.css">
    <!-- Main Menu CSS-->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/meanmenu.min.css">
    <!-- Nivo Slider CSS-->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/lib/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $this->theme->baseUrl; ?>/files/style.css">
    <!-- Modernizr Js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/vendor/modernizr-2.8.3.min.js"></script>
    <?php $this->head(); ?>
</head>

<body>
     <?php $this->beginBody(); ?>
    <div class="wrapper-area">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        <?php include ("header.php"); ?>
        <!-- Header Area End Here -->
        <!-- Slider Area Start Here -->
        <?php echo $content; ?>
        <!-- Footer Area Start Here -->
        <?php include ("footer.php"); ?>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Dialog Box Start Here-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-body">
                <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                <div class="product-details1-area">
                    <div class="product-details-info-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-left">
                                    <div class="tab-content">
                                        <div id="metro-related1" class="tab-pane fade active in">
                                            <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                        <div id="metro-related2" class="tab-pane fade">
                                            <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                        <div id="metro-related3" class="tab-pane fade">
                                            <a href="#"><img class="img-responsive" src="img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="active">
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related1"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related1"></a>
                                        </li>
                                        <li>
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related2"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related2"></a>
                                        </li>
                                        <li>
                                            <a aria-expanded="false" data-toggle="tab" href="#metro-related3"><img class="img-responsive" src="img/product/product-details4.jpg" alt="related3"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-right">
                                    <h3>Product Title Here</h3>
                                    <ul>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    </ul>
                                    <p class="price">$59.00</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus vel non risus.</p>
                                    <div class="product-details-content">
                                        <p><span>SKU:</span> 0010</p>
                                        <p><span>Availability:</span> In stock</p>
                                        <p><span>Category:</span> Demo Products</p>
                                    </div>
                                    <ul class="product-details-social">
                                        <li>Share:</li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <ul class="inner-product-details-cart">
                                        <li><a href="#">Add To Cart</a></li>
                                        <li>
                                            <div class="input-group quantity-holder" id="quantity-holder">
                                                <input type="text" placeholder="1" value="1" class="form-control quantity-input" name="quantity">
                                                <div class="input-group-btn-vertical">
                                                    <button type="button" class="btn btn-default quantity-plus"><i aria-hidden="true" class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-default quantity-minus"><i aria-hidden="true" class="fa fa-minus"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn-services-shop-now" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
    <!-- Modal Dialog Box End Here-->
    <!-- Preloader Start Here -->
    
    <!-- Preloader End Here -->
    <!-- jquery-->
    <!--<script src="main.js" type="text/javascript"></script> -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Nivo slider js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/lib/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?php echo $this->theme->baseUrl; ?>/files/lib/custom-slider/home.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/wow.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/plugins.js" type="text/javascript"></script>
    <!-- Countdown js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="<?php echo $this->theme->baseUrl; ?>/files/js/main.js" type="text/javascript"></script>
    <?php $this->endBody(); ?>
</body>

</html>
<?php $this->endPage(); ?>