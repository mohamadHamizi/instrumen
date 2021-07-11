<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

//use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\OkuMainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Senarai HEXACO';
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
            'demo.nama_penuh',
            'demo.emel',
            'demo.jantina',
            'demo.umur',
            'demo.status_kerja',
            'demo.status_kerja_lain',
            'demo.jawatan',
            'demo.organisasi',
            'demo.organisasi_lain',
            'demo.tarikh_lahir',
            'demo.warna',
            'demo.darah',
            'demo.warganegara',
            'demo.negara',
            'demo.anak_keberapa',
            'SincerityIndex',
            'FairnessIndex',
            'GreedIndex',
            'ModestyIndex',
            'FearfulnessIndex',
            'AnxietyIndex',
            'DependenceIndex',
            'SentimentalityIndex',
            'SocialSelfIndex',
            'SocialBoldnessIndex',
            'SociabilityIndex',
            'LivelinessIndex',
            'ForgivenessIndex',
            'GentlenessIndex',
            'FlexibilityIndex',
            'PatienceIndex',
            'OrganizationIndex',
            'DiligenceIndex',
            'PerfectionismIndex',
            'PrudenceIndex',
            'AestheticIndex',
            'InquisitivenessIndex',
            'CreativityIndex',
            'UnconventionalityIndex',
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
            // 'filterModel' => $searchModel,
            'hover' => true,
            'pjax' => true,
            'columns' => $gridColumns,
        ]);
        ?>
    </div>
</div>



