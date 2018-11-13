<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar3.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Administrator</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Data Master', 'options' => ['class' => 'header']],
                    ['label' => 'Data Barang', 'icon' => 'list-ul', 'url' => ['/gii']],
                    ['label' => 'Data Pembeli', 'icon' => 'users', 'url' => ['/debug']],
                    ['label' => 'Data Pemasok', 'icon' => 'user', 'url' => ['/debug']],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                         ['label' => 'Data Transaksi', 'options' => ['class' => 'header']],
                            ['label' => 'Pembelian', 'icon' => 'laptop', 'url' => ['/gii'],],
                            ['label' => 'Bayar', 'icon' => 'money', 'url' => ['/debug'],],
                            ['label' => 'Kirim', 'icon' => 'truck', 'url' => ['/debug'],],
                    [
                        'label' => 'Data Sub Master',
                        'icon' => 'list-alt',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Data Merk Barang', 'icon' => 'angle-double-right', 'url' => ['/gii'],],
                            ['label' => 'Data Jenis Barang', 'icon' => 'angle-double-right', 'url' => ['/debug'],],
                            ['label' => 'Data Jenis Pembayaran', 'icon' => 'angle-double-right', 'url' => ['/debug'],],
                            ['label' => 'Data Jenis Pengiriman', 'icon' => 'angle-double-right', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
