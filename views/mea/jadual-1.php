<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <div class="box-body">

        <?php
        $form = ActiveForm::begin();
        ?>

        <table class="table table-bordered table-responsive table-success">
            <thead>
                <tr>
                    <th class="text-center" colspan="4">Persepsi anda terhadap DIRI SENDIRI &amp; KETUA</th>
                </tr>
            </thead>

        </table>
        <?php foreach ($soalan as $s) { ?>
            <table class="table table-bordered table-responsive table-success">
                <tbody>
                    <tr>
                        <td class="bg-primary" colspan="4"><?= $s->no ?>.&nbsp;<?= $s->persepsi ?></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2"><strong><?= $s->pil_1 ?></strong></td>
                        <td class="text-center" colspan="2"><strong><?= $s->pil_2 ?></strong></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 23.75%;">ANDA</td>
                        <td class="text-center" style="width: 23.75%;">KETUA</td>
                        <td class="text-center" style="width: 23.75%;">ANDA</td>
                        <td class="text-center" style="width: 23.75%;">KETUA</td>
                    </tr>
                    <tr>
                        <td class="text-center"><?php echo $form->field($model, 'r' . $s->no . '_anda')->radio(['label' => false, 'value' => 1, 'uncheck' => null, 'required' => true, 'disabled' => $disabled]) ?></td>
                        <td class="text-center"><?php echo $form->field($model, 'r' . $s->no . '_bos')->radio(['label' => false, 'value' => 1, 'uncheck' => null, 'required' => true, 'disabled' => $disabled]); ?></td>
                        <td class="text-center"><?php echo $form->field($model, 'r' . $s->no . '_anda')->radio(['label' => false, 'value' => 2, 'uncheck' => null, 'required' => true, 'disabled' => $disabled]); ?></td>
                        <td class="text-center"><?php echo $form->field($model, 'r' . $s->no . '_bos')->radio(['label' => false, 'value' => 2, 'uncheck' => null, 'required' => true, 'disabled' => $disabled]); ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
        <?php } ?>

        <div class="form-group text-center">
            <?= Html::a('<i class="fa fa-arrow-left"></i>&nbsp;Sebelumnya', ['demografi'], ['class' => 'btn btn-warning']); ?>
            <?php if ($disabled) { ?>
                <?= Html::a('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['jadual-2'], ['class' => 'btn btn-primary']); ?>
            <?php } else { ?>
                <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-primary']) ?>
            <?php } ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>