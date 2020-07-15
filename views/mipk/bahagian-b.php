<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\grid\GridView;
use kartik\form\ActiveForm;
use app\models\OkuQuestions;
use app\models\MipkQuestions;

/* @var $this yii\web\View */
/* @var $model app\models\OkuRespons */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>


    <div class="oku-respons-form">

        <?php
        $form = ActiveForm::begin();
        ?>
        <div class="box-body">
            
               
                    <?php echo GridView::widget([
                        'summary' => '',
                        //'emptyText' => 'Tiada rekod penetapan SKT',
                        'dataProvider' => MipkQuestions::getProvider(),
                        'columns' => [
                            [
                                'label' => 'BIL.',
                                'headerOptions' => ['class' => 'text-center'],
                                'contentOptions' => ['class' => 'text-center', 'style' => 'width:5%'],
                                'attribute' => 'id',
                            ],
                            [
                                'label' => 'PERNYATAAN',
                                'headerOptions' => ['class' => ''],
                                //'contentOptions' => ['style'=>'width:75%'],
                                'attribute' => 'pernyataan',
                                'format' => 'html'
                            ],
                            [
                                'label' => 'SKALA',
                                'headerOptions' => ['class' => 'text-center'],
                                'contentOptions' => ['class' => 'text-center', 'style' => 'width:50%'],
                                'value' => function($model) use ($form, $model1) {
                                    //return Html::radio('skor['.$model->id.']', false, ['value' => $model->id]);
                                    $data = [1 => 'BETUL', 2 => 'SALAH', 3 => 'TIDAK TAHU'];
                                    return $form->field($model1, "item$model->id")->radioButtonGroup($data,['class'=>'', 'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']]])->label(false);
                                },
                                'format' => 'raw'
                            ],
                        ],
                    ]);
                    ?>

                <div class="form-group text-center">
                    <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;Back', ['iksokuf/demografi'], ['class' => 'btn btn-success']) ?>
                    <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>



