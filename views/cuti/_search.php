<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekodCutiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekod-cuti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'icno') ?>

    <?= $form->field($model, 'cuti_mula') ?>

    <?= $form->field($model, 'cuti_tamat') ?>

    <?= $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'mohon_dt') ?>

    <?php // echo $form->field($model, 'ganti_by') ?>

    <?php // echo $form->field($model, 'ganti_dt') ?>

    <?php // echo $form->field($model, 'ganti_remark') ?>

    <?php // echo $form->field($model, 'app_by') ?>

    <?php // echo $form->field($model, 'app_remark') ?>

    <?php // echo $form->field($model, 'app_dt') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
