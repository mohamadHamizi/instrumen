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
            'icno',
            'demografi.no_oku',
            'tarikh',
            [
                'header' => 'PD1',
                'attribute' => 'demografi.kategori',
            ],
            [
                'header' => 'PD2',
                'attribute' => 'demografi.sebab',
            ],
            [
                'header' => 'PD3',
                'attribute' => 'demografi.sejak',
            ],
            [
                'header' => 'PD4',
                'attribute' => 'demografi.jantina',
            ],
            [
                'header' => 'PD5',
                'attribute' => 'demografi.agama',
            ],
            [
                'header' => 'PD6',
                'attribute' => 'demografi.etnik',
            ],
            [
                'header' => 'PD7',
                'attribute' => 'demografi.kahwin',
            ],
            [
                'header' => 'kerusi_roda',
                'attribute' => 'demografi.kerusi_roda',
            ],
            [
                'header' => 'kaki_palsu',
                'attribute' => 'demografi.kaki_palsu',
            ],
            [
                'header' => 'tgn_palsu',
                'attribute' => 'demografi.tgn_palsu',
            ],
            [
                'header' => 'kerusi_roda',
                'attribute' => 'demografi.kerusi_roda',
            ],
            [
                'header' => 'tongkat',
                'attribute' => 'demografi.tongkat',
            ],
            [
                'header' => 'PD8',
                'attribute' => 'demografi.umur',
            ],
            [
                'header' => 'PD9',
                'attribute' => 'demografi.pendidikan',
            ],
            [
                'header' => 'PD10',
                'attribute' => 'demografi.bantuan',
            ],
            [
                'header' => 'PD11',
                'attribute' => 'demografi.jumlah',
            ],
            [
                'header' => 'PD12',
                'attribute' => 'demografi.kerja_anda',
            ],
            [
                'header' => 'PD13',
                'attribute' => 'demografi.kerja_psgn',
            ],
            [
                'header' => 'PD14',
                'attribute' => 'demografi.pendapatan',
            ],
            [
                'header' => 'PD15',
                'attribute' => 'demografi.alamat',
            ],
            [
                'header' => 'PD16',
                'attribute' => 'demografi.negeri',
            ],
            'dimensi.a1', 'dimensi.a2', 'dimensi.a3', 'dimensi.a4', 'dimensi.a5', 'dimensi.a6', 'dimensi.a7', 'dimensi.a8', 'dimensi.a9', 'dimensi.a10', 'dimensi.a11', 'dimensi.a12', 'dimensi.a13', 'dimensi.a14', 'dimensi.a15', 'dimensi.a16', 'dimensi.a17', 'dimensi.a18', 'dimensi.a19', 'dimensi.a20', 'dimensi.a21', 'dimensi.a22', 'dimensi.a23', 'dimensi.a24', 'dimensi.a25', 'dimensi.a26', 'dimensi.a27', 'dimensi.a28', 'dimensi.a29', 'dimensi.a30', 'dimensi.a31', 'dimensi.a32', 'dimensi.a33', 'dimensi.a34', 'dimensi.a35', 'dimensi.a36', 'dimensi.a37', 'dimensi.a38', 'dimensi.a39', 'dimensi.a40', 'dimensi.a41', 'dimensi.a42', 'dimensi.a43', 'dimensi.a44', 'dimensi.a45', 'dimensi.a46', 'dimensi.a47', 'dimensi.a48', 'dimensi.a49', 'dimensi.a50', 'dimensi.a51', 'dimensi.a52', 'dimensi.a53', 'dimensi.a54', 'dimensi.a55', 'dimensi.a56', 'dimensi.a57', 'dimensi.a58',
            'sumber.b1', 'sumber.b2', 'sumber.b3', 'sumber.b4', 'sumber.b5', 'sumber.b6', 'sumber.b7', 'sumber.b8', 'sumber.b9', 'sumber.b10', 'sumber.b11', 'sumber.b12', 'sumber.b13', 'sumber.b14', 'sumber.b15', 'sumber.b16', 'sumber.b17', 'sumber.b18', 'sumber.b19', 'sumber.b20', 'sumber.b21', 'sumber.b22', 'sumber.b23', 'sumber.b24', 'sumber.b25', 'sumber.b26', 'sumber.b27', 'sumber.b28', 'sumber.b29', 'sumber.b30', 'sumber.b31', 'sumber.b32', 'sumber.b33', 'sumber.b34', 'sumber.b35', 'sumber.b36', 'sumber.b37', 'sumber.b38', 'sumber.b39', 'sumber.b40', 'sumber.b41', 'sumber.b42', 'sumber.b43', 'sumber.b44', 'sumber.b45', 'sumber.b46', 'sumber.b47', 'sumber.b48', 'sumber.b49', 'sumber.b50', 'sumber.b51', 'sumber.b52', 'sumber.b53', 'sumber.b54', 'sumber.b55', 'sumber.b56', 'sumber.b57', 'sumber.b58', 'sumber.b59', 'sumber.b60', 'sumber.b61', 'sumber.b62',
            'strategi.c1', 'strategi.c2', 'strategi.c3', 'strategi.c4', 'strategi.c5', 'strategi.c6', 'strategi.c7', 'strategi.c8', 'strategi.c9', 'strategi.c10', 'strategi.c11', 'strategi.c12', 'strategi.c13', 'strategi.c14', 'strategi.c15', 'strategi.c16', 'strategi.c17', 'strategi.c18', 'strategi.c19', 'strategi.c20', 'strategi.c21', 'strategi.c22', 'strategi.c23', 'strategi.c24', 'strategi.c25', 'strategi.c26', 'strategi.c27', 'strategi.c28', 'strategi.c29', 'strategi.c30', 'strategi.c31', 'strategi.c32', 'strategi.c33', 'strategi.c34', 'strategi.c35', 'strategi.c36', 'strategi.c37', 'strategi.c38', 'strategi.c39', 'strategi.c40', 'strategi.c41', 'strategi.c42', 'strategi.c43', 'strategi.c44', 'strategi.c45', 'strategi.c46', 'strategi.c47', 'strategi.c48', 'strategi.c49', 'strategi.c50', 'strategi.c51', 'strategi.c52', 'strategi.c53', 'strategi.c54', 'strategi.c55', 'strategi.c56', 'strategi.c57', 'strategi.c58', 'strategi.c59',
            'kesan.d1', 'kesan.d2', 'kesan.d3', 'kesan.d4', 'kesan.d5', 'kesan.d6', 'kesan.d7', 'kesan.d8', 'kesan.d9', 'kesan.d10', 'kesan.d11', 'kesan.d12', 'kesan.d13', 'kesan.d14', 'kesan.d15', 'kesan.d16',
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
//            'responsiveWrap' => true,
//            'responsive' => true,
            'hover' => true,
            'pjax' => true,
            'columns' => $gridColumns,
        ]);
        ?>
    </div>
</div>



