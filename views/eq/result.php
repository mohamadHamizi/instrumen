<?php

use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;

?>
<style>
    .honesty {
        color: blue;
    }

    .emosi {
        color: red;
    }

    .ekstraversi {
        color: orange;
    }

    .kebersetujuan {
        color: green;
    }

    .keberhemahan {
        color: brown;
    }

    .terbuka {
        color: purple;
    }

    .skor_tinggi {
        color: red;
        font-weight: bold;
    }

    .skor_rendah {
        color: blue;
        font-weight: bold;
    }
</style>



<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Skor EQ (Contoh Chart JS)</strong></h3>
    </div>
    <div class="box-body">

        <?= ChartJs::widget([
            'type' => 'line',
            'options' => [
                'height' => 100,
                // 'width' => 400
            ],
            'data' => [
                'labels' => ["Intrapersonal", "Interpersonal", "Pengurusan Stress", "Adaptasi", "Mood Umum", "Positive Imperssion",],
                'datasets' => [
                    [
                        'label' => "Domain",
                        'backgroundColor' => "rgba(255,99,132,0.2)",
                        'borderColor' => "rgba(255,99,132,1)",
                        'pointBackgroundColor' => "rgba(255,99,132,1)",
                        'pointBorderColor' => "#fff",
                        'pointHoverBackgroundColor' => "#fff",
                        'pointHoverBorderColor' => "rgba(255,99,132,1)",
                        'data' => $dataArr,
                    ]
                ]
            ]
        ]);
        ?>
    </div>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Skor EQ (Contoh Highchart)</strong></h3>
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
                    'categories' => ["Intrapersonal", "Interpersonal", "Pengurusan Stress", "Adaptasi", "Mood Umum", "Positive Imperssion",],
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Indeks'
                    ]
                ],
                'series' => [
                    ['name' => $model->demografi->nama_penuh, 'data' => $dataArr],
                    // ['name' => 'John', 'data' => [5, 7, 3]]
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
                        <td class="text-center"><strong>Intrapersonal</strong></td>
                        <td class="text-center"><strong>Interpersonal</strong></td>
                        <td class="text-center"><strong>Pengurusan Stress</strong></td>
                        <td class="text-center"><strong>Adaptasi</strong></td>
                        <td class="text-center"><strong>Mood Umum</strong></td>
                        <td class="text-center"><strong>Positive Impression</strong></td>
                    </tr>
                    <tr style="font-size: 30px; text-transform:uppercase;color:blue;">
                        <td class="text-center"><strong><?=$dataArr[0]?>%</strong></td>
                        <td class="text-center"><strong><?=$dataArr[1]?>%</strong></td>
                        <td class="text-center"><strong><?=$dataArr[2]?>%</strong></td>
                        <td class="text-center"><strong><?=$dataArr[3]?>%</strong></td>
                        <td class="text-center"><strong><?=$dataArr[4]?>%</strong></td>
                        <td class="text-center"><strong><?=$dataArr[5]?>%</strong></td>
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