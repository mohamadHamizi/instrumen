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
            Pada umumnya, personaliti memperihalkan seseorang individu dan secara khusus, personaliti adalah sifat-sifat yang ada pada seseorang individu seperti cara seseorang individu berfikir, beremosi, dan bertingkah laku. Oleh itu, personaliti memperihalkan sifat-sifat fizikal, emosi dan kognitif seseorang individu (Mahmood Nazar Mohamed, 2010). Personaliti manusia telah dikaji oleh pakar-pakar psikologi seperti. Beberapa orang tokoh psikologi seperti Sigmund Freud, Carl Jung, Alfred Adler, Carl Rogers, Abraham Maslow, B.F. Skinner, Raymond B. Cartell, dan Hans Eysenck telah mengutarakan teori dan definisi yang berlainan mengenai personaliti manusia.
        </p>

        <p>
            Teori Trait menyatakan bahawa perbezaan antara individu disebabkan oleh sifat yang ada pada personaliti seseorang dan perbezaan individu ini dapat dilihat dari segi kuantiti (Carver & Scheier, 1988). Teori Trait mengenal pasti dan mencatatkan trait individu menggunakan dimensi atau skala. Beberapa tokoh telah mengasaskan teori trait masing-masing antaranya Sheldon, Gordon Allport, Raymond Cartell, Hans Eysenck dan dikembangkan oleh Costa dan McCrae dan Ashton dan Lee. The Sixteen Personality Factor Questionnaire (16PF) merupakan ujian personaliti bersifat laporan kendiri yang dibangunkan melalui kajia empirikal oleh Raymond B. Cattell, Maurice Tatsuoka dan Herbert Eber. Berdasarkan subset hanya 20 daripada 36 dimensi yang asalnya ditemui oleh Cattell, Ernest Tupes dan Raymond Christal (1961) mendakwa telah menemui hanya lima faktor iaitu surgency, agreeableness, dependability, emotional stability, and culture, dan kemudiannya Warren Norman memberi label "dependability" sebagai "conscientiousness".
        </p>


        <p>
            Kini, lima faktor dalam trait Big Five dikenali sebagai OCEAN atau CANOE. Pada tahun 1999, John dan Srivastava telah membentuk Big Five Inventory (BFI) yang mengandungi sebanyak 44 item dan kemudiannya Gosling, Rentfrow, dan Swann (2003) telah membentuk The Ten Item Personality Inventory-(TIPI) yang terdiri daripada 10 item untuk mengukur trait personaliti. TIPI sesuai digunakan apabila masa yang diambil adalah singkat, personaliti bukan topik utama yang diberi tumpuan, atau penyelidik boleh bertolak ansur dari aspek ciri psikometrik yang berkaitan (Gosling et al., 2003). Justeru, berdasarkan keperluan penggunaan TIPI dalam penyelidikan dan pelaksanaan program, penyelidik telah membentuk TIPI-Malay dan diterjemah ke dalam bentuk sistem aplikasi web yang mudah diakses oleh pengguna/responden
        </p>

        <p>
            Semoga sistem TIPI-Malay memberi manfaat dan memudahkan para pengguna/responden mengetahui dan memahami trait personaliti masing-masing dan boleh digunakan dalam konteks kekeluargaan, pekerjaan, perhubungan dan sebagainya demi mencapai kehidupan yang lebih bahagia dan sejahtera.
        </p>

        <p>
            <strong>RUJUKAN</strong><br>
            <a href="http://gosling.psy.utexas.edu/scales-weve-developed/ten-item-personality-measure-tipi/">http://gosling.psy.utexas.edu/scales-weve-developed/ten-item-personality-measure-tipi/</a>

        </p>

        <p>
            <strong>ARAHAN</strong>
        <ol>
            <li>Penyertaan anda dalam sesi pentadbiran soal selidik TIPI-Malay adalah sukarela.</li>
            <li>Anda perlu menjawab semua soalan TIPI-Malay dengan jujur dan ikhlas.</li>
            <li>Tidak ada jawapan betul atau salah.</li>
            <li>Ujian ini akan mengambil masa lebih kurang 5-8 minit.</li>
            <li>Jangan terlalu ambil masa lama menjawab dan menganalisa soalan.</li>
            <li>Jawab soalan berdasarkan apa yang anda rasa pilihan yang paling tepat.</li>
            <li>Jawab soalan berdasarkan jawapan yang mencerminkan diri anda yang sebenar, bukan diri anda yang mahu dilihat oleh orang lain.</li>
            <li>Sila tandakan satu pilihan jawapan bagi skala antara 1 hingga 7 pada setiap soalan yang dikemukakan.</li>
            <li>Selepas anda selesai menjawab TIPI-Malay, anda akan peroleh keputusan bagi lima dimensi personaliti iaitu Ekstraversi, Kebersetujuan, Keberhemahan, Kestabilan Emosi dan Keterbukaan kepada Pengalaman.</li>

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