<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

//use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OkuMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Senarai SDTS-PU';
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
            'btnView:html',
            'create_dt:datetime',
            'jantina',
            'umur',
            'agama',
            'darah',
            'universiti_kolej',
            'fakulti',
            'tahap_pengajian',
            'mod_pengajian',
            'tahun_pengajian',
            'items.a1',
            'items.a2',
            'items.a3',
            'items.b1',
            'items.b2',
            'items.c1',
            'items.c2',
            'items.c3',
            'items.c4',
            'items.d1',
            'items.d2',
            'items.d3',
            'items.e1',
            'items.e2',
        ];

        echo ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns,
            'clearBuffers' => true,
        ]);
        ?>

        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'hover' => true,
            'pjax' => true,
            'columns' => $gridColumns,
        ]);
        ?>
    </div>
</div>



