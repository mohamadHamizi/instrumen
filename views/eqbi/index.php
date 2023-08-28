<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?= $this->render("/site/dialog_pdpa") ?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <div class="box-body">
        <p>
            Bar-On (1997) explained that social emotional intelligence is a combination of emotional intelligence and social intelligence which is defined as a variety of abilities that do not involve cognitive, but rather considered as a competence or skill that affects a person's ability to succeed in facing demands and pressure from around.
        </p>
        <p>
            The Emotional Quotient Inventory (EQ-i) designed by Bar-On and Parker is one of the instruments used to measure social emotional intelligence. This instrument consists of 133 items and contains six (6) main dimensions, namely intrapersonal, interpersonal, adaptation, stress management, and general mood and also positive responses.
        </p>


        <p>
            <strong>INSTRUCTIONS</strong><br>
        <ol>
            <li>Your participation in the EQ-Malay v2 questionnaire administration session is voluntary.</li>
            <li>You have to answer all EQ-Malay v2 questions honestly and sincerely.</li>
            <li>There is no right or wrong answer.</li>
            <li>This test will take approximately 30-40 minutes.</li>
            <li>Do not take too long to answer and analyze questions.</li>
            <li>Answer the questions based on what you think is the most appropriate option.</li>
            <li>Please mark one answer option for a scale between 1 to 5 for each statement presented.</li>
        </ol>
        </p>

        <p>
            Thank you for your willingness and cooperation.
        </p>
        <p>
            <strong>CONSENT</strong><br>
            Please press the "Next" button if you understand the purpose of this survey and agree to participate voluntarily.
        </p>

        <?php
        $form = ActiveForm::begin([
            'enableAjaxValidation' => true,
            'fieldConfig' => [
                'options' => [
                    'tag' => false,
                ],
            ],
            'options' => ['class' => 'form-horizontal form-label-left']
        ]);
        ?>

        <?= $form->errorSummary($model); ?>

        <div class="form-group">
            <label class="col-sm-3 control-label"></i>&nbsp;</label>

            <div class="col-sm-4">
                <?= $form->field($model, 'icno')->textInput(['maxlength' => true, 'placeholder' => 'Enter your identification no(Without "-") '])->label(false); ?>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>
        <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Next', ['class' => 'btn btn-success ']) ?>

    </div>
    <!-- /.box-footer -->
    <?php ActiveForm::end(); ?>
</div>