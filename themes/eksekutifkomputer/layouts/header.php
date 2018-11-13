<?php
    use yii\helpers\Html;

    use app\models\MerkBarang;
    use app\models\KategoriBarang;


    $queryMerk = MerkBarang::find();
    $queryKategori = KategoriBarang::find();

    $merkBarangs = $queryMerk->orderBy(['nama_merk'=>SORT_ASC])->all();
    $kategoriBarangs = $queryKategori->orderBy(['nama_kategori'=>SORT_DESC])->all();

?>        
        <header>
            <div class="header-area-style3" id="sticker">
                <div class="header-top">
                    <div class="header-top-inner-top">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="header-contact">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="+1234567890"> + 123 456 7890</a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> eksekutif@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="account-wishlist">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-top-inner-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="logo-area">
                                        <a href="index.html"><img class="img-responsive" src="<?php echo $this->theme->baseUrl; ?>/files/img/logoec.png" alt="logo" width="45%"></a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="search-area">
                                        <div class="input-group" id="adv-search">
                                            <input type="text" class="form-control" placeholder="Search Product" />
                                            <div class="input-group-btn">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="header-cart-area">
                                        <li>
                                            <div class="cart-area">
                                                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>2</span></a>
                                                <ul>
                                                    <li>
                                                        <div class="cart-single-product">
                                                            <div class="media">
                                                                <div class="pull-left cart-product-img">
                                                                    <a href="#">
                                                                        <img class="<?php echo $this->theme->baseUrl; ?>/files/img-responsive" alt="product" src="img/best-seller/4.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body cart-content">
                                                                    <ul>
                                                                        <li>
                                                                            <h2><a href="#">Product Title Here</a></h2>
                                                                            <h3><span>Code:</span> STPT600</h3>
                                                                        </li>
                                                                        <li>
                                                                            <p>X 1</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>$49</p>
                                                                        </li>
                                                                        <li>
                                                                            <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-single-product">
                                                            <div class="media">
                                                                <div class="pull-left cart-product-img">
                                                                    <a href="#">
                                                                        <img class="img-responsive" alt="product" src="<?php echo $this->theme->baseUrl; ?>/files/img/best-seller/5.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="media-body cart-content">
                                                                    <ul>
                                                                        <li>
                                                                            <h2><a href="#">Product Title Here</a></h2>
                                                                            <h3><span>Code:</span> STPT460</h3>
                                                                        </li>
                                                                        <li>
                                                                            <p>X 1</p>
                                                                        </li>
                                                                        <li>
                                                                            <p>$75</p>
                                                                        </li>
                                                                        <li>
                                                                            <a class="trash" href="#"><i class="fa fa-trash-o"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <span><span>Sub Total</span></span><span>$124</span>
                                                        <span><span>Discount</span></span><span>$30</span>
                                                        <span><span>Vat(20%)</span></span><span>$18.8</span>
                                                        <span><span>Sub Total</span></span><span>$112.8</span>
                                                    </li>
                                                    <li>
                                                        <ul class="checkout">
                                                            <li><a href="cart.html" class="btn-checkout"><i class="fa fa-shopping-cart" aria-hidden="true"></i>View Cart</a></li>
                                                            <li><a href="check-out.html" class="btn-checkout"><i class="fa fa-share" aria-hidden="true"></i>Checkout</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                               <a href="#" class="btn btn-default"><b>MASUK</b></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <div class="logo-area">
                                    <a href="index.html"><img class="img-responsive" src="<?php echo $this->theme->baseUrl; ?>/files/img/logoec.png" alt="logo" width="45%"></a>
                                </div>
                                <div class="category-menu-area" id="category-menu-area">
                                    <h2 class="category-menu-title"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>MERK LAPTOP</h2>
                                    <ul class="category-menu-area-inner">
                                    <?php  foreach ($merkBarangs as $merk): ?>
                                        <li><a href="product.html"><i class="flaticon-screen"></i><?= $merk->nama_merk; ?></a></li>
                                    <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-8">
                                <div class="main-menu-area">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="index.php?r=site/index">HOME</a>
                                            </li>
                                            <li><a href="index.php?r=site/about">TENTANG KAMI</a></li>
                                            <li><a href="#">PRODUK</a>
                                                <ul>
                                                    <li class="has-child-menu"><a href="#">KATEGORI</a>
                                                        <ul class="thired-level">
                                                        <?php foreach ($kategoriBarangs as $kategori): ?>    
                                                            <li><a href="index.php?r=site/products"><?= strtoupper($kategori->nama_kategori); ?></a></li>
                                                        <?php endforeach; ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?r=site/contact">HUBUNGI</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area Start Here -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                 <li class="active"><a href="">HOME</a>
                                            </li>
                                            <li><a href="index.php?r=site/about">TENTANG KAMI</a></li>
                                            <li><a href="#">PRODUK</a>
                                                <ul>
                                                    <li class="has-child-menu"><a href="#">KATEGORI</a>
                                                        <ul class="thired-level">
                                                            <?php foreach ($kategoriBarangs as $kategori): ?>    
                                                            <li><a href="index.php?r=site/products"><?= strtoupper($kategori->nama_kategori); ?></a></li>
                                                        <?php endforeach; ?>
                                                        </ul>
                                                    </li>
                                                    <li class="has-child-menu"><a href="#">MERK LAPTOP</a>
                                                        <ul class="thired-level">
                                                    <?php  foreach ($merkBarangs as $merk): ?>
                                                        <li><a href="product.html"><?= strtoupper($merk->nama_merk); ?></a></li>
                                                    <?php endforeach; ?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">ACCOUNT</a></li>
                                            <li><a href="#">VIEW CART</a></li>
                                            <li><a href="index.php?r=site/contact">HUBUNGI</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area End Here -->
                </div>
            </div>
        </header>