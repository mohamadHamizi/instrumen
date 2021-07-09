<?php

use dosamigos\highcharts\HighCharts;
use yii\helpers\VarDumper;
use yii\helpers\Html;

?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Indeks</strong></h3>
    </div>
    <div class="box-body">

        <?=
        HighCharts::widget([
            'enable3d' => true,

            'clientOptions' => [
                'chart' => [
                    'height' => '1000px',
                    'type' => 'bar'
                ],
                'title' => [
                    'text' => ''
                ],
                'xAxis' => [
                    'categories' => $label,
                ],
                'yAxis' => [
                    'min' => 0,
                    'max' => 100,
                    'title' => [
                        'text' => 'Index %',
                        'align' => 'high',
                    ]
                ],
                'tooltip' => [
                    'headerFormat' => '<span style="font-size:12px"><strong>{point.key}</strong></span><table>',
                    'pointFormat' => '<tr><td style="color:{series.color};padding:0">{series.name}: </td><td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                    'footerFormat' => '</table>',
                    'shared' => true,
                    'useHTML' => true,
                    'valueSuffix' => '%',
                ],
                'series' => [
                    $dataArr,
                ],
                'plotOptions' => [
                    'bar' => [
                        'pointPadding' => '0.2',
                        'borderWidth' => '0',
                        'dataLabels' => ['enabled' => true],
                    ],
                ],
                'legend' => [
                    'shadow' => true,
                    'layout' => 'vertical',
                    'align' => 'right',
                    'verticalAlign' => 'top',
                    'x' => -40,
                    'y' => 80,
                    'floating' => true,
                    'borderWidth' => 1,
                    'backgroundColor' => [
                        '#FFFFFF',
                    ]
                ],
            ]
        ]);
        ?>
    </div>
</div>

<?php

// VarDumper::dump($dataArr, $depth = 10, $highlight = true);
// VarDumper::dump($label, $depth = 10, $highlight = true);

?>

<div class="text-center">
    <?= Html::a('<i class="fa fa-check"></i>&nbsp;Tamat Sesi / Jawab Semula', ['/hexaco/des'], ['class' => 'btn btn-danger']); ?>
</div>