<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OkuRespons */

$this->title = 'Create Oku Respons';
$this->params['breadcrumbs'][] = ['label' => 'Oku Respons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oku-respons-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
