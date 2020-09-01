<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <!--        <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                    </div>
                    <div class="pull-left info">
                        <p style="font-size:9px"><?php
//                   $icno = Yii::$app->user->getId();
//                   $user = app\models\Users::findOne(['icno'=>$icno]);
//                   
//                   echo $user->fullname
        ?></p>
        
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>-->

        <!-- search form -->
        <!--        <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                      <span class="input-group-btn">
                        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div>
                </form>-->
        <!-- /.search form -->
        <?php //$noti_ganti = app\models\RekodCuti::noti_ganti();  ?>
        <?php //$noti_peraku = app\models\RekodCuti::noti_peraku(); ?>
        <?php //$noti_lulus = app\models\RekodCuti::noti_lulus(); ?>
        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        [
                            'label' => 'e-IKSOKU-F',
                            'icon' => 'wheelchair-alt',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Utama', 'icon' => 'tachometer', 'url' => ['iksokuf/index'], 'visible' => true],
                                ['label' => 'Profil Demografi', 'icon' => 'user', 'url' => ['iksokuf/demografi'], 'visible' => true],
                                ['label' => 'Bahagian A', 'icon' => 'th-large', 'url' => ['iksokuf/bahagian-a'], 'visible' => true],
                                ['label' => 'Bahagian B', 'icon' => 'random', 'url' => ['iksokuf/bahagian-b'], 'visible' => true],
                                ['label' => 'Bahagian C', 'icon' => 'hourglass-start', 'url' => ['iksokuf/bahagian-c'], 'visible' => true],
                                ['label' => 'Bahagian D', 'icon' => 'cloud-download', 'url' => ['iksokuf/bahagian-d'], 'visible' => true],
                                ['label' => 'Keputusan', 'icon' => 'file-text', 'url' => ['iksokuf/result'], 'visible' => true],
                            ],
                        ],
                        [
                            'label' => 'Mipk',
                            'icon' => 'handshake-o',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Pengenalan', 'icon' => 'tachometer', 'url' => ['mipk/index'], 'visible' => true],
                                ['label' => 'Bahagian A', 'icon' => 'th-large', 'url' => ['mipk/bahagian-a'], 'visible' => true],
                                ['label' => 'Bahagian B', 'icon' => 'random', 'url' => ['mipk/bahagian-b'], 'visible' => true],
                                ['label' => 'Keputusan', 'icon' => 'file-text', 'url' => ['mipk/result'], 'visible' => true],
                            ],
                        ],
                        [
                            'label' => 'EA-Malay',
                            'icon' => 'line-chart',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Pengenalan', 'icon' => 'home', 'url' => ['mea/index'], 'visible' => true],
                                ['label' => 'Demografi', 'icon' => 'th-large', 'url' => ['mea/demografi'], 'visible' => true],
                                ['label' => 'Jadual 1', 'icon' => 'th-large', 'url' => ['mea/jadual-1'], 'visible' => true],
                                ['label' => 'Jadual 2', 'icon' => 'th-large', 'url' => ['mea/jadual-2'], 'visible' => true],
                                ['label' => 'Jadual 3', 'icon' => 'th-large', 'url' => ['mea/jadual-3'], 'visible' => true],
                                ['label' => 'Jadual 4', 'icon' => 'th-large', 'url' => ['mea/jadual-4'], 'visible' => true],
                                ['label' => 'Keputusan', 'icon' => 'star-half-o', 'url' => ['mea/skor'], 'visible' => true],
                            ],
                        ],
                        // ['label' => 'Hubungi Kami', 'icon' => 'phone', 'url' => ['site/contact'], 'visible' => true],
                        [
                            'label' => 'Admin Dashboard',
                            'icon' => 'dashboard',
                            'url' => '#',
                            'visible' => !Yii::$app->user->isGuest,
                            'items' => [
                                ['label' => 'Senarai', 'icon' => 'list', 'url' => ['admin/index'], 'visible' => !Yii::$app->user->isGuest],
                                ['label' => 'Data', 'icon' => 'table', 'url' => ['admin/data'], 'visible' => !Yii::$app->user->isGuest],
                                ['label' => 'MIPK', 'icon' => 'table', 'url' => ['admin/data-mipk'], 'visible' => !Yii::$app->user->isGuest],
                            ]
                        ],
                    ],
                ]
        )
        ?>
        <?php

        ?>
    </section>

</aside>
