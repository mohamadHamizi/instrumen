<?php

use app\models\hexaco\Main;
use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;
use yii\web\JsExpression;
use yii\widgets\DetailView;

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
</style>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Demografi Responden</strong></h3>
    </div>
    <div class="box-body">
        <?php
        echo DetailView::widget([
            'model' => $demo,
            'attributes' => [
                [
                    'label' => 'Nama Penuh',
                    'value' => $demo->nama_penuh,
                ],
                'jantina',
                'umur',
                [                      // the owner name of the model
                    'label' => 'Jawatan',
                    'value' => $demo->jawatan,
                ],
                'organisasi',
                'organisasi_lain',
                'tarikh_lahir',
                'warna',
                'bangsa',
                'darah',
                [                      // the owner name of the model
                    'label' => 'Warganegara',
                    'value' => $demo->warganegara,
                ],
                'anak_keberapa',
                [                      // the owner name of the model
                    'label' => 'Negara',
                    'value' => $demo->negara,
                ],
            ],
        ]);
        ?>
    </div>
</div>


<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Indeks Dimensi HEXACO</strong></h3>
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
                'labels' => $labelDimensi,
                'datasets' => [
                    [
                        'data' => $dimensiArr,
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
                    // 'display' => true,
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
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Indeks Sub-Dimensi HEXACO</strong></h3>
    </div>
    <div class="box-body">
        <table class="table table-primary table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th width='3%'>Bil</th>
                    <th width='15%' class='text-center'>Dimensi</th>
                    <th width='5%' class='text-center'>Indeks<br>Dimensi</th>
                    <th width='15%' class='text-center'>Sub-dimensi</th>
                    <th class='text-center'>Indeks<br>Sub-dimensi</th>
                </tr>
            </thead>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Kejujuran-Kerendahan Hati<br>(Honesty-Humility)<br>
                    <font size="6px"><strong>H</strong>
                    </font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKejujuran(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 0); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>

            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 1); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 2); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 3); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>

            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Emosi<br>(Emotionality)
                    <br>
                    <font size="6px"><strong>E</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiEmosi(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 4); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 5); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 6); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 7); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Ekstraversi<br>(Extraversion)<br>
                    <font size="6px"><strong>X</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiEkstraversi(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 8); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 9); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 10); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 11); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Kebersetujuan<br>(Agreeableness)<br>
                    <font size="6px"><strong>A</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKebersetujuan(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 12); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 13); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 14); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 15); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Keberhemahan<br>(Conscientiousness)<br>
                    <font size="6px"><strong>C</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKeberhemahan(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 16); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 17); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 18); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 19); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">Terbuka kepada Pengalaman<br>(Openness to Experience)<br>
                    <font size="6px"><strong>O</strong></font>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiTerbuka(); ?>%</font>
                </td>
                <td><?= Main::labelSubDimensi($no = 20); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 21); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 22); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?= Main::labelSubDimensi($no = 23); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="text-center">
    <?= Html::a('<i class="fa fa-undo"></i>&nbsp;Kembali', ['/admin/data-hexaco'], ['class' => 'btn btn-success']); ?>
</div>