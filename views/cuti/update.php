<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RekodCuti */

$this->title = 'Update Rekod Cuti: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rekod Cutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekod-cuti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
