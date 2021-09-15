<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\grid\GridView;
use kartik\form\ActiveForm;
use app\models\OkuQuestions;

/* @var $this yii\web\View */
/* @var $model app\models\OkuRespons */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-cloud-download"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>


    <div class="oku-respons-form">

        <?php
        $form = ActiveForm::begin();
        ?>
        <div class="box-body">
            <p><strong>Arahan:</strong> Pernyataan berikut merupakan persetujuan anda mengenai kesan kebahagiaan subjektif OKU-Fizikal. Anda dikehendaki menjawab <strong>SEMUA</strong> pernyataan dengan menandakan pada salah satu respons yang diberikan. </p>
            <div class="table-responsive">

                 <?=$this->render('_skala')?>

                    <?=
                    GridView::widget([
                        'summary' => '',
                        //'emptyText' => 'Tiada rekod penetapan SKT',
                        'dataProvider' => OkuQuestions::getProvider(null, $type),
                        'columns' => [
                            [
                                'label' => 'Bil',
                                'headerOptions' => ['class' => 'text-center'],
                                'contentOptions' => ['class' => 'text-center', 'style' => 'width:5%'],
                                'attribute' => 'code',
                            ],
                            [
                                'label' => 'Pernyataan',
                                'headerOptions' => ['class' => ''],
                                //'contentOptions' => ['style'=>'width:75%'],
                                'attribute' => 'pernyataan',
                                'format' => 'html'
                            ],
                            [
                                'label' => 'Respons',
                                'headerOptions' => ['class' => 'text-center'],
                                'contentOptions' => ['class' => 'text-center', 'style' => 'width:20%'],
                                'value' => function($model) use ($form, $model1, $disabled) {
                                    //return Html::radio('skor['.$model->id.']', false, ['value' => $model->id]);
                                    $data = [1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'];
                                    return $form->field($model1, "$model->smallCode")->radioButtonGroup($data,['class'=>'', 'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary', 'disabled'=>$disabled]]])->label(false);
                                },
                                'format' => 'raw'
                            ],
                        ],
                    ]);
                    ?>

                <div class="form-group text-center">
                    <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;Back', ['iksokuf/bahagian-d'], ['class' => 'btn btn-success']) ?>
                    <?= Html::submitButton('Seterusnya', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>


            </div>
        </div>
    </div>
</div>


