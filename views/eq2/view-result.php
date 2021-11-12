<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
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

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-bar-chart"></i>&nbsp;<strong>Indeks Domain / Sub-Domain</strong></h3>
    </div>
    <div class="box-body">
        <table class="table table-primary table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th width='15%' class='text-center'>Domain</th>
                    <th width='10%' class='text-center'>Indeks<br>Domain</th>
                    <th width='20%' class='text-center'>Sub-domain</th>
                    <th class='text-center'>Indeks<br>Sub-domain</th>
                </tr>
            </thead>
            <tr class="honesty">
                <td align="center" class="text-center" rowspan="5" style="vertical-align : middle;text-align:center;">
                    1. INTRAPERSONAL
                </td>
                <td align="center" class="text-center" rowspan="5" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->intrapersonal ?>%</font>
                </td>
                <td>1.1 Penilaian Kendiri</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->penilaianKendiri ?>%"><?= $model->penilaianKendiri ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td>1.2 Kesedaran Emosi Diri</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->kesedaranEmosi ?>%"><?= $model->kesedaranEmosi ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td>1.3 Penegasan Diri</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->penegasanDiri ?>%"><?= $model->penegasanDiri ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td>1.4 Berdikari</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->berdikari ?>%"><?= $model->berdikari ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td>1.5 Kesempurnaan Kendiri</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->kesempurnaanKendiri ?>%"><?= $model->kesempurnaanKendiri ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td align="center" class="text-center" rowspan="3" style="vertical-align : middle;text-align:center;">
                    2. INTERPERSONAL
                </td>
                <td align="center" class="text-center" rowspan="3" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->interpersonal ?>%</font>
                </td>
                <td>2.1 Empati</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-red" style="width: <?= $model->empati ?>%"><?= $model->empati ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td>2.2 Tanggungjawab Sosial</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-red" style="width: <?= $model->tanggungjawabSosial ?>%"><?= $model->tanggungjawabSosial ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td>2.3 Hubungan Interpersonal</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-red" style="width: <?= $model->hubunganInterpersonal ?>%"><?= $model->hubunganInterpersonal ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td align="center" class="text-center" rowspan="3" style="vertical-align : middle;text-align:center;">
                    3. ADAPTASI
                </td>
                <td align="center" class="text-center" rowspan="3" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->adaptasi ?>%</font>
                </td>
                <td>3.1 Penghayatan Realiti</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-yellow" style="width: <?= $model->penghayatanRealiti ?>%"><?= $model->penghayatanRealiti ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td>3.2 Fleksibel</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-yellow" style="width: <?= $model->fleksibel ?>%"><?= $model->fleksibel ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td>3.3 Penyelesaian Masalah</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-yellow" style="width: <?= $model->penyelesaianMasalah ?>%"><?= $model->penyelesaianMasalah ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    4. PENGURUSAN STRES
                </td>
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->pengurusanStres ?>%</font>
                </td>
                <td>4.1 Toleransi Stres</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-green" style="width: <?= $model->toleransiStres ?>%"><?= $model->toleransiStres ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td>4.2 Pengawalan Dorongan</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-green" style="width: <?= $model->pengawalanDorongan ?>%"><?= $model->pengawalanDorongan ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    5. MOOD UMUM
                </td>
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->moodUmum ?>%</font>
                </td>
                <td>5.1 Optimis</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-purple" style="width: <?= $model->optimis ?>%"><?= $model->optimis ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td>5.2 Kebahagiaan</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-purple" style="width: <?= $model->kebahagiaan ?>%"><?= $model->kebahagiaan ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    6. TANGGAPAN POSITIF
                </td>
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->tanggapanPositif ?>%</font>
                </td>
                <td style="vertical-align : middle;">6.1 Tanggapan Positif</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->tanggapanPositif ?>%"><?= $model->tanggapanPositif ?>%</div>
                    </div>
                </td>
            </tr>
        </table>

    </div>
</div>

<div class="text-center">
    <?= Html::a('<i class="fa fa-undo"></i>&nbsp;Kembali', ['/admin/data-eq2'], ['class' => 'btn btn-success']); ?>
</div>