<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OkuResponsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Oku Respons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oku-respons-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Oku Respons', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'main_id',
            'question_id',
            'answer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
