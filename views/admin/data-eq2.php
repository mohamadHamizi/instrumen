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

            'bhgn1.item1',
            'bhgn1.item2',
            'bhgn1.item3',
            'bhgn1.item4',
            'bhgn1.item5',
            'bhgn1.item6',
            'bhgn1.item7',
            'bhgn1.item8',
            'bhgn1.item9',
            'bhgn1.item10',
            'bhgn1.item11',
            'bhgn1.item12',
            'bhgn1.item13',
            'bhgn1.item14',
            'bhgn1.item15',
            'bhgn1.item16',
            'bhgn1.item17',
            'bhgn1.item18',
            'bhgn1.item19',
            'bhgn1.item20',
            'bhgn1.item21',
            'bhgn1.item22',
            'bhgn1.item23',
            'bhgn1.item24',
            'bhgn1.item25',
            'bhgn1.item26',
            'bhgn1.item27',
            'bhgn1.item28',
            'bhgn1.item29',
            'bhgn1.item30',
            'bhgn1.item31',
            'bhgn1.item32',
            'bhgn1.item33',
            'bhgn1.item34',
            'bhgn1.item35',
            'bhgn1.item36',
            'bhgn1.item37',
            'bhgn1.item38',
            'bhgn1.item39',
            'bhgn1.item40',

            'bhgn2.item1',
            'bhgn2.item2',
            'bhgn2.item3',
            'bhgn2.item4',
            'bhgn2.item5',
            'bhgn2.item6',
            'bhgn2.item7',
            'bhgn2.item8',
            'bhgn2.item9',
            'bhgn2.item10',
            'bhgn2.item11',
            'bhgn2.item12',
            'bhgn2.item13',
            'bhgn2.item14',
            'bhgn2.item15',
            'bhgn2.item16',
            'bhgn2.item17',
            'bhgn2.item18',
            'bhgn2.item19',
            'bhgn2.item20',
            'bhgn2.item21',
            'bhgn2.item22',
            'bhgn2.item23',

            'bhgn3.item1',
            'bhgn3.item2',
            'bhgn3.item3',
            'bhgn3.item4',
            'bhgn3.item5',
            'bhgn3.item6',
            'bhgn3.item7',
            'bhgn3.item8',
            'bhgn3.item9',
            'bhgn3.item10',
            'bhgn3.item11',
            'bhgn3.item12',
            'bhgn3.item13',
            'bhgn3.item14',
            'bhgn3.item15',
            'bhgn3.item16',
            'bhgn3.item17',
            'bhgn3.item18',
            'bhgn3.item19',
            'bhgn3.item20',
            'bhgn3.item21',
            'bhgn3.item22',
            'bhgn3.item23',
            'bhgn3.item24',

            'bhgn4.item1',
            'bhgn4.item2',
            'bhgn4.item3',
            'bhgn4.item4',
            'bhgn4.item5',
            'bhgn4.item6',
            'bhgn4.item7',
            'bhgn4.item8',
            'bhgn4.item9',
            'bhgn4.item10',
            'bhgn4.item11',
            'bhgn4.item12',
            'bhgn4.item13',
            'bhgn4.item14',
            'bhgn4.item15',
            'bhgn4.item16',
            'bhgn4.item17',
            'bhgn4.item18',

            'bhgn5.item1',
            'bhgn5.item2',
            'bhgn5.item3',
            'bhgn5.item4',
            'bhgn5.item5',
            'bhgn5.item6',
            'bhgn5.item7',
            'bhgn5.item8',
            'bhgn5.item9',
            'bhgn5.item10',
            'bhgn5.item11',
            'bhgn5.item12',

            'bhgn6.item1',
            'bhgn6.item2',
            'bhgn6.item3',
            'bhgn6.item4',
            'bhgn6.item5',
            'bhgn6.item6',
            'bhgn6.item7',
            'bhgn6.item8',
            'bhgn6.item9',
            'bhgn6.item10',
            'bhgn6.item11',
            'bhgn6.item12',
            'bhgn6.item13',
            'bhgn6.item14',
            'bhgn6.item15',
            'bhgn6.item16',
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



