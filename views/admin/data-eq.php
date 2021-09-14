<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

//use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OkuMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Senarai data EQ-Malay';
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
            'icno',
            'demografi.nama_penuh',
            'demografi.emel',
            'demografi.jantina',
            'demografi.umur',
            'demografi.status_kerja',
            'demografi.status_kerja_lain',
            'demografi.jawatan',
            'demografi.organisasi',
            'demografi.organisasi_lain',
            'demografi.tarikh_lahir',
            'demografi.warna',
            'demografi.darah',
            'demografi.warganegara',
            'demografi.negara',
            'demografi.anak_keberapa',
            'intrapersonal',
            'interpersonal',
            'pengurusanStres',
            'adaptasi',
            'moodUmum',
            'tanggapanPositif',
            'pdpaStatus',
            'pdpaTarikh',
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
            'hover' => true,
            'pjax' => true,
            'columns' => $gridColumns,
        ]);
        ?>
    </div>
</div>



