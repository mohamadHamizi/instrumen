<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\daterange\DateRangePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Users;

/* @var $this yii\web\View */
/* @var $model app\models\RekodCuti */

$this->title = 'Permohonan Cuti Felo';
//$this->params['breadcrumbs'][] = ['label' => 'Rekod Cuti', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-calendar-plus-o"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
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
            <label class="col-sm-4 control-label"><i class="fa fa-calendar"></i>&nbsp;Tarikh (Mula - Tamat)</label>

            <div class="col-sm-5">
                <?php
                echo DateRangePicker::widget([
                    'model' => $model,
                    'attribute' => 'cuti_mula',
                    'convertFormat' => true,
                    'startAttribute' => 'cuti_mula',
                    'endAttribute' => 'cuti_tamat',
                    'pluginOptions' => [
                        'locale' => [
                            'format' => 'd/m/Y',
                            'separator' => ' Hingga '
                        ]
                    ]
                ]);
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><i class="fa fa-user"></i>&nbsp;Pengganti</label>

            <div class="col-sm-6">
                <?=
                $form->field($model, 'ganti_by')->label(false)->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(Users::find()->where('icno != :icno AND type IN (2,3)',['icno'=>$icno])->all(), 'icno', 'titleName'),
                    'options' => ['placeholder' => '--Pilih Pengganti--', 'class' => 'form-control'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]);
                ?>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><i class="fa fa-pencil-square"></i>&nbsp;Tujuan / Catatan</label>

            <div class="col-sm-6">
                <?= $form->field($model, 'remark')->textArea(['maxlength' => true, 'rows' => 4])->label(false); ?>
            </div>
        </div>
      

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>
    <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Hantar Permohonan', ['class' => 'btn btn-success pull-right']) ?>
    </div>
    <!-- /.box-footer -->
<?php ActiveForm::end(); ?>
</div>