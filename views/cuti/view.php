<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RekodCuti */

$this->title = 'Maklumat Permohonan';
//$this->params['breadcrumbs'][] = ['label' => 'Rekod Cutis', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"> <i class="fa fa-info-circle"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <div class="rekod-cuti-view">

        <!--<h2>Maklumat Permohonan Cuti</h2>-->

        <?=
        DetailView::widget([
            'model' => $model,
            'attributes' => [
//            'id',
                [// the owner name of the model
                    'label' => 'Nama',
                    'value' => $model->pemohon->fullname,
                ],
                'tarikhFull',
                'tempoh',
                'remark',
                [// the owner name of the model
                    'label' => 'Pengganti',
                    'value' => $model->ganti->fullname,
                ],
                'stat',
                'logMohon',
                'logGanti',
                'logVer',
                'logApp',
            ],
        ])
        ?>

    </div>
</div>
