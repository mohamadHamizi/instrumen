<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\widgets\ActiveForm;

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

    <div class="data-hexaco-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'action' => ['data-hexaco'],
        'method' => 'get',
    ]); ?>

    <?= 
    $form->field($searchModel, 'year')->dropDownList([
        '2021' => '2021',
        '2022' => '2022',
        '2023' => '2023',
        '2024' => '2024',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>


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
            'kejujuran.item1',
            'kejujuran.item2',
            'kejujuran.item3',
            'kejujuran.item4',
            'kejujuran.item5',
            'kejujuran.item6',
            'kejujuran.item7',
            'kejujuran.item8',
            'kejujuran.item9',
            'kejujuran.item10',
            'emosi.item11',
            'emosi.item12',
            'emosi.item13',
            'emosi.item14',
            'emosi.item15',
            'emosi.item16',
            'emosi.item17',
            'emosi.item18',
            'emosi.item19',
            'emosi.item20',
            'ekstraversi.item21',
            'ekstraversi.item22',
            'ekstraversi.item23',
            'ekstraversi.item24',
            'ekstraversi.item25',
            'ekstraversi.item26',
            'ekstraversi.item27',
            'ekstraversi.item28',
            'ekstraversi.item29',
            'ekstraversi.item30',
            'kebersetujuan.item31',
            'kebersetujuan.item32',
            'kebersetujuan.item33',
            'kebersetujuan.item34',
            'kebersetujuan.item35',
            'kebersetujuan.item36',
            'kebersetujuan.item37',
            'kebersetujuan.item38',
            'kebersetujuan.item39',
            'kebersetujuan.item40',
            'keberhemahan.item41',
            'keberhemahan.item42',
            'keberhemahan.item43',
            'keberhemahan.item44',
            'keberhemahan.item45',
            'keberhemahan.item46',
            'keberhemahan.item47',
            'keberhemahan.item48',
            'keberhemahan.item49',
            'keberhemahan.item50',
            'terbuka.item51',
            'terbuka.item52',
            'terbuka.item53',
            'terbuka.item54',
            'terbuka.item55',
            'terbuka.item56',
            'terbuka.item57',
            'terbuka.item58',
            'terbuka.item59',
            'terbuka.item60',
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



