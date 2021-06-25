<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\grid\GridView;
use kartik\form\ActiveForm;
use app\models\Questions;

/* @var $this yii\web\View */
/* @var $model app\models\OkuRespons */
/* @var $form yii\widgets\ActiveForm */
?>

<?= $this->render('_breadcrumb') ?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>


    <?php
    $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal form-label-left disable-submit-buttons']
    ]);
    ?>
    <div class="box-body">
        <?= $this->render('_skala') ?>

        <?php echo GridView::widget([
            'summary' => '',
            //'emptyText' => 'Tiada rekod penetapan SKT',
            'dataProvider' => Questions::getProvider($bhgn),
            'columns' => [
                [
                    'label' => 'No.',
                    'headerOptions' => ['class' => 'text-center'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:5%'],
                    'attribute' => 'bil',
                ],
                [
                    'label' => 'Item',
                    'headerOptions' => ['class' => ''],
                    //'contentOptions' => ['style'=>'width:75%'],
                    'attribute' => 'item',
                    'format' => 'html'
                ],
                [
                    'label' => 'SKALA',
                    'headerOptions' => ['class' => 'text-center'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:50%'],
                    'value' => function ($model) use ($form, $model1) {
                        //return Html::radio('skor['.$model->id.']', false, ['value' => $model->id]);
                        $data = [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5,];
                        return $form->field($model1, $model->column)->radioButtonGroup($data, ['class' => '', 'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']]])->label(false);
                    },
                    'format' => 'raw'
                ],
            ],
        ]);
        ?>

        <table class="table table-bordered table-striped table-condensed">
            <tr>
                <td class='text-center'>
                Pada keseluruhannya, sejauh manakah anda <strong>berpuas hati dengan kemudahan asas dan prasarana di sekitar kawasan perumahan anda?</strong>
                </td>
            </tr>
            <tr>
                <td class='text-center'><i class="fa fa-arrow-left">&nbsp;Langsung tidak berpuas hati&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sangat berpuas hati&nbsp;<i class="fa fa-arrow-right"></td>
            </tr>

            <tr>

                <td class='text-center'>

                    <?php
                    $data = [0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10];
                    echo $form->field($model1, "item6")->radioButtonGroup($data, ['class' => '', 'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary']]])->label(false);
                    ?>
                </td>
            </tr>
        </table>



        <div class="form-group text-center">
            <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;Sebelumnya', [$backButton], ['class' => 'btn btn-success']) ?>
            <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-primary', 'data'=>['disabled-text' => 'Loading..']]) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>