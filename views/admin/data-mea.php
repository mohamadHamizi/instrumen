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
            'tarikh_isi', 'icno', 'tret_anda', 'tret_bos', 'nama_penuh', 'nama_kj', 'jantina', 'umur', 'jawatan', 'organisasi', 'tarikh_lahir', 'warna', 'bangsa', 'darah', 'anak_keberapa',
            'j1_total_anda_1', 'j1_total_anda_2', 'j2_total_anda_1', 'j2_total_anda_2', 'j3_total_anda_1', 'j3_total_anda_2', 'j4_total_anda_1', 'j4_total_anda_2', 
            'j1_total_bos_1', 'j1_total_bos_2', 'j2_total_bos_1', 'j2_total_bos_2', 'j3_total_bos_1', 'j3_total_bos_2', 'j4_total_bos_1', 'j4_total_bos_2', 
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
            'filterModel' => $searchModel,
            'hover' => true,
            'pjax' => true,
            'columns' => $gridColumns,
        ]);
        ?>
    </div>
</div>



