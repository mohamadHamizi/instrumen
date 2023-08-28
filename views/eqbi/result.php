<?php

use yii\helpers\Html;

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
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>EQ Score</strong></h3>
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
                        'text' => 'Index (%)'
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
                    <th width='10%' class='text-center'>Index</th>
                    <th width='20%' class='text-center'>Sub-domain</th>
                    <th class='text-center'>Index</th>
                </tr>
            </thead>
            <tr class="honesty">
                <td align="center" class="text-center" rowspan="5" style="vertical-align : middle;text-align:center;">
                    1. Intrapersonal
                </td>
                <td align="center" class="text-center" rowspan="5" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->intrapersonal ?>%</font>
                </td>
                <td>1.1 Self Regard</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->penilaianKendiri ?>%"><?= $model->penilaianKendiri ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td>1.2 Emotioanal Self Awareness</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->kesedaranEmosi ?>%"><?= $model->kesedaranEmosi ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td>1.3 Assertiveness</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->penegasanDiri ?>%"><?= $model->penegasanDiri ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td>1.4 Independent</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->berdikari ?>%"><?= $model->berdikari ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="honesty">
                <td>1.5 Actualization</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->kesempurnaanKendiri ?>%"><?= $model->kesempurnaanKendiri ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td align="center" class="text-center" rowspan="3" style="vertical-align : middle;text-align:center;">
                    2. Interpersonal
                </td>
                <td align="center" class="text-center" rowspan="3" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->interpersonal ?>%</font>
                </td>
                <td>2.1 Empathy</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-red" style="width: <?= $model->empati ?>%"><?= $model->empati ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td>2.2 Social Responsibility</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-red" style="width: <?= $model->tanggungjawabSosial ?>%"><?= $model->tanggungjawabSosial ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="emosi">
                <td>2.3 Interpersonal Relationship</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-red" style="width: <?= $model->hubunganInterpersonal ?>%"><?= $model->hubunganInterpersonal ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td align="center" class="text-center" rowspan="3" style="vertical-align : middle;text-align:center;">
                    3. Adaptability
                </td>
                <td align="center" class="text-center" rowspan="3" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->adaptasi ?>%</font>
                </td>
                <td>3.1 Reality Testing</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-yellow" style="width: <?= $model->penghayatanRealiti ?>%"><?= $model->penghayatanRealiti ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td>3.2 Flexible</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-yellow" style="width: <?= $model->fleksibel ?>%"><?= $model->fleksibel ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="ekstraversi">
                <td>3.3 Problem Solving</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-yellow" style="width: <?= $model->penyelesaianMasalah ?>%"><?= $model->penyelesaianMasalah ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    4. Stress Management
                </td>
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->pengurusanStres ?>%</font>
                </td>
                <td>4.1 Stress Tolerance</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-green" style="width: <?= $model->toleransiStres ?>%"><?= $model->toleransiStres ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="kebersetujuan">
                <td>4.2 Impulse Control</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-green" style="width: <?= $model->pengawalanDorongan ?>%"><?= $model->pengawalanDorongan ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    5. General Mood
                </td>
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->moodUmum ?>%</font>
                </td>
                <td>5.1 Optimise</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-purple" style="width: <?= $model->optimis ?>%"><?= $model->optimis ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="terbuka">
                <td>5.2 Happiness</td>
                <td>
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-purple" style="width: <?= $model->kebahagiaan ?>%"><?= $model->kebahagiaan ?>%</div>
                    </div>
                </td>
            </tr>
            <tr class="keberhemahan">
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    6. Positive Impression
                </td>
                <td align="center" class="text-center" rowspan="2" style="vertical-align : middle;text-align:center;">
                    <font size="6px"><?= $model->tanggapanPositif ?>%</font>
                </td>
                <td style="vertical-align : middle;">6.1 Positive Impression</td>
                <td align="center" class="text-center" style="vertical-align : middle;text-align:center;">
                    <div class="progress progress-lg">
                        <div class="progress-bar bg-primary" style="width: <?= $model->tanggapanPositif ?>%"><?= $model->tanggapanPositif ?>%</div>
                    </div>
                </td>
            </tr>
        </table>

    </div>
</div>

<div class="text-center" style="margin-top: 30px;margin-bottom:10px;">
    <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;Previous', ['bhgn6'], ['class' => 'btn btn-warning']); ?>
    <?= Html::a('<i class="fa fa-check"></i>&nbsp;End session', ['des'], ['class' => 'btn btn-danger']); ?>
</div>

<?php //echo Questions::getMin(1,'1.5'); 
?>
<?php //echo Questions::getMax(1,'1.5'); 
?>
<!-- <br> -->
<?php //echo $model->berdikari; 
?>