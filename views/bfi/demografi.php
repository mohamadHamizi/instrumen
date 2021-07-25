<?php

use app\models\Department;
use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\ActiveForm;
use kartik\widgets\DatePicker;
use kartik\widgets\Select2;

use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;
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
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'nama_penuh'); ?></label>

            <div class="col-sm-5">
                <?=
                $form->field($model, 'nama_penuh')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'emel'); ?></label>

            <div class="col-sm-5">
                <?=
                $form->field($model, 'emel')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jantina'); ?></label>

            <div class="col-sm-6">

                <?= $form->field($model, 'jantina')->radiolist(['L' => 'Lelaki', 'P' => 'Perempuan'])->label(false);
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'umur'); ?></label>

            <div class="col-sm-2">
                <?=
                $form->field($model, 'umur')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'status_kerja'); ?></label>

            <div class="col-sm-5">
                <?= $form->field($model, 'status_kerja')->radioButtonGroup($status_kerja, ['itemOptions' => ['labelOptions' => ['class' => 'btn btn-success']]])->label(false); ?>
                <?= $form->field($model, 'status_kerja_lain')->textInput(['hidden' => true, 'id' => 'status_kerja_lain', 'placeholder' => 'Nyatakan Status Pekerjaan anda'])->label(false) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jawatan'); ?></label>

            <div class="col-sm-5">
                <?=
                $form->field($model, 'jawatan')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'organisasi'); ?></label>
            <div class="col-sm-6">
                <?php // Usage with ActiveForm and model
                echo $form->field($model, 'organisasi')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($department, 'shortname', 'fullname'),
                    'options' => ['placeholder' => '--PILIH JFPIU--'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])->label(false);

                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'organisasi_lain'); ?></label>

            <div class="col-sm-5">
                <?=
                $form->field($model, 'organisasi_lain')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'tarikh_lahir'); ?></label>

            <div class="col-sm-3">
                <?php echo DatePicker::widget([
                    'model' => $model,
                    'attribute' => 'tarikh_lahir',
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'readonly' => true,
                    'options' => ['placeholder' => 'hari/bulan/tahun'],
                    'pickerIcon' => '<i class="fa fa-calendar text-primary"></i>',
                    'removeIcon' => '<i class="fa fa-trash text-danger"></i>',
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'dd/mm/yyyy'
                    ]
                ]); ?>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'warna'); ?></label>

            <div class="col-sm-4">
                <?=
                $form->field($model, 'warna')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'bangsa'); ?></label>

            <div class="col-sm-3">
                <?=
                $form->field($model, 'bangsa')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'darah'); ?></label>

            <div class="col-sm-2">
                <?php // Usage with ActiveForm and model
                echo $form->field($model, 'darah')->widget(Select2::classname(), [
                    'data' => $jenis_darah,
                    'options' => ['placeholder' => '--PILIH JENIS DARAH--'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])->label(false);
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'anak_keberapa'); ?></label>

            <div class="col-sm-2">
                <?=
                $form->field($model, 'anak_keberapa')->textInput()
                    ->label(false)
                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'warganegara'); ?></label>
            <div class="col-sm-2">
                <?php // Usage with ActiveForm and model
                echo $form->field($model, 'warganegara')->widget(Select2::classname(), [
                    'data' => $warganegara,
                    'options' => ['placeholder' => '--PILIH WARGANEGARA--'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])->label(false);

                ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'negara'); ?></label>
            <div class="col-sm-3">
                <?php // Usage with ActiveForm and model
                echo $form->field($model, 'negara')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map($country, 'CountryCd', 'Country'),
                    'options' => ['placeholder' => '--PILIH NEGARA--'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])->label(false);

                ?>
            </div>
        </div>

        <!-- /.box-body -->
        <div class="box-footer text-center">
            <!--<button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>-->
            <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-primary']) ?>
        </div>
        <!-- /.box-footer -->
        <?php ActiveForm::end(); ?>
    </div>

</div>
<?php
$script = <<<JS
$(function () {
$('#status_kerja_lain').hide();
$('input[name="TipiDemo[status_kerja]"]').on('change', function () {
if ($(this).val() == '99') {
$('#status_kerja_lain').show();
} else {
$('#status_kerja_lain').hide();
}
});
});        
JS;
$this->registerJs($script);
?>