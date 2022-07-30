<?php

use app\models\OkuRefDemo;
use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\Select2;

use yii\helpers\ArrayHelper;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-fa-user-secret"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?php
    $form = ActiveForm::begin([
        'fieldConfig' => [
            'options' => [
                'tag' => false,
            ],
        ],
        'options' => ['class' => 'form-horizontal form-label-left']
    ]);
    ?>

    <div class="box-body">

        <?= $form->errorSummary($model); ?>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jantina'); ?></label>

            <div class="col-sm-6">

                <?= $form->field($model, 'jantina')->radiolist([1 => 'Lelaki', 2 => 'Perempuan'])->label(false);
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'umur'); ?></label>

            <div class="col-sm-3">
                <?=
                $form->field($model, 'umur')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'agama'); ?></label>

            <div class="col-sm-3">

                <?= $form->field($model, 'agama')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 6])->all(), 'key', 'value'))->label(false);
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'darah'); ?></label>

            <div class="col-sm-2">

                <?= $form->field($model, 'darah')->dropDownList($jenis_darah)->label(false);
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'universiti_kolej'); ?></label>

            <div class="col-sm-6">
                <?=
                $form->field($model, 'universiti_kolej')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'fakulti'); ?></label>

            <div class="col-sm-5">
                <?=
                $form->field($model, 'fakulti')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'tahap_pengajian'); ?></label>

            <div class="col-sm-5">

                <?= $form->field($model, 'tahap_pengajian')->dropDownList($tahapPengajian)->label(false);
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'mod_pengajian'); ?></label>

            <div class="col-sm-6">

                <?= $form->field($model, 'mod_pengajian')->radiolist($modPengajian)->label(false);
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'tahun_pengajian'); ?></label>

            <div class="col-sm-3">

                <?= $form->field($model, 'tahun_pengajian')->dropDownList([
                    1 => 'Tahun 1',
                    2 => 'Tahun 2',
                    3 => 'Tahun 3',
                    4 => 'Tahun 4',
                    5 => 'Tahun 5',
                    6 => 'Tahun 6',
                ])->label(false);
                ?>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'pngs'); ?></label>

            <div class="col-sm-1">
                <?=
                $form->field($model, 'pngs')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'pngk'); ?></label>

            <div class="col-sm-1">
                <?=
                $form->field($model, 'pngk')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>



        <!-- /.box-body -->
        <div class="box-footer text-center">
            <button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>
            <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-primary']) ?>
        </div>
        <!-- /.box-footer -->
        <?php ActiveForm::end(); ?>
    </div>

</div>