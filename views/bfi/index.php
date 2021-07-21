<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?= $this->render("/site/dialog_pdpa") ?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <div class="box-body">
        

        </p>
        <p>
            Terima kasih atas kesudian dan kerjasama yang anda berikan.
        </p>
        <p>
            <strong>PERSETUJUAN</strong><br>
            Sila tekan butang “Seterusnya” jika anda faham tujuan soal selidik ini dan setuju terlibat secara sukarela.
        </p>

        <?php
        $form = ActiveForm::begin([
            'enableAjaxValidation' => true,
            'fieldConfig' => [
                'options' => [
                    'tag' => false,
                ],
            ],
            'options' => ['class' => 'form-horizontal form-label-left']
        ]);
        ?>

        <?= $form->errorSummary($model); ?>

        <div class="form-group">
            <label class="col-sm-3 control-label"></i>&nbsp;</label>

            <div class="col-sm-4">
                <?= $form->field($model, 'icno')->textInput(['maxlength' => true, 'placeholder' => 'Sila Masukkan No. Kad Pengenalan anda(Tanpa "-") '])->label(false); ?>

            </div>

        </div>


    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>
        <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-success ']) ?>

    </div>
    <!-- /.box-footer -->
    <?php ActiveForm::end(); ?>
</div>