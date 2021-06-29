<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\form\ActiveForm;
use app\models\TipiQuestions;

/* @var $this yii\web\View */
/* @var $model app\models\OkuRespons */
/* @var $form yii\widgets\ActiveForm */
?>

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

        <p>
            <i>
                Here are a number of personality traits that may or may not apply to you. Please write a number next to each statement to indicate the extent to which you agree or disagree with that statement. You should rate the extent to which the pair of traits applies to you, even if one characteristic applies more strongly than the other.
            </i>
        </p>

        <p>
            Berikut adalah beberapa sifat keperibadian yang mungkin atau mungkin tidak terpakai kepada anda. Sila tulis nombor di sebelah setiap pernyataan untuk menunjukkan sejauh mana anda bersetuju atau tidak bersetuju dengan pernyataan tersebut. Anda harus menilai sejauh mana pasangan sifat berkenaan terpakai kepada diri anda walaupun satu sifat mungkin lebih menyerlah daripada yang satu lagi.

        </p>

        <?= $this->render('_skala') ?>
        <hr>
        <p>
            <strong>
                <i>I see myself as:</i><br>
                Saya menganggap diri saya sebagai:
            </strong>
        </p>

        <?php echo GridView::widget([
            'summary' => '',
            'dataProvider' => TipiQuestions::getProvider(),
            'columns' => [
                [
                    'label' => 'No.',
                    'headerOptions' => ['class' => 'text-center'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:5%'],
                    'attribute' => 'id',
                ],
                [
                    'label' => 'Item',
                    'headerOptions' => ['class' => ''],
                    //'contentOptions' => ['style'=>'width:75%'],
                    'attribute' => 'pernyataan',
                    'format' => 'html'
                ],
                [
                    'label' => 'SKALA',
                    'headerOptions' => ['class' => 'text-center'],
                    'contentOptions' => ['class' => 'text-center', 'style' => 'width:50%'],
                    'value' => function ($model) use ($form, $model1, $disabled) {
                        $data = [1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7,];
                        return $form->field($model1, "item$model->id")->radioButtonGroup($data, ['class' => '', 'itemOptions' => ['labelOptions' => ['class' => 'btn btn-primary', 'disabled' => $disabled]]])->label(false);
                    },
                    'format' => 'raw'
                ],
            ],
        ]);
        ?>

        <div class="form-group text-center">
            <?= Html::submitButton('Papar Keputusan&nbsp;<i class="fa fa-arrow-right"></i>', ['class' => 'btn btn-primary', 'data' => ['disabled-text' => 'Loading..']]) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>