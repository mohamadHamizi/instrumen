<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekodCuti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekod-cuti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'icno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuti_mula')->textInput() ?>

    <?= $form->field($model, 'cuti_tamat')->textInput() ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mohon_dt')->textInput() ?>

    <?= $form->field($model, 'ganti_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ganti_dt')->textInput() ?>

    <?= $form->field($model, 'ganti_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'app_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'app_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'app_dt')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
