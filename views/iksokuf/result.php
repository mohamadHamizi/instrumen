<?php

use yii\helpers\Html;
use app\models\OkuDimensi;
use app\models\OkuScoring;
use app\models\OkuSumber;
use app\models\OkuStrategi;
use app\models\OkuKesan;
use app\models\OkuGroups;
use app\models\VDemoResults;
?>

<div class="row">
    <div class="col-lg-4 col-xs-4">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $bhgnA->index ?><sup style="font-size: 20px">%</sup></h3>

                <p><?= $bhgnA->tahap ?></p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">Indeks Anda <i class="fa fa-check-square-o"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-4">
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $indeksAll ?><sup style="font-size: 20px">%</sup></h3>
                <p><?= $tahapIndeksAll ?></p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">Indeks Keseluruhan <i class="fa fa-line-chart"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-xs-4">
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $skorE ?><sup style="font-size: 20px">%</sup></h3>
                <p><?= $tahapSkorE ?></p>
            </div>
            <div class="icon">
                <i class="fa fa-podcast"></i>
            </div>
            <a href="#" class="small-box-footer">Indeks SKJ <i class="fa fa-podcast"></i></a>
        </div>
    </div>
</div>
<!-- /.row -->


<!-- PRODUCT LIST -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN A : DIMENSI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'SKOR DIMENSI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL'
                ],
                'xAxis' => [
                    'categories' => OkuGroups::groupLabel('A'),
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Skala'
                    ]
                ],
                'series' => [
                    ['name' => 'ANDA', 'data' => OkuScoring::loadScale($main_id, 'A')],
                    ['name' => 'SABAH', 'data' => VDemoResults::statistik(1, 12)],
                    ['name' => 'SEMENANJUNG', 'data' => VDemoResults::statistik(1, 1)],
                    ['name' => 'SARAWAK', 'data' => VDemoResults::statistik(1, 13)],
                    ['name' => 'LELAKI', 'data' => VDemoResults::statistik(2, 1)],
                    ['name' => 'PEREMPUAN', 'data' => VDemoResults::statistik(2, 2)],
                ],
                'plotOptions' => [
                    'line' => [
                        'dataLabels' => ['enabled' => true, 'crop' => false, 'overflow' => 'none'],
                    ],
                ],
            ]
        ]);
        ?>

        <ul class="products-list product-list-in-box">
            <?php foreach ($groups as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuDimensi::GroupSkor($group->id, $main_id) ?>/<?= OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor; ?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?> (<?= $group->shortname ?>)
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN B : SUMBER KEBAHAGIAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'SKOR SUMBER KEBAHAGIAN SUBJEKTIF OKU-FIZIKAL'
                ],
                'xAxis' => [
                    'categories' => OkuGroups::groupLabel('B'),
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Skala'
                    ]
                ],
                'series' => [
                    ['name' => 'ANDA', 'data' => OkuScoring::loadScale($main_id, 'B')],
                    ['name' => 'SABAH', 'data' => VDemoResults::statistik(3, 12)],
                    ['name' => 'SEMENANJUNG', 'data' => VDemoResults::statistik(3, 1)],
                    ['name' => 'SARAWAK', 'data' => VDemoResults::statistik(3, 13)],
                    ['name' => 'LELAKI', 'data' => VDemoResults::statistik(4, 1)],
                    ['name' => 'PEREMPUAN', 'data' => VDemoResults::statistik(4, 2)],
                ],
                'plotOptions' => [
                    'line' => [
                        'dataLabels' => ['enabled' => true, 'crop' => false, 'overflow' => 'none'],
                    ],
                ],
            ]
        ]);
        ?>
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsB as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuSumber::GroupSkor($group->id, $main_id) ?>/<?= OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor; ?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?> (<?= $group->shortname ?>)
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN C : STRATEGI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'STATISTIK STRATEGI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL'
                ],
                'xAxis' => [
                    'categories' => OkuGroups::groupLabel('C'),
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Skala'
                    ]
                ],
                'series' => [
                    ['name' => 'ANDA', 'data' => OkuScoring::loadScale($main_id, 'C')],
                    //                    ['name' => 'GLOBAL', 'data' => [3.8, 3, 3.4,3.2,2.8,4,4]],
                    //                    ['name' => 'SABAH', 'data' => [3.2, 2.8, 3.1,2.8,2,3.5,3]]
                ],
                'plotOptions' => [
                    'line' => [
                        'dataLabels' => ['enabled' => true, 'crop' => false, 'overflow' => 'none'],
                    ],
                ],
            ]
        ]);
        ?>
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsC as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuStrategi::GroupSkor($group->id, $main_id) ?>/<?= OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor; ?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?> (<?= $group->shortname ?>)
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN D : KESEJAHTERAAN PSIKOLOGI</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'SKOR KESEJAHTERAAN PSIKOLOGI'
                ],
                'xAxis' => [
                    'categories' => OkuGroups::groupLabel('D'),
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Skala'
                    ]
                ],
                'series' => [
                    ['name' => 'ANDA', 'data' => OkuScoring::loadScale($main_id, 'D')],
                    //                    ['name' => 'GLOBAL', 'data' => [3.8, 3, 3.4,3.2,2.8,4,4]],
                    //                    ['name' => 'SABAH', 'data' => [3.2, 2.8, 3.1,2.8,2,3.5,3]]
                ],
                'plotOptions' => [
                    'line' => [
                        'dataLabels' => ['enabled' => true, 'crop' => false, 'overflow' => 'none'],
                    ],
                ],
            ]
        ]);
        ?>
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsD as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuKesan::GroupSkor($group->id, $main_id) ?>/<?= OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor; ?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?> (<?= $group->shortname ?>)
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<div class="form-group text-center">
    <?= Html::a('<i class="fa fa-stop-circle"></i>&nbsp;Tamat Sesi', ['iksokuf/des'], ['class' => 'btn btn-danger']) ?>

</div>