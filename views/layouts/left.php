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
        <?php //$noti_ganti = app\models\RekodCuti::noti_ganti(); ?>
        <?php //$noti_peraku = app\models\RekodCuti::noti_peraku(); ?>
        <?php //$noti_lulus = app\models\RekodCuti::noti_lulus(); ?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
//                    ['label' => 'Dashboard','icon' => 'calendar', 'url' => ['cuti/papan'], 'visible' => !Yii::$app->user->isGuest],
//                    ['label' => 'Mohon Cuti','icon' => 'calendar-plus-o', 'url' => ['cuti/mohon'], 'visible' => !Yii::$app->user->isGuest],
//                    ['label' => "Pengganti $noti_ganti", 'encode'=>false,'icon' => 'user', 'url' => ['cuti/pengganti'], 'visible' => !Yii::$app->user->isGuest],
//                    ['label' => "Perakuan $noti_peraku", 'encode'=>false,'icon' => 'check-circle-o', 'url' => ['cuti/peraku'], 'visible' => !Yii::$app->user->isGuest],
//                    ['label' => "Kelulusan $noti_lulus", 'encode'=>false,'icon' => 'check-circle', 'url' => ['cuti/lulus'], 'visible' => !Yii::$app->user->isGuest],
//                    ['label' => 'Senarai Permohonan','icon' => 'list', 'url' => ['cuti/senarai'], 'visible' => !Yii::$app->user->isGuest],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                    ['label' => 'e-IKSOKU-F','icon' => 'list', 'url' => ['iksokuf/bahagian-a'], 'visible' => !Yii::$app->user->isGuest],
                    [
                        'label' => 'e-IKSOKU-F',
                        'icon' => 'wheelchair-alt',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Utama','icon' => 'tachometer', 'url' => ['iksokuf/index'], 'visible' => true],
                            ['label' => 'Profil Demografi','icon' => 'user', 'url' => ['iksokuf/demografi'], 'visible' => true],
                            ['label' => 'Bahagian A','icon' => 'th-large', 'url' => ['iksokuf/bahagian-a'], 'visible' => true],
                            ['label' => 'Bahagian B','icon' => 'random', 'url' => ['iksokuf/bahagian-b'], 'visible' => true],
                            ['label' => 'Bahagian C','icon' => 'hourglass-start', 'url' => ['iksokuf/bahagian-c'], 'visible' => true],
                            ['label' => 'Bahagian D','icon' => 'cloud-download', 'url' => ['iksokuf/bahagian-d'], 'visible' => true],
                            ['label' => 'Keputusan','icon' => 'file-text', 'url' => ['iksokuf/result'], 'visible' => true],
//                            ['label' => 'Bahagian D','icon' => 'list', 'url' => ['iksokuf/bahagian-d'], 'visible' => !Yii::$app->user->isGuest],
//                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
