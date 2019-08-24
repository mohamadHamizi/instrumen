<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RekodCuti */

$this->title = 'Create Rekod Cuti';
$this->params['breadcrumbs'][] = ['label' => 'Rekod Cutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekod-cuti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
