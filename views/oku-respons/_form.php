<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OkuRespons */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oku-respons-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'main_id')->textInput() ?>

    <?= $form->field($model, 'question_id')->textInput() ?>

    <?php //$form->field($model, 'answer')->textInput() ?>
    <?=$form->radioButton($model, 'answer', array(
        'value' => 1,
        'uncheckValue' => null
    ));
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
