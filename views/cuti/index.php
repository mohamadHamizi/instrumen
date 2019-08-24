<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekodCutiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekod Cutis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekod-cuti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rekod Cuti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'icno',
            'cuti_mula',
            'cuti_tamat',
            'remark',
            //'mohon_dt',
            //'ganti_by',
            //'ganti_dt',
            //'ganti_remark',
            //'app_by',
            //'app_remark',
            //'app_dt',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
