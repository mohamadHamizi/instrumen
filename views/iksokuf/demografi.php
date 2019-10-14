<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\OkuRefDemo;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-calendar-plus-o"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
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
                'options' => ['class' => 'form-horizontal form-label-left'
    ]]);
    ?>

    <div class="box-body">
        <?= $form->errorSummary($model); ?>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'no_oku'); ?></label>

            <div class="col-sm-5">
                <?=
                        $form->field($model, 'no_oku')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'no_oku'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kategori'); ?></label>

            <div class="col-sm-6">

                <?= $form->field($model, 'kategori')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 2])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'kategori_lain')->textInput(['hidden'=>true, 'id'=>'kategori_lain'])->label(false)?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'sebab'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'sebab')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 3])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'sebab_lain')->textInput(['hidden'=>true, 'id'=>'sebab_lain'])->label(false)?>
                
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'sejak'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'sejak')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 4])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'sejak_lain')->textInput(['hidden'=>true, 'id'=>'sejak_lain'])->label(false)?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jantina'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'jantina')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 5])->all(), 'key', 'value'))->label(false);
                ?>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'agama'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'agama')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 6])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'agama_lain')->textInput(['hidden'=>true, 'id'=>'agama_lain'])->label(false)?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'etnik'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'etnik')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 7])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'etnik_lain')->textInput(['hidden'=>true, 'id'=>'etnik_lain'])->label(false)?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kahwin'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'kahwin')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 8])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'kahwin_lain')->textInput(['hidden'=>true, 'id'=>'kahwin_lain'])->label(false)?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Peralatan yang anda guna sekarang(boleh pilih lebih dari 1)</label>

            <div class="col-sm-6">
                <?=$form->field($model, 'kerusi_roda')->checkbox();?>
                <?=$form->field($model, 'kaki_palsu')->checkbox();?>
                <?=$form->field($model, 'tgn_palsu')->checkbox();?>
                <?=$form->field($model, 'tongkat')->checkbox();?>
                <?=$form->field($model, 'peralatan_lain')->hint('Peralatan Lain')->textInput()->label(false)?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'umur'); ?></label>

            <div class="col-sm-2">
                <?=
                        $form->field($model, 'umur')->textInput()
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
                $form->field($model, 'pendidikan')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 11])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'pendidikan_lain')->textInput(['hidden'=>true, 'id'=>'pendidikan_lain'])->label(false)?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'bantuan'); ?></label>

            <div class="col-sm-6">
                <?=
                        $form->field($model, 'bantuan')->textInput()
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'bantuan'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jumlah'); ?></label>

            <div class="col-sm-2">
                <?=
                        $form->field($model, 'jumlah')->textInput()
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
                        $form->field($model, 'kerja_anda')->textInput()
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
                        $form->field($model, 'kerja_psgn')->textInput()
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
                        $form->field($model, 'pendapatan')->textInput()
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
                        $form->field($model, 'alamat')->textInput()
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
                $form->field($model, 'negeri')->dropDownList(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 18])->all(), 'key', 'value'), ['prompt'=>'Pilih Negeri'])->label(false);
                ?>
            </div>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <!--<button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>-->
        <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-primary']) ?>
    </div>
    <!-- /.box-footer -->
    <?php ActiveForm::end(); ?>
</div>


<?php
$script = <<< JS
    
       
        $(function () {
        
        $('input[name="OkuDemografi[kategori]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#kategori_lain').show();
            } else {
                $('#kategori_lain').hide();
            }
        });
        
        $('input[name="OkuDemografi[sebab]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#sebab_lain').show();
            } else {
                $('#sebab_lain').hide();
            }
        });
        
        $('input[name="OkuDemografi[sejak]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#sejak_lain').show();
            } else {
                $('#sejak_lain').hide();
            }
        });
        
        $('input[name="OkuDemografi[agama]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#agama_lain').show();
            } else {
                $('#agama_lain').hide();
            }
        });
        
        $('input[name="OkuDemografi[etnik]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#etnik_lain').show();
            } else {
                $('#etnik_lain').hide();
            }
        });
        
        $('input[name="OkuDemografi[kahwin]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#kahwin_lain').show();
            } else {
                $('#kahwin_lain').hide();
            }
        });
        
        
        $('input[name="OkuDemografi[pendidikan]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#pendidikan_lain').show();
            } else {
                $('#pendidikan_lain').hide();
            }
        });
        
    });
        
JS;
$this->registerJs($script);
?>

<script>


</script>