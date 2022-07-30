<?php

use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;
use yii\web\JsExpression;
use yii\helpers\ArrayHelper;

?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Indeks Dimensi SDTS-PU</strong></h3>
    </div>
    <div class="box-body">
        <?= ChartJs::widget([
            'type' => 'radar',
            'id' => 'structureDoughnut',
            'options' => [
                'height' => 400,
                // 'width' => 00,
            ],
            'data' => [
                // 'radius' =>  "90%",
                'labels' => $model->labelDimensi(),
                'datasets' => [
                    [
                        'data' => $model->indeksDimensi(),
                        'label' => 'Indeks Dimensi',
                        'fill' => true,
                        'backgroundColor' => "rgba(255,99,132,0.2)",
                        'borderColor' => "rgba(255,99,132,1)",
                        'pointBorderColor' => "#fff",
                        'pointBackgroundColor' => "rgba(255,99,132,1)",
                        'hoverBorderColor' => ["#999", "#999", "#999"],
                    ]
                ]
            ],
            'clientOptions' => [
                'responsive' => true,
                'legend' => [
                    'display' => true,
                    'position' => 'bottom',
                    'labels' => [
                        'fontSize' => 14,
                        'fontColor' => "#425062",
                    ]
                ],
                'tooltips' => [
                    'enabled' => true,
                    'intersect' => true,
                    'callbacks' => [
                        'label' => new JsExpression("function(t, d) {
                     var label = d.labels[t.index];
                     var data = d.datasets[t.datasetIndex].data[t.index];
                     if (t.datasetIndex === 0)
                     return label;
                     else if (t.datasetIndex === 1)
                     return label + ': $' + data.toLocaleString();
              }"),
                        'title' => new JsExpression('function(){}')
                        //    'title' => 'a',
                    ]
                ],
                'hover' => [
                    'mode' => true,
                ],
                'maintainAspectRatio' => false,
                'scale' => [
                    'ticks' => [
                        'beginAtZero' => true,
                        'precision' => 0,
                        // 'suggestedMax' => max(array_values(ArrayHelper::getColumn($pemberat, 'pemberat'))),
                        'stepSize' => 5,
                        'maxTicksLimit' => 10
                    ],
                    'pointLabels' => [
                        'fontColor' => ['blue', 'red', 'orange', 'green', 'brown', 'purple'],
                    ]
                ]

            ],
        ]);
        ?>

    </div>
</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-bar-chart"></i>&nbsp;<strong>Indeks Dimensi SDTS-PU</strong></h3>
    </div>
    <div class="box-body">
        <table class="table table-primary table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th width='3%'>Bil</th>
                    <th width='10%' class='text-center'>Dimensi</th>
                    <th width='5%' class='text-center'>Indeks</th>
                    <th width='50%' class='text-center'>Item</th>
                    <th class='text-center'>Skor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center" rowspan="2">1</td>
                    <td class="text-center" rowspan="2"><?= ArrayHelper::getValue($model->labelDimensi(), 0); ?></td>
                    <td class="text-center" rowspan="2"><?= ArrayHelper::getValue($model->indeksDimensi(), 0); ?>%</td>
                    <td><?= $arrQuestions['a1'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_a1'] ?>"><?= $data['a1'] ?></span></td>
                </tr>
                <tr>
                    <td><?= $arrQuestions['a2'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_a2'] ?>"><?= $data['a2'] ?></span></td>
                </tr>
                <tr>
                    <td class="text-center" rowspan="2">2</td>
                    <td class="text-center" rowspan="2"><?= ArrayHelper::getValue($model->labelDimensi(), 1); ?></td>
                    <td class="text-center" rowspan="2"><?= ArrayHelper::getValue($model->indeksDimensi(), 1); ?>%</td>
                    <td><?= $arrQuestions['b1'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_b1'] ?>"><?= $data['b1'] ?></span></td>
                </tr>
                <tr>
                    <td><?= $arrQuestions['b2'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_b2'] ?>"><?= $data['b2'] ?></span></td>
                </tr>
                <tr>
                    <td class="text-center" rowspan="4">3</td>
                    <td class="text-center" rowspan="4"><?= ArrayHelper::getValue($model->labelDimensi(), 2); ?></td>
                    <td class="text-center" rowspan="4"><?= ArrayHelper::getValue($model->indeksDimensi(), 2); ?>%</td>
                    <td><?= $arrQuestions['c1'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_c1'] ?>"><?= $data['c1'] ?></span></td>
                </tr>
                <tr>
                    <td><?= $arrQuestions['c2'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_c2'] ?>"><?= $data['c2'] ?></span></td>
                </tr>
                <tr>
                    <td><?= $arrQuestions['c3'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_c3'] ?>"><?= $data['c3'] ?></span></td>
                </tr>
                <tr>
                    <td><?= $arrQuestions['c4'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_c4'] ?>"><?= $data['c4'] ?></span></td>
                </tr>
                <tr>
                    <td class="text-center" rowspan="3">4</td>
                    <td class="text-center" rowspan="3"><?= ArrayHelper::getValue($model->labelDimensi(), 3); ?></td>
                    <td class="text-center" rowspan="3"><?= ArrayHelper::getValue($model->indeksDimensi(), 3); ?>%</td>
                    <td><?= $arrQuestions['d1'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_d1'] ?>"><?= $data['d1'] ?></span></td>
                </tr>
                <tr>
                    <td><?= $arrQuestions['d2'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_d2'] ?>"><?= $data['d2'] ?></span></td>
                </tr>
                <tr>
                    <td><?= $arrQuestions['d3'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_d3'] ?>"><?= $data['d3'] ?></span></td>
                </tr>
                <tr>
                    <td class="text-center" rowspan="2">5</td>
                    <td class="text-center" rowspan="2"><?= ArrayHelper::getValue($model->labelDimensi(), 4); ?></td>
                    <td class="text-center" rowspan="2"><?= ArrayHelper::getValue($model->indeksDimensi(), 4); ?>%</td>
                    <td><?= $arrQuestions['e1'] ?></td>
                    <td class="text-center"><span class="badge <?= $data['tahap_e1'] ?>"><?= $data['e1'] ?></span></td>
                </tr>
                <tr>
                    <td><?= $arrQuestions['e2'] ?></td>
                    <<td class="text-center"><span class="badge <?= $data['tahap_e2'] ?>"><?= $data['e2'] ?></span></td>
                </tr>
            </tbody>

        </table>
        <div class="text-center" style="margin-top: 30px;margin-bottom:10px;">
            <?= Html::a('<i class="fa fa-check"></i>&nbsp;Tamat Sesi / Jawab Semula', ['/sdts/des'], ['class' => 'btn btn-danger']); ?>
        </div>
    </div>
</div>
