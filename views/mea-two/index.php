<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <div class="box-body">
        <p>
            Setiap individu memiliki personaliti dan karakter yang berbeza serta unik seperti uniknya cap jari. Tidak ada cap jari yang sama bagi setiap individu. Begitu juga dengan personaliti dan karakter individu yang masing-masing mempunyai kekuatan, bakat dan potensi. Mengetahui dan memahami personaliti dan karakter diri, pasangan, ahli keluarga, rakan dan Ketua Jabatan merupakan aspek penting dalam menjalani kehidupan seharian khususnya dalam konteks hubungan kekeluargaan, hubungan antara pasangan, gaya pembelajaran, cara berkomunikasi, gaya bekerja, keinginan dan pencapaian.
        </p>

        <p>Salah satu instrumen yang boleh digunakan dalam memahami tret personaliti individu ialah menggunakan Instrumen EA-M. Instrumen ini menggunakan konsep <i>Jungian Personality Type</i>. Carl Gustav Jung telah membuat kesimpulan bahawa terdapat dua jenis personaliti berbeza manusia, iaitu extraversion yang lebih cenderung kepada dunia luaran sementara jenis personaliti introversion, lebih cenderung kepada dunia dalaman. Jung juga telah mengelompokkan individu kepada empat fungsi psikologikal yang menggambarkan asas proses kognitif setiap individu iaitu Thinking, Feeling, Sensing dan Intuitive.
            <ul>
                <li>Bagaimana seseorang membuat keputusan? Adakah berdasarkan pemikiran logikal atau perasaan/emosi? </li>
                <li>Bagaimana seseorang mendapatkan informasi dalam membuat sesuatu keputusan? Adakah melihat dan fokus kepada sesuatu perkara atau melihat kepada gambaran besar?</li>
            </ul>

        </p>
        <p>
            Semoga dengan penerokaan personaliti berdasarkan Instrumen EA-M dapat membolehkan kita lebih memahami personaliti dan karakter diri seterusnya dapat diguna dan diaplikasikan dalam konteks kekeluargaan, pekerjaan, perhubungan dan sebagainya demi mencapai kehidupan yang lebih bahagia dan sejahtera.
        </p>

        <p>
            <strong>ARAHAN:</strong>
            <ol>
                <li>Penyertaan anda dalam sesi pentadbiran soal selidik EA-M adalah sukarela. </li>
                <li> Anda perlu menjawab semua soalan EA-M dengan jujur dan ikhlas.</li>
                <li> Tidak ada jawapan betul atau salah.</li>
                <li>Ujian ini akan mengambil masa lebih kurang 10-15 minit. </li>
                <li>Jangan terlalu ambil masa lama menjawab dan menganalisa soalan.</li>
                <li>Jawab soalan berdasarkan apa yang anda rasa pilihan yang paling tepat.</li>
                <li> Jawab soalan berdasarkan jawapan yang mencerminkan diri anda yang sebenar, bukan diri anda yang mahu dilihat oleh orang lain. </li>
                <li>Soalan berkaitan Ketua anda adalah berdasarkan persepsi anda.</li>
                <li>Sila tandakan pilihan jawapan 1 atau 2 pada setiap soalan yang dikemukakan.</li>
                <li>Empat huruf yang anda peroleh merupakan Personality Type/Preference anda dan Ketua anda.</li>
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
</div>