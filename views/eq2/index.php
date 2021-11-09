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
            Bar-On (1997) menjelaskan kecerdasan emosi sosial merupakan gabungan daripada kecerdasan emosi dan kecerdasan sosial yang ditakrifkan sebagai kepelbagaian kebolehan yang bukan melibatkan kognitif, sebaliknya dianggap sebagai suatu kecekapan atau kemahiran yang mempengaruhi keupayaan seseorang untuk berjaya dalam menghadapi tuntutan dan tekanan dari sekeliling.
        </p>
        <p>
            <i>The Emotional Quotient Inventory (EQ-i)</i> yang direkabentuk oleh Bar-On dan Parker merupakan salah satu instrumen yang digunakan untuk mengukur kecerdasan emosi sosial. Instrumen ini terdiri daripada 133 item dan mengandungi enam (6) dimensi utama iaitu intrapersonal, interpersonal, adaptasi, pengurusan stres, dan mood umum dan juga tanggapan positif.
        </p>


        <p>
            <strong>ARAHAN</strong><br>
        <ol>
            <li>Penyertaan anda dalam sesi pentadbiran soal selidik EQ-Malay v2 adalah sukarela.</li>
            <li>Anda perlu menjawab semua soalan EQ-Malay v2 dengan jujur dan ikhlas.</li>
            <li>Tidak ada jawapan betul atau salah.</li>
            <li>Ujian ini akan mengambil masa lebih kurang 30-40 minit.</li>
            <li>Jangan terlalu ambil masa lama menjawab dan menganalisa soalan.</li>
            <li>Jawab soalan berdasarkan apa yang anda rasa pilihan yang paling tepat.</li>
            <li>Sila tandakan satu pilihan jawapan bagi skala antara 1 hingga 5 pada setiap pernyataan yang dikemukakan.</li>

        </ol>
        </p>

        <p>
            Terima kasih atas kesudian dan kerjasama yang anda berikan.
        </p>
        <p>
            <strong>PERSETUJUAN</strong><br>
            Sila tekan butang “Seterusnya” jika anda faham tujuan soal selidik ini dan setuju terlibat secara sukarela.
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
                <?= $form->field($model, 'icno')->textInput(['maxlength' => true, 'placeholder' => 'Sila Masukkan No. Kad Pengenalan anda(Tanpa "-") '])->label(false); ?>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
        <button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>
        <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-success ']) ?>

    </div>
    <!-- /.box-footer -->
    <?php ActiveForm::end(); ?>
</div>