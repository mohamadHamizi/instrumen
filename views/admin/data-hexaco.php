<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\widgets\ActiveForm;
use app\models\hexaco\Skj;

//use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\hexaco\Main */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Senarai HEXACO';
$this->params['breadcrumbs'][] = $this->title;

$yearList = [];
for ($y = (int) date('Y'); $y >= 2021; $y--) {
    $yearList[(string) $y] = $y;
}
$jantinaList = ['L' => 'Lelaki', 'P' => 'Perempuan'];
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-search"></i>&nbsp;<strong>Carian Data</strong></h3>
    </div>
    <div class="box-body">
        <?php $form = ActiveForm::begin([
            'method' => 'get',
            'action' => ['data-hexaco'],
        ]); ?>
        <div class="row">
            <div class="col-sm-3"><?= $form->field($searchModel, 'icno')->label('No. KP') ?></div>
            <div class="col-sm-3"><?= $form->field($searchModel, 'nama_penuh')->label('Nama') ?></div>
            <div class="col-sm-3"><?= $form->field($searchModel, 'jantina')->label('Jantina')->dropDownList($jantinaList, ['prompt' => 'Pilih Jantina']) ?></div>
            <div class="col-sm-3"><?= $form->field($searchModel, 'umur')->label('Umur') ?></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><?= $form->field($searchModel, 'year')->label('Tahun Penilaian')->dropDownList($yearList, ['prompt' => 'Semua Tahun']) ?></div>
            <div class="col-sm-9">
                <div class="form-group">
                    <label class="control-label">&nbsp;</label>
                    <div>
                        <?= Html::submitButton('Cari', ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Reset', ['data-hexaco'], ['class' => 'btn btn-default']) ?>
                    </div>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

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

        $skjQuestions = [
            1 => 'Semua tabiat saya baik dan disenangi.',
            2 => 'Saya sentiasa mengamalkan perkara yang saya katakan.',
            3 => 'Saya selalu bercakap benar.',
            4 => 'Saya tidak pernah berkata apa-apa yang tidak baik atau jahat berkenaan orang lain.',
            5 => 'Saya tidak pernah mengeluarkan kata-kata yang mengguris perasaan orang lain.',
            6 => 'Saya memenuhi semua janji saya.',
        ];

        foreach ($skjQuestions as $skjNo => $skjQuestion) {
            $gridColumns[] = [
                'attribute' => 'skj.s' . $skjNo,
                'label' => 'SKJ ' . $skjNo,
                'headerOptions' => ['title' => $skjQuestion],
            ];
        }

        $gridColumns[] = [
            'label' => 'Indeks SKJ',
            'value' => function ($model) {
                $skj = $model->skj;
                return ($skj !== null && $skj->isComplete()) ? $skj->getSkor() : '';
            },
        ];

        $gridColumns[] = [
            'label' => 'Tahap SKJ',
            'value' => function ($model) {
                $skj = $model->skj;
                return ($skj !== null && $skj->isComplete()) ? Skj::tahap($skj->getSkor()) : '';
            },
        ];

        echo Html::a('Export CSV (Fast)', ['export-hexaco-csv'] + Yii::$app->request->queryParams, ['class' => 'btn btn-success']);
        echo '&nbsp;';

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



