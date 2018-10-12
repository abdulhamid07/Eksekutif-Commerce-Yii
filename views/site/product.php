<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>        
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-area">
                            <h1>Produk Kami</h1>
                            <ul>
                                <li><a href="#">Home</a> /</li>
                                <li><a href="#">Kategori</a> /</li>
                                <li>Macbook</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- Shop Page Area Start Here -->
        <div class="shop-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-8">
                                <div class="inner-shop-top-right">
                                    <ul>
                                        <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                                        <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row inner-section-space-top">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active clear products-container" id="gried-view">
                                 <?php foreach($barangs as $barang): ?>   
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                        <div class="product-box1">
                                            <ul class="product-social">
                                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <div class="product-img-holder">
                                                <a href="#"><img class="img-responsive" src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/produk/<?= $barang->gambar; ?>" alt="product"></a>
                                            </div>
                                            <div class="product-content-holder">
                                                <h3><a href="#"><?= ucwords($barang->nama_barang); ?></a></h3>
                                                <span>Rp. <?= $barang->harga; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                                <!-- List Style -->
                                <div role="tabpanel" class="tab-pane clear products-container" id="list-view">
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                                        <div class="product-box2">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="img-responsive" src="<?php echo $this->theme->baseUrl; ?>/files/img/product/grid/3.jpg" alt="product" />
                                                </a>
                                                <div class="media-body">
                                                    <div class="product-box2-content">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <span>$59.00</span>
                                                        <p>Bag mply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and .</p>
                                                    </div>
                                                    <ul class="product-box2-cart">
                                                        <li><a href="#">Add To Cart</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                                        <div class="product-box2">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="img-responsive" src="<?php echo $this->theme->baseUrl; ?>/files/img/product/grid/4.jpg" alt="product" />
                                                </a>
                                                <div class="media-body">
                                                    <div class="product-box2-content">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <span>$59.00</span>
                                                        <p>Bag mply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and .</p>
                                                    </div>
                                                    <ul class="product-box2-cart">
                                                        <li><a href="#">Add To Cart</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                                        <div class="product-box2">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="img-responsive" src="<?php echo $this->theme->baseUrl; ?>/files/img/product/grid/5.jpg" alt="product" />
                                                </a>
                                                <div class="media-body">
                                                    <div class="product-box2-content">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <span>$59.00</span>
                                                        <p>Bag mply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and .</p>
                                                    </div>
                                                    <ul class="product-box2-cart">
                                                        <li><a href="#">Add To Cart</a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php echo \yii\widgets\LinkPager::widget([
                                    'pagination' => $pages,]); ?>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="sidebar hidden-after-desk">
                            <h2 class="title-sidebar">SERING DILIHAT</h2>
                            <div class="best-products sidebar-section-margin">
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="<?php echo $this->theme->baseUrl; ?>/files/img/sidebar/1.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p>$85</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="<?php echo $this->theme->baseUrl; ?>/files/img/sidebar/2.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p>$85</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="<?php echo $this->theme->baseUrl; ?>/files/img/sidebar/3.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p>$85</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="<?php echo $this->theme->baseUrl; ?>/files/img/sidebar/4.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p>$85</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img alt="Media Object" src="<?php echo $this->theme->baseUrl; ?>/files/img/sidebar/4.jpg" class="img-responsive">
                                    </a>
                                    <div class="media-body">
                                        <h3 class="media-heading"><a href="#">Product Title Here</a></h3>
                                        <p>$85</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>