<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Eksekutif Komputer';
?>
        <div class="main-slider2">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/slider/slider1.png" alt="" title="#slider-direction-1"/>
                    <img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/slider/slider2.png" alt="" title="#slider-direction-3" />
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c">
                           
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-content t-lfr s-tb slider-3">
                        <div class="title-container s-tb-c">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End Here -->
        <!-- Services2 Area Start Here -->
        <div class="services2-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="services2-box">
                            <div class="services2-box-content">
                                <a href="#" class="btn-services-shop-now">MACBOOK</a>
                            </div>
                            <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/macbook.png" alt="services"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="services2-box">
                            <div class="services2-box-content">
                                <a href="#" class="btn-services-shop-now">LAPTOP GAMING</a>
                            </div>
                            <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/gaming.jpg" alt="services"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="services2-box">
                            <div class="services2-box-content">
                                <a href="#" class="btn-services-shop-now">LAPTOP GRAFIS</a>
                            </div>
                            <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/grafis.jpg" alt="services"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services1 Area End Here -->
        <!-- Product 2 Area Start Here -->
        <div class="best-seller2-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-carousel">HOT GAMING</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="metro-carousel" data-loop="false" data-items="3" data-margin="20" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="1" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="3" data-r-large-nav="false" data-r-large-dots="true">
                    <?php foreach ($hotGamings as $hotGaming): ?>     
                        <div class="product-box4">
                            <div class="product-content-holder2">
                                <h3><a href="#"><?= ucwords($hotGaming->nama_barang); ?></a></h3>
                                <span>Rp. <?= $hotGaming->harga; ?></span><br>
                                 <a class="btn-add-to-cart-fill-box3" href="#"><i class="fa fa-eye"></i></a>
                                 <a class="btn-add-to-cart-fill-box3" href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            <div class="product-img-holder2">
                                <div class="hot-sale">
                                    <span>Hot</span>
                                </div>
                                <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/produk/terbaru/<?= $hotGaming->gambar; ?>" alt="product"></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
        <br/><br/>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <span class="title-bar-left"></span>
                            <h2>HOT MACBOOK DAN GRAFIS</h2>
                            <span class="title-bar-right"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="metro-carousel" data-loop="false" data-items="3" data-margin="20" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="1" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="3" data-r-large-nav="false" data-r-large-dots="true">
                         <?php foreach ($hotMacbooks as $hotMacbook): ?>
                        <div class="product-box4">
                            <div class="product-content-holder2">
                                <h3><a href="#"><?= ucwords($hotMacbook->nama_barang); ?></a></h3>
                                <span>Rp.  <?= $hotMacbook->harga; ?></span><br>
                                <a class="btn-add-to-cart-fill-box3" href="#"><i class="fa fa-eye"></i></a>
                                 <a class="btn-add-to-cart-fill-box3" href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            <div class="product-img-holder2">
                                <div class="hot-sale">
                                    <span>Hot</span>
                                </div>
                                <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/produk/terbaru/<?= $hotMacbook->gambar; ?>" alt="product"></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <span class="title-bar-left"></span>
                            <h2>Produk Terbaru</h2>
                            <span class="title-bar-right"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="metro-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="true" data-autoplay-timeout="4000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="3" data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="4" data-r-large-nav="false" data-r-large-dots="true">
                    <?php foreach ($barangTerbarus as $brg): ?>                        
                        <div class="product-box1">
                            <ul class="product-social">
                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="product-img-holder">
                                <div class="hot-sale">
                                    <span>New</span>
                                </div>
                                <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/produk/terbaru/<?= $brg->gambar; ?>" alt="product"></a>
                            </div>
                            <div class="product-content-holder">
                                <h3><a href="#"><?= $brg->nama_barang; ?></a></h3>
                                <span>Rp. <?= $brg->harga; ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Best Seller 2 Area End Here -->
                <!-- Advantage Area Start Here -->
        <div class="advantage1-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <span class="title-bar-left"></span>
                            <h2>MENGAPA MEMILIH KAMI ?</h2>
                            <span class="title-bar-right"></span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i style="margin-left:20px" class="fa fa-list-alt"></i>
                                </a>
                                <div class="media-body">
                                    <h3>PALING LENGKAP</h3>
                                    <p >Menyediakan Banyak Pilihan Yang Tersedia Dengan Berbagai Merk</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i style="margin-left:20px" class="fa fa-money"></i>
                                </a>
                                <div class="media-body">
                                    <h3>HARGA TERJANGKAU</h3>
                                    <p>Spesialis Laptop Spek Tinggi Dengan Harga Terjangkau</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i style="margin-left:20px" class="fa fa-balance-scale"></i>
                                </a>
                                <div class="media-body">
                                    <h3>HARGA 100% JUJUR</h3>
                                    <p>Kualitas Barang Sebanding Dengan Yang Anda Bayarkan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i style="margin-left:20px" class="fa fa-retweet"></i>
                                </a>
                                <div class="media-body">
                                    <h3>BERGARANSI</h3>
                                    <p>Bergaransi Toko 7 Hari Dan Siap Memberi Garansi Full Refund 100%. S & K berlaku</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i style="margin-left:20px" class="fa fa-check-circle"></i>
                                </a>
                                <div class="media-body">
                                    <h3>Syariah Oriented</h3>
                                    <p>Berprinsip syariah agar dapat memberikan manfaat untuk konsumen dan perusahaan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="advantage-area-box">
                            <div class="media">
                                <a class="pull-left" href="#">
                                    <i style="margin-left:20px" class="fa fa-shield"></i>
                                </a>
                                <div class="media-body">
                                    <h3>100% AMAN</h3>
                                    <p>Transaksi aman dengan datang langsung ke toko offline atau via ekspedisi Tiki/Jne.</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
        <!-- Advantage Area End Here -->
        <!-- Solid Divider Area Start Here -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="solid-divider"></div>
                </div>
            </div>
        </div>
        <!-- Solid Divider Area End Here -->
        <!-- Brand Area Start Here -->
        <div class="brand-area">
            <div class="container">
                <div class="metro-carousel" data-loop="true" data-items="8" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="4" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="4" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="6" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="7" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="8" data-r-large-nav="true" data-r-large-dots="false">
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/acerbrand.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/applebrand.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/asusbrand.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/dellbrand.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/hpbrand.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/lenovobrand.png" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/microsoftbrand.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/panasonicbrand.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/samsungbrand.jpg" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/sonybrand.png" alt="brand"></a>
                    </div>
                    <div class="brand-area-box">
                        <a href="#"><img src="<?php echo $this->theme->baseUrl; ?>/files/img/eksekutif/brand/toshibabrand.jpg" alt="brand"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End Here -->