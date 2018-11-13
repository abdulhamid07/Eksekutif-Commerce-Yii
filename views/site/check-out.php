<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Checkout';
$this->params['breadcrumbs'][] = $this->title;
?>
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-area">
                            <h1>Checkout</h1>
                            <ul>
                                <li><a href="#">Home</a> /</li>
                                <li>Checkout</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkout-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="billing-details-area">
                            <h2 class="cart-area-title">DATA PEMBELI</h2>
                            <form id="checkout-form">
                                <div class="row">
                                    <!-- Company Name -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="first-name">Pembeli*</label>
                                            <input style="border:1px solid #000;" type="text" id="first-name" readonly class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="company-name">Alamat Kirim *</label>
                                            <input style="border:1px solid #000;" type="text" id="company-name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Metode Pengiriman *</label>
                                         <select style="border:1px solid #000;" name="merkBarang" class="form-control">
                                           <option value="">- Pilih Pengiriman -</option>
                                         </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="billing-details-area">
                            <h2 class="cart-area-title">Data Pembayaran</h2>
                            <form id="checkout-form">
                                <div class="row">
                                    <!-- Company Name -->
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="first-name">Debit/ Credit Card Number*</label>
                                            <input style="border:1px solid #000;" type="text" id="first-name" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="company-name">Expired Date *</label>
                                                    <input style="border:1px solid #000;" type="text" id="company-name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="company-name">ZIP Code *</label>
                                                    <input style="border:1px solid #000;" type="text" id="company-name" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="order-sheet">
                            <h2>Pesanan Anda</h2>
                            <ul>
                                <li>01. Product Title<span>Rp. 5.000.000</span></li>
                                <li>02. Product Title<span>Rp. 3.000.000</span></li>
                            </ul>
                            <h3>Total<span>Rp. 8.000.000</span></h3>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order">
                            <button class="btn-send-message disabled" type="submit" value="Login"> 
                        <i class="fa fa-money"></i> Bayar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>