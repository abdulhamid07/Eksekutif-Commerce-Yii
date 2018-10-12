<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
        <div class="inner-page-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-area">
                            <h1>Hubungi Kami</h1>
                            <ul>
                                <li><a href="#">Home</a> /</li>
                                <li>Hubungi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>
            
       <?php else: ?>
        <!-- Inner Page Banner Area End Here -->
        <!-- Contact Us Page Area Start Here -->
        <div class="contact-us-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                        <div class="contact-us-left">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h2>ALAMAT TOKO DI BANDUNG</h2>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9271551649845!2d107.62158231431688!3d-6.899315669434007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f8ba0a11a9%3A0x78a0c8697ce052d3!2sEksekutif+Computer!5e0!3m2!1sen!2sid!4v1538840141198" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                    <h2>ALAMAT TOKO DI BEKASI</h2>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.009714465452!2d106.92308361431054!3d-6.262449763052785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d3ac0321fef%3A0xd4ebb6b45d35578b!2sEksekutif+Computer+Bekasi!5e0!3m2!1sen!2sid!4v1538840287727" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <br>
                            <h2>Kirim Pesan</h2>
                            <div class="row">
                                <div class="contact-form">
                                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                                        <fieldset>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <?= $form->field($model, 'name')->textInput(['autofocus' => false]) ?>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <?= $form->field($model, 'email') ?>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                   <?= $form->field($model, 'subject') ?>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <?= Html::submitButton('Submit', ['class' => 'btn-send-message', 'name' => 'contact-button']) ?>
                                                </div>
                                            </div>
                                        </fieldset>
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class='form-response'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">

                        <div class="contact-us-right alert alert-info">
                            <h2 class="title-sidebar">ADMIN PENJUALAN</h2>
                            <p>Konsultasikan kebutuhan Laptop Anda ke Admin Penjualan Kami. Admin penjualan aktif mulai pada jam 10.00-18.00 WIB</p>
                            <br>
                            <ul>
                                <li class="con-phone">WA : 082304300400
                            </ul>
                        </div>
                        <div class="contact-us-right alert alert-success">
                            <br>
                            <h2 class="title-sidebar">ADMIN JABODETABEK</h2>
                            <p>Kamu dari Jabodetabek? hubungi nomer admin penjualan khusus kami disini. Admin penjualan Jabodetabek aktif mulai pada jam 10.00-18.00 WIB</p>
                            <br>
                            <ul>
                                <li class="con-phone">WA : 082304300888
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php endif; ?>