<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

//use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OkuMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Senarai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong><?= Html::encode($this->title) ?></strong></h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="box-body">

        <?php
        $gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
            'icno',
            'demografi.no_oku',
            'tarikh',
            [
                'label' => 'Keputusan',
                'format' => 'raw',
                'value' => function ($data) {
                    return Html::a("<i class='fa fa-eye'></i>&nbsp;Papar",['admin/show-result', 'id'=>$data->id],['target'=>'_blank']);
                },
            ],
//            'demografi.kategori',
//            'demografi.sebab',
//            'demografi.sejak',
//            'demografi.jantina',
//            'demografi.agama',
//            'demografi.etnik',
//            'demografi.kahwin',
//            'demografi.kerusi_roda',
//            'demografi.kaki_palsu',
//            'demografi.tgn_palsu',
//            'demografi.tongkat',
//            'demografi.umur',
//            'demografi.pendidikan',
//            'demografi.bantuan',
//            'demografi.jumlah',
//            'demografi.kerja_anda',
//            'demografi.kerja_psgn',
//            'demografi.pendapatan',
//            'demografi.alamat',
//            'demografi.negeri',
//            ['class' => 'yii\grid\ActionColumn'],
        ];


//        echo ExportMenu::widget([
//            'dataProvider' => $dataProvider,
//            'columns' => $gridColumns,
//            'clearBuffers' => true,
//        ]);
        ?>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
//            'responsiveWrap' => true,
//            'responsive' => true,
            'hover' => true,
            'pjax' => true,
            'columns' => $gridColumns,
        ]);
        ?>
    </div>
</div>



