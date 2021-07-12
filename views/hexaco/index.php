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
            Model struktur personaliti HEXACO merupakan model enam dimensi keperibadian manusia yang dibentuk oleh Ashton dan Lee berdasarkan penemuan daripada beberapa siri kajian leksikal yang melibatkan beberapa bahasa Eropah dan Asia. Enam faktor atau dimensi tersebut ialah 1) Kejujuran-Kerendahan Hati (H = Honesty-Humility), 2) Emosi (E = Emotionality), 3) Ekstraversi (X = Extraversion), 4) Kebersetujuan (A = Agreeableness), 5) Keberhemahan (C = Conscientiousness), dan 6) Keterbukaan kepada Pengalaman (O = Openness to Experience). Model HEXACO dibangunkan melalui kaedah yang sama seperti taksonomi trait dan berasaskan kepada Costa dan McCrae dan Goldberg. Oleh itu, model ini berkongsi beberapa elemen yang sama dengan model sifat lain. Walau bagaimanapun, model HEXACO adalah unik terutamanya disebabkan oleh penambahan kepada faktor atau dimensi Kejujuran-Kerendahan Hati.
        </p>
        <p>
            Model HEXACO adalah satu perkembangan yang timbul kerana keinginan penyelidik untuk menilai personaliti. Oleh kerana tugas yang sukar untuk menilai personaliti, ia diterima bahawa kaedah yang sistematik harus digunakan serta dipersetujui atas pendekatan adalah dengan menggunakan analisis faktor. Walau bagaimanapun, ini menimbulkan masalah baru, sebagai menentukan sifat-sifat yang digunakan dalam analisis faktor adalah sumber perdebatan yang banyak. Penyelesaian kepada masalah ini adalah berdasarkan hipotesis leksikal. Ringkasnya, hipotesis ini mencadangkan bahawa ciri-ciri keperibadian yang penting dalam kalangan masyarakat akan membawa kepada perkembangan kata-kata untuk menggambarkan kedua-dua tahap tinggi dan rendah sifat-sifat ini.
        </p>

        <p>
            Justeru, berdasarkan keperluan penggunaan HEXACO dalam penyelidikan dan pelaksanaan program, penyelidik telah menggunakan HEXACO-Malay dan diaplikasi dalam bentuk sistem yang mudah diakses oleh pengguna/responden. Penyelidik telah mendapat kebenaran menggunakan HEXACO versi Bahasa Melayu yang telah diterjemah oleh Prof. Amir Abbasi daripada Professor Mike Ashton melalui emel pada 3 Julai 2021. Semoga sistem HEXACO-Malay memberi manfaat dan memudahkan para pengguna/responden mengetahui dan memahami trait personaliti masing-masing dan boleh digunakan dalam konteks kekeluargaan, pekerjaan, perhubungan dan sebagainya demi mencapai kehidupan yang lebih bahagia dan sejahtera.
        </p>

        <p>
            <strong>RUJUKAN</strong><br>
        <ol>
            <li><a href="http://hexaco.org/">http://hexaco.org/</a></li>
            <li><a href="https://en.wikipedia.org/wiki/HEXACO_model_of_personality_structure">https://en.wikipedia.org/wiki/HEXACO_model_of_personality_structure</a></li>
        </ol>
        </p>
        <p>
        <strong>ARAHAN</strong><br>
        <ol>
            <li>Penyertaan anda dalam sesi pentadbiran soal selidik HEXACO-Malay adalah sukarela.</li>
            <li>Anda perlu menjawab semua soalan HEXACO-Malay dengan jujur dan ikhlas.</li>
            <li>Tidak ada jawapan betul atau salah.</li>
            <li>Ujian ini akan mengambil masa lebih kurang 10-15 minit.</li>
            <li>Jangan terlalu ambil masa lama menjawab dan menganalisa soalan.</li>
            <li>Jawab soalan berdasarkan apa yang anda rasa pilihan yang paling tepat.</li>
            <li>Jawab soalan berdasarkan jawapan yang mencerminkan diri anda yang sebenar, bukan diri anda yang mahu dilihat oleh orang lain.</li>
            <li>Sila tandakan satu pilihan jawapan bagi skala antara 1 hingga 5 pada setiap soalan yang dikemukakan.</li>
            <li>Selepas anda selesai menjawab HEXACO-Malay, anda akan peroleh keputusan bagi lima dimensi personaliti iaitu Kejujuran-Kerendahan Hati (H), Emosi (E), Ekstraversi (X), Kebersetujuan (A), Keberhemaan (C), Keterbukaan kepada Pengalaman (O) dan 24 sub-dimensi trait personaliti.</li>
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