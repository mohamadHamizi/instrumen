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
        <h3 class="box-title"><i class="fa fa-random"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>


    <div class="oku-respons-form">

        <?php
        $form = ActiveForm::begin();
        ?>
        <div class="box-body">
            <p><strong>Arahan:</strong> Pernyataan berikut merupakan persetujuan anda mengenai sumber atau faktor anda bahagia. Anda dikehendaki menjawab <strong>SEMUA</strong> pernyataan dengan menandakan pada salah satu respons yang diberikan. </p>
            <div class="table-responsive">

                 <?=$this->render('_skala')?>
                
                <table class="table table-bordered table-striped table-condensed">
                    <tr>
                        <th style="width: 5%; " class="text-center text-capitalize">Bil</th>
                        <th>PERNYATAAN</th>
                        <th style="width: 20%" class="text-center text-capitalize"></th>
                    </tr>
                    <tr style="font-weight: bold">
                        <td class="text-center" >&nbsp;</td>
                        <td >Sebagai Orang Kurang Upaya-Fizikal :</td>
                        <td class="text-center" >&nbsp;</td>
                    </tr>
                </table>

                <?php foreach ($groups as $group) { ?>
                    <?=
                    GridView::widget([
                        'summary' => '',
                        //'emptyText' => 'Tiada rekod penetapan SKT',
                        'dataProvider' => OkuQuestions::getProvider($group->id, $group->type),
                        'columns' => [
                            [
                                'label' => '',
                                'headerOptions' => ['class' => 'text-center'],
                                'contentOptions' => ['class' => 'text-center', 'style' => 'width:5%'],
                                'attribute' => 'code',
                            ],
                            [
                                'label' => $group->name,
                                'headerOptions' => ['class' => ''],
                                //'contentOptions' => ['style'=>'width:75%'],
                                'attribute' => 'pernyataan',
                                'format' => 'html'
                            ],
                            [
                                'label' => 'RESPONS',
                                'headerOptions' => ['class' => 'text-center'],
                                'contentOptions' => ['class' => 'text-center', 'style' => 'width:20%'],
                                'value' => function($model) use ($form, $model1) {
                                    //return Html::radio('skor['.$model->id.']', false, ['value' => $model->id]);
                                    $data = [1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'];
                                    return $form->field($model1, "$model->smallCode")->radioButtonGroup($data,['class'=>'', 'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']]])->label(false);
                                },
                                'format' => 'raw'
                            ],
                        ],
                    ]);
                    ?>
                <?php } ?>

                <div class="form-group">
                    <?= Html::submitButton('Seterusnya', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>


            </div>
        </div>
    </div>
</div>


