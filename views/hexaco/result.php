<?php

use dosamigos\highcharts\HighCharts;
use yii\helpers\VarDumper;
use yii\helpers\Html;

?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Indeks Dimensi</strong></h3>
    </div>
    <div class="box-body">

        <?=
        HighCharts::widget([

            'clientOptions' => [
                'chart' => [
                    'polar' => true,
                    'type' => 'line'
                ],
                'accessibility' => [
                    'description' => 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.'
                ],
                'title' => [
                    'text' => 'Budget vs spending',
                    'x' => -80,
                ],
                'pane' => [
                    'size' => '80%'
                ],
                'xAxis' => [
                    'categories' => [
                        'Sales', 'Marketing', 'Development', 'Customer Support',
                        'Information Technology', 'Administration'
                    ],
                    'tickmarkPlacement' => 'on',
                    'lineWidth' => 0,
                ],
                'yAxis' => [
                    'gridLineInterpolation' => 'polygon',
                    'lineWidth' => 0,
                    'min' => 0,
                ],
                'tooltip' => [
                    'headerFormat' => '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>',
                    'shared' => true,
                ],
                'series' => [
                    [
                        'name' => 'Allocate Budget',
                        'data' => [43000, 19000, 60000, 35000, 17000, 10000],
                        'pointPlaement' => 'on',
                    ],
                    [
                        'name' => 'Actual Spending',
                        'data' => [50000, 39000, 42000, 31000, 26000, 14000],
                        'pointPlaement' => 'on',
                    ],
                ],
                'responsive' => [
                    'rules' => [
                        [
                            'condition' => [
                                'maxWidth' => 500,
                            ],
                            'chartOptions' => [
                                'legend' => [
                                    'align' => 'center',
                                    'verticalAlign' => 'bottom',
                                    'layout' => 'horizontal'
                                ],
                                'pane' => [
                                    'size' => '70%'
                                ],
                            ],
                        ],
                    ]
                ]
            ]
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

VarDumper::dump($dimensiArr, $depth = 10, $highlight = true);
// VarDumper::dump($label, $depth = 10, $highlight = true);

?>

<div class="text-center">
    <?= Html::a('<i class="fa fa-check"></i>&nbsp;Tamat Sesi / Jawab Semula', ['/hexaco/des'], ['class' => 'btn btn-danger']); ?>
</div>