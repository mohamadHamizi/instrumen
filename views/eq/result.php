<?php

use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;

?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Skor EQ</strong></h3>
    </div>
    <div class="box-body">
        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'Domain'
                ],
                'xAxis' => [
                    'categories' => $label,
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Indeks (%)'
                    ]
                ],
                'series' => [
                    ['name' => $model->demografi->nama_penuh, 'data' => $dataArr],
                ]
            ]
        ]); ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Indeks bagi setiap domain</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped">
                    <tr style="font-size: 13px; text-transform:uppercase; font-weight:bold;">
                        <?php foreach ($label as $k) { ?>
                            <td class="text-center"><strong><?= $k ?></strong></td>
                        <?php } ?>
                    </tr>
                    <tr style="font-size: 30px; text-transform:uppercase;color:blue;">
                        <?php foreach ($dataArr as $v) { ?>
                            <td class="text-center"><strong><?= $v ?>%</strong></td>
                        <?php } ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="text-center" style="margin-top: 30px;margin-bottom:10px;">
    <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;Sebelumnya', ['bhgn6'], ['class' => 'btn btn-warning']); ?>
    <?= Html::a('<i class="fa fa-check"></i>&nbsp;Tamat Sesi / Jawab Semula', ['des'], ['class' => 'btn btn-danger']); ?>
</div>