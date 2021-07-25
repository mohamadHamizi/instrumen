<?php

use app\models\hexaco\Main;
use yii\helpers\Html;
use dosamigos\chartjs\ChartJs;
use yii\web\JsExpression;
use kartik\popover\PopoverX;

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
        <h3 class="box-title"><i class="fa fa-bar-chart"></i>&nbsp;<strong>Indeks Sub-Dimensi HEXACO</strong></h3>
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
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <?php
                    echo Main::popX('Kejujuran-Kerendahan Hati(Honesty-Humility)', 'Kejujuran-Kerendahan Hati<br>(Honesty-Humility)<br><font size="6px"><strong>H</strong>
                    </font>', 1);
                    ?>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKejujuran(); ?>%</font>
                </td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 0), Main::labelSubDimensi($no), 1.1); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>

            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 1), Main::labelSubDimensi($no), 1.2); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 2), Main::labelSubDimensi($no), 1.3); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 3), Main::labelSubDimensi($no), 1.4); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>

            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">

                    <?php
                    echo Main::popX('Emosi(Emotionality)', 'Emosi<br>(Emotionality)
                    <br>
                    <font size="6px"><strong>E</strong></font>', 2);
                    ?>

                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiEmosi(); ?>%</font>
                </td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 4), Main::labelSubDimensi($no), 2.1); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 5), Main::labelSubDimensi($no), 2.2); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 6), Main::labelSubDimensi($no), 2.3); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 7), Main::labelSubDimensi($no), 2.4); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <?php
                    echo Main::popX('Ekstraversi(Extraversion)', 'Ekstraversi<br>(Extraversion)<br>
                    <font size="6px"><strong>X</strong></font>', 3);
                    ?>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiEkstraversi(); ?>%</font>
                </td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 8), Main::labelSubDimensi($no), 3.1); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 9), Main::labelSubDimensi($no), 3.2); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 10), Main::labelSubDimensi($no), 3.3); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 11), Main::labelSubDimensi($no), 3.4); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <?php
                    echo Main::popX('Kebersetujuan(Agreeableness)', 'Kebersetujuan<br>(Agreeableness)<br>
                    <font size="6px"><strong>A</strong></font>', 4);
                    ?>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKebersetujuan(); ?>%</font>
                </td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 12), Main::labelSubDimensi($no), 4.1); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 13), Main::labelSubDimensi($no), 4.2); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 14), Main::labelSubDimensi($no), 4.3); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 15), Main::labelSubDimensi($no), 4.4); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <?php
                    echo Main::popX('Keberhemahan(Conscientiousness)', 'Keberhemahan<br>(Conscientiousness)<br>
                    <font size="6px"><strong>C</strong></font>', 5);
                    ?>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiKeberhemahan(); ?>%</font>
                </td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 16), Main::labelSubDimensi($no), 5.1); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 17), Main::labelSubDimensi($no), 5.2); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 18), Main::labelSubDimensi($no), 5.3); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 19), Main::labelSubDimensi($no), 5.4); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <?php
                    echo Main::popX('Terbuka kepada Pengalaman(Openness to Experience)', 'Terbuka kepada Pengalaman<br>(Openness to Experience)<br>
                    <font size="6px"><strong>O</strong></font>', 5);
                    ?>
                </td>
                <td align="center" class="text-center" rowspan="4" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->getDimensiTerbuka(); ?>%</font>
                </td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 20), Main::labelSubDimensi($no), 6.1); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 21), Main::labelSubDimensi($no), 6.2); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 22), Main::labelSubDimensi($no), 6.3); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td><?= $bil++ ?></td>
                <td><?php echo Main::popX(Main::labelSubDimensi($no = 23), Main::labelSubDimensi($no), 6.4); ?></td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar <?= Main::tahapColor($subIndex = Main::indeksSubDimensi($id, $no)) ?>" style="width: <?= $subIndex ?>%"><?= $subIndex ?>%</div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="text-center" style="margin-top: 30px;margin-bottom:10px;">
            <?= Html::a('<i class="fa fa-check"></i>&nbsp;Tamat Sesi / Jawab Semula', ['/hexaco/des'], ['class' => 'btn btn-danger']); ?>
        </div>
    </div>
</div>


<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp;<strong>Deskripsi Skala HEXACO</strong></h3>
    </div>
    <div class="box-body">
        <p><strong>1. KEJUJURAN-KERENDAHAN HATI:</strong>

            <?php
            echo Main::deskripsi(1);
            echo Main::deskripsi(1.1);
            echo Main::deskripsi(1.2);
            echo Main::deskripsi(1.3);
            echo Main::deskripsi(1.4);
            ?>

            <br><br>
        <p><strong>2. EMOSI:</strong>

            <?php
            echo Main::deskripsi(2);
            echo Main::deskripsi(2.1);
            echo Main::deskripsi(2.2);
            echo Main::deskripsi(2.3);
            echo Main::deskripsi(2.4);
            ?>
            <br><br>
        <p><strong>3. EKSTRAVERSI:</strong>

            <?php
            echo Main::deskripsi(3);
            echo Main::deskripsi(3.1);
            echo Main::deskripsi(3.2);
            echo Main::deskripsi(3.3);
            echo Main::deskripsi(3.4);
            ?><br><br>
        <p><strong>4. KEBERSETUJUAN (VERSUS KEMARAHAN):</strong>

            <?php
            echo Main::deskripsi(4);
            echo Main::deskripsi(4.1);
            echo Main::deskripsi(4.2);
            echo Main::deskripsi(4.3);
            echo Main::deskripsi(4.4);
            ?>
            <br><br>
        <p><strong>5. KEBERHEMAHAN:</strong>

            <?php
            echo Main::deskripsi(5);
            echo Main::deskripsi(5.1);
            echo Main::deskripsi(5.2);
            echo Main::deskripsi(5.3);
            echo Main::deskripsi(5.4);
            ?>
            <br><br>
        <p><strong>6. KETERBUKAAN UNTUK PENGALAMAN:</strong>

        <?php
            echo Main::deskripsi(6);
            echo Main::deskripsi(6.1);
            echo Main::deskripsi(6.2);
            echo Main::deskripsi(6.3);
            echo Main::deskripsi(6.4);
            ?>
        <br><br>
        <p>Sumber: <a href="https://hexaco.org/scaledescriptions">https://hexaco.org/scaledescriptions</a>

    </div>
</div>