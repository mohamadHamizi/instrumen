<?php

use app\models\hexaco\Main;
use dosamigos\highcharts\HighCharts;
use yii\helpers\VarDumper;
use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;
use yii\web\JsExpression;

?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Indeks Dimensi</strong></h3>
    </div>
    <div class="box-body">
        <?= ChartJs::widget([
            'type' => 'radar',
            'id' => 'structureDoughnut',
            'options' => [
                'height' => 300,
                'width' => 500,
            ],
            'data' => [
                //'radius' =>  "90%",
                'labels' => $labelDimensi,
                'datasets' => [
                    [
                        'data' => $dimensiArr,
                        'label' => '',
                        'fill' => true,
                        'backgroundColor' => "rgba(255,99,132,0.2)",
                        'borderColor' => "rgba(255,99,132,1)",
                        'pointBorderColor' => "#fff",
                        'pointBackgroundColor' => "rgba(255,99,132,1)",
                        //'hoverBorderColor'=>["#999","#999","#999"],                
                    ]
                ]
            ],
            'clientOptions' => [
                'responsive' => true,
                'legend' => [
                    'display' => false,
                    'position' => 'bottom',
                    'labels' => [
                        'fontSize' => 14,
                        'fontColor' => "#425062",
                    ]
                ],
                'tooltips' => [
                    //                                    'enabled' => true,
                    //                                    'intersect' => true,
                    'callbacks' => [
                        'label' => new JsExpression("function(t, d) {
                     var label = d.labels[t.index];
                     var data = d.datasets[t.datasetIndex].data[t.index];
                     if (t.datasetIndex === 0)
                     return label + ': ' + data;
                     else if (t.datasetIndex === 1)
                     return label + ': $' + data.toLocaleString();
              }"),
                        'title' => new JsExpression('function(){}')
                        //                                        'title' => '',
                    ]
                ],
                'hover' => [
                    'mode' => true
                ],
                'maintainAspectRatio' => false,
                'scale' => [
                    'ticks' => [
                        'beginAtZero' => true,
                        'precision' => 0,
                        // 'suggestedMax' => max(array_values(ArrayHelper::getColumn($pemberat, 'pemberat'))),
                        'stepSize' => 5
                        //                                        'maxTicksLimit' => 10
                    ],
                    'pointLabels' => [
                        'fontColor' => ['blue', 'red', 'yellow', 'green', 'black', 'purple'],
                    ]
                ]

            ],
        ]);
        ?>

    </div>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Indeks Sub-Dimensi</strong></h3>
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

VarDumper::dump($model->sincerityIndex, $depth = 50, $highlight = true);

echo  $item1 = $model->kejujuran->item1;
echo $item2 = Main::reverseSkor($model->kejujuran->item2);
echo $item3 = $model->kejujuran->item3;

$jum = $item1 + $item2 + $item3;
echo '<br>';
$total = ($jum-3)/(15-3)*100;

echo $total;
// VarDumper::dump($label, $depth = 10, $highlight = true);

?>

<div class="text-center">
    <?= Html::a('<i class="fa fa-check"></i>&nbsp;Tamat Sesi / Jawab Semula', ['/hexaco/des'], ['class' => 'btn btn-danger']); ?>
</div>