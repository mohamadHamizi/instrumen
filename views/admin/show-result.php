<?php

use app\models\OkuDimensi;
use app\models\OkuScoring;
use app\models\OkuSumber;
use app\models\OkuStrategi;
use app\models\OkuKesan;
use app\models\OkuGroups;
use app\models\VDemoResults;
use kartik\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\OkuRefDemo;
?>
<?php //yii\helpers\VarDumper::dump($dataA,10,true);     ?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-user"></i>&nbsp;DEMOGRAFI</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?php
        $form = ActiveForm::begin([
                    'fieldConfig' => [
                        'options' => [
                            'tag' => false,
                        ],
                    ],
                    'options' => ['class' => 'form-horizontal form-label-left'
        ]]);
        ?>

        <div class="box-body">
            <?= $form->errorSummary($model); ?>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'no_oku'); ?></label>

                <div class="col-sm-5">
                    <?=
                            $form->field($model, 'no_oku')->textInput(['disabled'=>true])
//                        ->hint('Please enter your name')
                            ->label(false)
                    ?>
                </div>
                <?= Html::error($model, 'no_oku'); ?>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kategori'); ?></label>

                <div class="col-sm-6">

                    <?= $form->field($model, 'kategori')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 2])->all(), 'key', 'value'), ['disabled'=>true])->label(false);
                    ?>
                    <?= $model->kategori_lain ? $form->field($model, 'kategori_lain')->textInput(['hidden' => true, 'id' => 'kategori_lain'])->label(false) : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'sebab'); ?></label>

                <div class="col-sm-6">

                    <?=
                    $form->field($model, 'sebab')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 3])->all(), 'key', 'value'), ['disabled'=>true])->label(false);
                    ?>
                    <?= $model->sebab_lain ? $form->field($model, 'sebab_lain')->textInput(['hidden' => true, 'id' => 'sebab_lain'])->label(false) : '' ?>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'sejak'); ?></label>

                <div class="col-sm-6">

                    <?=
                    $form->field($model, 'sejak')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 4])->all(), 'key', 'value'), ['disabled'=>true])->label(false);
                    ?>
                    <?= $model->sejak_lain ? $form->field($model, 'sejak_lain')->textInput(['hidden' => true, 'id' => 'sejak_lain'])->label(false) : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jantina'); ?></label>

                <div class="col-sm-6">

                    <?=
                    $form->field($model, 'jantina')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 5])->all(), 'key', 'value'), ['disabled'=>true])->label(false);
                    ?>

                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'agama'); ?></label>

                <div class="col-sm-6">

                    <?=
                    $form->field($model, 'agama')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 6])->all(), 'key', 'value'), ['disabled'=>true])->label(false);
                    ?>
                    <?= $model->agama_lain ? $form->field($model, 'agama_lain')->textInput(['hidden' => true, 'id' => 'agama_lain'])->label(false) : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'etnik'); ?></label>

                <div class="col-sm-6">

                    <?=
                    $form->field($model, 'etnik')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 7])->all(), 'key', 'value'), ['disabled'=>true])->label(false);
                    ?>
                    <?= $model->etnik_lain ? $form->field($model, 'etnik_lain')->textInput(['hidden' => true, 'id' => 'etnik_lain'])->label(false) : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kahwin'); ?></label>

                <div class="col-sm-6">

                    <?=
                    $form->field($model, 'kahwin')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 8])->all(), 'key', 'value'), ['disabled'=>true])->label(false);
                    ?>
                    <?= $model->kahwin_lain ? $form->field($model, 'kahwin_lain')->textInput(['hidden' => true, 'id' => 'kahwin_lain'])->label(false) : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Peralatan yang anda guna sekarang(boleh pilih lebih dari 1)</label>

                <div class="col-sm-6">
                    <?= $form->field($model, 'kerusi_roda')->checkbox(['disabled'=>true]); ?>
                    <?= $form->field($model, 'kaki_palsu')->checkbox(['disabled'=>true]); ?>
                    <?= $form->field($model, 'tgn_palsu')->checkbox(['disabled'=>true]); ?>
                    <?= $form->field($model, 'tongkat')->checkbox(['disabled'=>true]); ?>
                    <?= $model->peralatan_lain ? $form->field($model, 'peralatan_lain')->hint('Peralatan Lain')->textInput()->label(false) : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'umur'); ?></label>

                <div class="col-sm-2">
                    <?=
                            $form->field($model, 'umur')->textInput(['disabled'=>true])
//                        ->hint('Please enter your name')
                            ->label(false)
                    ?>
                </div>
                <?= Html::error($model, 'umur'); ?>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'pendidikan'); ?></label>

                <div class="col-sm-6">

                    <?=
                    $form->field($model, 'pendidikan')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 11])->all(), 'key', 'value'), ['disabled'=>true])->label(false);
                    ?>
                    <?= $model->pendidikan_lain ? $form->field($model, 'pendidikan_lain')->textInput(['hidden' => true, 'id' => 'pendidikan_lain'])->label(false) : '' ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'bantuan'); ?></label>

                <div class="col-sm-6">
                    <?=
                            $form->field($model, 'bantuan')->textInput(['disabled'=>true])
                            ->label(false)
                    ?>
                </div>
                <?= Html::error($model, 'bantuan'); ?>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jumlah'); ?></label>

                <div class="col-sm-2">
                    <?=
                            $form->field($model, 'jumlah')->textInput(['disabled'=>true])
//                        ->hint('Please enter your name')
                            ->label(false)
                    ?>
                </div>
                <?= Html::error($model, 'jumlah'); ?>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kerja_anda'); ?></label>

                <div class="col-sm-6">
                    <?=
                            $form->field($model, 'kerja_anda')->textInput(['disabled'=>true])
//                        ->hint('Please enter your name')
                            ->label(false)
                    ?>
                </div>
                <?= Html::error($model, 'kerja_anda'); ?>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kerja_psgn'); ?></label>

                <div class="col-sm-6">
                    <?=
                            $form->field($model, 'kerja_psgn')->textInput(['disabled'=>true])
//                        ->hint('Please enter your name')
                            ->label(false)
                    ?>
                </div>
                <?= Html::error($model, 'kerja_psgn'); ?>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'pendapatan'); ?></label>

                <div class="col-sm-3">
                    <?=
                            $form->field($model, 'pendapatan')->textInput(['disabled'=>true])
//                        ->hint('Please enter your name')
                            ->label(false)
                    ?>
                </div>
                <?= Html::error($model, 'pendapatan'); ?>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'alamat'); ?></label>

                <div class="col-sm-8">
                    <?=
                            $form->field($model, 'alamat')->textInput(['disabled'=>true])
//                        ->hint('Please enter your name')
                            ->label(false)
                    ?>
                </div>
                <?= Html::error($model, 'alamat'); ?>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'negeri'); ?></label>

                <div class="col-sm-6">
                    <?=
                    $form->field($model, 'negeri')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 18])->all(), 'key', 'value'), ['prompt' => 'Pilih Negeri', 'disabled'=>true])->label(false);
                    ?>
                </div>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <?=Html::a("<i class='fa fa-backward'></i>&nbsp;Kembali",['admin/index'],['class'=>'btn btn-primary']);?>
        </div>
        <!-- /.box-footer -->
        <?php ActiveForm::end(); ?>
    </div>
</div>



<!-- PRODUCT LIST -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN A : DIMENSI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'STATISTIK DIMENSI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL'
                ],
                'xAxis' => [
                    'categories' => OkuGroups::groupLabel('A'),
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Skala'
                    ]
                ],
                'series' => [
                    ['name' => 'ANDA', 'data' => OkuScoring::loadScale($main_id, 'A')],
                    ['name' => 'SABAH', 'data' => VDemoResults::statistik(1, 12)],
                    ['name' => 'SEMENANJUNG', 'data' => VDemoResults::statistik(1, 1)],
                    ['name' => 'SARAWAK', 'data' => VDemoResults::statistik(1, 13)],
                    ['name' => 'LELAKI', 'data' => VDemoResults::statistik(2, 1)],
                    ['name' => 'PEREMPUAN', 'data' => VDemoResults::statistik(2, 2)],
                ],
                'plotOptions' => [
                    'line' => [
                        'dataLabels' => ['enabled' => true, 'crop' => false, 'overflow' => 'none'],
                    ],
                ],
            ]
        ]);
        ?>

        <ul class="products-list product-list-in-box">
            <?php foreach ($groups as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuDimensi::GroupSkor($group->id, $main_id) ?>/<?= OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor; ?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?> (<?= $group->shortname ?>)
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN B : SUMBER KEBAHAGIAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'STATISTIK SUMBER KEBAHAGIAN SUBJEKTIF OKU-FIZIKAL'
                ],
                'xAxis' => [
                    'categories' => OkuGroups::groupLabel('B'),
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Skala'
                    ]
                ],
                'series' => [
                    ['name' => 'ANDA', 'data' => OkuScoring::loadScale($main_id, 'B')],
                    ['name' => 'SABAH', 'data' => VDemoResults::statistik(3, 12)],
                    ['name' => 'SEMENANJUNG', 'data' => VDemoResults::statistik(3, 1)],
                    ['name' => 'SARAWAK', 'data' => VDemoResults::statistik(3, 13)],
                    ['name' => 'LELAKI', 'data' => VDemoResults::statistik(4, 1)],
                    ['name' => 'PEREMPUAN', 'data' => VDemoResults::statistik(4, 2)],
                ],
                'plotOptions' => [
                    'line' => [
                        'dataLabels' => ['enabled' => true, 'crop' => false, 'overflow' => 'none'],
                    ],
                ],
            ]
        ]);
        ?>
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsB as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuSumber::GroupSkor($group->id, $main_id) ?>/<?= OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor; ?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?> (<?= $group->shortname ?>)
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN C : STRATEGI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'STATISTIK STRATEGI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL'
                ],
                'xAxis' => [
                    'categories' => OkuGroups::groupLabel('C'),
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Skala'
                    ]
                ],
                'series' => [
                    ['name' => 'ANDA', 'data' => OkuScoring::loadScale($main_id, 'C')],
//                    ['name' => 'GLOBAL', 'data' => [3.8, 3, 3.4,3.2,2.8,4,4]],
//                    ['name' => 'SABAH', 'data' => [3.2, 2.8, 3.1,2.8,2,3.5,3]]
                ],
                'plotOptions' => [
                    'line' => [
                        'dataLabels' => ['enabled' => true, 'crop' => false, 'overflow' => 'none'],
                    ],
                ],
            ]
        ]);
        ?>
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsC as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuStrategi::GroupSkor($group->id, $main_id) ?>/<?= OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor; ?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?> (<?= $group->shortname ?>)
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN D : KESAN KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?=
        \dosamigos\highcharts\HighCharts::widget([
            'clientOptions' => [
                'chart' => [
                    'type' => 'line'
                ],
                'title' => [
                    'text' => 'STATISTIK KESAN KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL'
                ],
                'xAxis' => [
                    'categories' => OkuGroups::groupLabel('D'),
                ],
                'yAxis' => [
                    'title' => [
                        'text' => 'Skala'
                    ]
                ],
                'series' => [
                    ['name' => 'ANDA', 'data' => OkuScoring::loadScale($main_id, 'D')],
//                    ['name' => 'GLOBAL', 'data' => [3.8, 3, 3.4,3.2,2.8,4,4]],
//                    ['name' => 'SABAH', 'data' => [3.2, 2.8, 3.1,2.8,2,3.5,3]]
                ],
                'plotOptions' => [
                    'line' => [
                        'dataLabels' => ['enabled' => true, 'crop' => false, 'overflow' => 'none'],
                    ],
                ],
            ]
        ]);
        ?>
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsD as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuKesan::GroupSkor($group->id, $main_id) ?>/<?= OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor; ?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?> (<?= $group->shortname ?>)
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>


