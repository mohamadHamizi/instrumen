<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\OkuRefDemo;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-user"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
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
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item1'); ?></label>

            <div class="col-sm-2">
                <?= $form->field($model, 'item1')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 5])->all(), 'key', 'value'))->label(false); ?>
            </div>
            <?= Html::error($model, 'item1'); ?>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item2'); ?></label>

            <div class="col-sm-1">
                <?=
                    $form->field($model, 'item2')->textInput()->label(false)
                ?>
            </div>
            <?= Html::error($model, 'item2'); ?>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item3'); ?></label>

            <div class="col-sm-4">
                <?=
                    $form->field($model, 'item3')->textInput()->label(false)
                ?>
            </div>
            <?= Html::error($model, 'item3'); ?>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item4'); ?></label>

            <div class="col-sm-4">
                <?= $form->field($model, 'item4')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 6])->all(), 'key', 'value'))->label(false); ?>

                <?= $form->field($model, 'item4_other')->textInput(['hidden' => true, 'id' => 'item4_other'])->label(false) ?>
            </div>
            <?= Html::error($model, 'item4'); ?>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item5'); ?></label>

            <div class="col-sm-6">

                <?=
                    $form->field($model, 'item5')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 11])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'item5_other')->textInput(['hidden' => true, 'id' => 'item5_other'])->label(false) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item6'); ?></label>

            <div class="col-sm-6">

                <?=
                    $form->field($model, 'item6')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 19])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'item6_other')->textInput(['hidden' => true, 'id' => 'item6_other'])->label(false) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item7'); ?></label>

            <div class="col-sm-6">
                <?=
                    $form->field($model, 'item7')->textInput()->label(false)
                ?>
            </div>
            <?= Html::error($model, 'item7'); ?>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item8'); ?></label>

            <div class="col-sm-3">
                <?=
                    $form->field($model, 'item8')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 20])->orderBy('id DESC')->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'item8_age')->textInput(['hidden' => true, 'id' => 'item8_age'])->label(false) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item9'); ?></label>

            <div class="col-sm-3">
                <?=
                    $form->field($model, 'item9')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 20])->orderBy('id DESC')->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'item9_age')->textInput(['hidden' => true, 'id' => 'item9_age'])->label(false) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item10'); ?></label>

            <div class="col-sm-3">
                <?=
                    $form->field($model, 'item10')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 21])->andWhere(['<>', 'key', 3])->all(), 'key', 'value'))->label(false);
                ?>
                <?= Html::error($model, 'item10'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item11'); ?></label>

            <div class="col-sm-3">
                <?=
                    $form->field($model, 'item11')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 21])->andWhere(['<>', 'key', 3])->all(), 'key', 'value'))->label(false);
                ?>
                <?= Html::error($model, 'item11'); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item12'); ?></label>

            <div class="col-sm-6">

                <?=
                    $form->field($model, 'item12')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 8])->all(), 'key', 'value'))->label(false);
                ?>
                <?= $form->field($model, 'item12_other')->textInput(['hidden' => true, 'id' => 'item12_other'])->label(false) ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item13'); ?></label>

            <div class="col-sm-1">
                <?=
                    $form->field($model, 'item13')->textInput()->label(false)
                ?>
            </div>
            <?= Html::error($model, 'item13'); ?>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item14'); ?></label>

            <div class="col-sm-1">
                <?=
                    $form->field($model, 'item14')->textInput()->label(false)
                ?>
            </div>
            <?= Html::error($model, 'item14'); ?>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'item15'); ?></label>

            <div class="col-sm-3">
                <?=
                    $form->field($model, 'item15')->radiolist(ArrayHelper::map(OkuRefDemo::find()->where(['pd' => 21])->all(), 'key', 'value'))->label(false);
                ?>
                <?= Html::error($model, 'item15'); ?>
            </div>
        </div>



        <!-- /.box-body -->
        <div class="box-footer text-center">
            <!--<button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>-->
            <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Next', ['class' => 'btn btn-primary']) ?>
        </div>
        <!-- /.box-footer -->
        <?php ActiveForm::end(); ?>
    </div>


    <?php
    $script = <<< JS
    
        $(function () {

        $('#item4_other').hide();
        $('#item5_other').hide();
        $('#item6_other').hide();
        $('#item8_age').hide();
        $('#item9_age').hide();
        $('#item12_other').hide();
        
        $('input[name="MipkDemografi[item4]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#item4_other').show();
            } else {
                $('#item4_other').hide();
            }
        });

        $('input[name="MipkDemografi[item5]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#item5_other').show();
            } else {
                $('#item5_other').hide();
            }
        });

        $('input[name="MipkDemografi[item5]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#item6_other').show();
            } else {
                $('#item6_other').hide();
            }
        });

        $('input[name="MipkDemografi[item8]"]').on('click', function () {
            if ($(this).val() == '1') {
                $('#item8_age').show();
            } else {
                $('#item8_age').hide();
            }
        });

        $('input[name="MipkDemografi[item9]"]').on('click', function () {
            if ($(this).val() == '1') {
                $('#item9_age').show();
            } else {
                $('#item9_age').hide();
            }
        });

        $('input[name="MipkDemografi[item12]"]').on('click', function () {
            if ($(this).val() == '99') {
                $('#item12_other').show();
            } else {
                $('#item12_other').hide();
            }
        });
        
    });
        
JS;
    $this->registerJs($script);
    ?>