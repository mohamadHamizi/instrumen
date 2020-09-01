<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li><?php echo  Html::a(' <i class="fa fa-phone"></i><span class="hidden-xs"> Hubungi Kami</span>',['/site/contact']); ?></li>
                <li class="dropdown user user-menu">
                    <?php
                    if (Yii::$app->user->isGuest) {
                        echo Html::a(
                            ' <i class="fa fa-user"></i>
                        <span class="hidden-xs">Login</span>',
                            ['/site/login'],
                            ['class' => 'dropdown-toggle']
                        );
                    } else {
                        echo Html::a(
                            ' <i class="fa fa-sign-out"></i>
                        <span class="hidden-xs">Logout</span>',
                            ['/site/logout'],
                            ['data-method' => 'post', 'class' => 'dropdown-toggle']
                        );
                    }
                    ?>

                    <?php
                    Html::a(
                        'Sign out',
                        ['/site/logout'],
                        ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                    )
                    ?>
        </div>
        </li>
        </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <!--                <li>
                                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                                </li>-->
        </ul>
        </div>
    </nav>
</header>