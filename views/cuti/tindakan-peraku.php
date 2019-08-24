<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

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
                'logMohon',
            ],
        ])
        ?>

    </div>
</div>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"> <i class="fa fa-pencil"></i>&nbsp;<strong>Tindakan Perakuan</strong></h3>
    </div>
    <?php
    $form = ActiveForm::begin([
                'fieldConfig' => [
                    'options' => [
                        'tag' => false,
                    ],
                ],
                'options' => ['class' => 'form-horizontal form-label-left'
    ]]);
    ?>

    <div class="box-body">
        <?= $form->errorSummary($model); ?>
        <div class="form-group">
            <label class="col-sm-4 control-label"><i class="fa fa-pencil-square"></i>&nbsp;Catatan Perakuan</label>

            <div class="col-sm-6">
                <?= $form->field($model, 'ver_remark')->textArea(['maxlength' => true, 'rows' => 4])->label(false); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><i class="fa fa-check"></i>&nbsp;Tindakan</label>
            <div class="col-sm-6">
                <?= Html::activeDropDownList($model, 'status', ['VERIFIED' => 'DIPERAKUKAN', 'REJECTED' => 'TIDAK DIPERAKUKAN']) ?>
            </div>
        </div>

        <div class="box-footer">
            <button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>
            <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Hantar', ['class' => 'btn btn-success pull-right']) ?>
        </div>
        <!-- /.box-footer -->
        <?php ActiveForm::end(); ?>
    </div>
</div>

