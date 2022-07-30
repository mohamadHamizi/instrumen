<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<?= $this->render("/site/dialog_pdpa") ?>

<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-street-view"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <div class="box-body">
        <p>Stres merupakan konsep yang digunakan dalam perubatan yang boleh mengancam kesihatan manusia. Seorang ahli Fisiologi Harvard iaitu Cannon (1932) telah memperkenalkan istilah stres kepada komuniti saintifik. Beliau melihat stres dalam tiga bentuk yang berbeza iaitu pertama stres merujuk kepada apa-apa peristiwa atau persekitaran yang merangsang seseorang berasa tegang atau terjaga. Kedua, stres dilihat sebagai tindak balas yang subjektif iaitu keadaan mental dalaman yang tegang dan yang ketiga ialah reaksi fizikal tubuh badan.
            <br><br>
            Konsep stres juga boleh digambarkan dari segi dorongan iaitu reaksi yang menentang atau bertentangan. Stres terjadi akibat daripada permulaan yang menjurus kepada gangguan emosi dan fikiran (Hasley, 1984). Menurut Turker (1982), terdapat lima faktor penyebab stres iaitu kekecewaan, konflik, desakan, perubahan dan bebanan kendiri. Sesetengah individu sangat sensitif terhadap beberapa penyebab stres berbanding orang lain. Sifat-sifat dan bentuk kelakuan seseorang perlu dilihat bagi menilai ketidaktahanan seseorang terhadap penyebab stres yang spesifik (Pfeiffer,2001).
            <br><br>
            Melalui sumber stres ini, akan menampakkan simptom-simptom stres. Simptom stres ialah tanda yang menunjukkan perubahan pada fizikal seseorang (Steel, 2004). Ia menunjukkan bahawa telah atau akan berlaku peristiwa yang tidak diingini seperti sakit dan mereka yang dapat menjangka bahawa sesuatu yang buruk akan berlaku di masa depan atau telah mengalami keadaan yang tegang akan menunjukkan kelainan yang negatif dari segi kesihatan dan tingkah laku.
            <br><br>
            Namun setiap kejadian ada strategi untuk menangani stres. Lazarus (1966) telah membahagikan daya tindak kepada dua iaitu daya tindak secara langsung dan daya tindak palitif untuk menangangi stres. Justeru, instrumen stres pelajar universiti merupakan satu keperluan yang penting kepada setiap pelajar universiti untuk mengetahui serta menangani stres yang membelenggu pelajar.
            <br><br>
            Pengkaji telah membina Instrumen Stres Pelajar Universiti (ISPU) berbentuk soal selidik yang terbahagi kepada tiga sub-skala iaitu Skala Sumber Stres-Pelajar Unversiti (SSSPU), Skala Simptom Stres-Pelajar Universiti (SSiPU) dan Skala Daya Tindak Stres-Pelajar Universiti (SDTS-PU). Instrumen ini menjadi mudah akses dengan adanya e-ISPU yang akan memudahkan pelajar dari seluruh Malaysia untuk membuat penilaian tahap stres mereka dan cara untuk atasinya.
            <br><br>
            <strong>ARAHAN : </strong><br>
        <ol>

            <li>Penyertaan anda dalam sesi pentadbiran soal selidik SDTS-PU adalah sukarela.</li>
            <li>Anda perlu menjawab semua soalan SDTS-PU dengan jujur dan ikhlas.</li>
            <li>Tidak ada jawapan betul atau salah.</li>
            <li>Ujian ini akan mengambil masa lebih kurang 2-3 minit.</li>
            <li>Jangan terlalu ambil masa lama menjawab dan menganalisa soalan.</li>
            <li>Jawab soalan berdasarkan apa yang anda rasa pilihan yang paling tepat.</li>
            <li>Jawab soalan berdasarkan jawapan yang mencerminkan diri anda yang sebenar, bukan diri anda yang mahu dilihat oleh orang lain.</li>
            <li>Sila tandakan satu pilihan jawapan bagi skala antara 1 hingga 5 pada setiap soalan yang dikemukakan.</li>
            <li>Selepas anda selesai menjawab SDTS-PU, anda akan peroleh keputusan bagi lima daya tindak stres anda sebagai seorang pelajar universiti iaitu a) amalan agama, b) penyelesaian masalah, c) interaksi, d) tingkah laku tidak produktif, dan e) sokongan rakan.</li>
        </ol>
        </p>
        <p>
            Terima kasih atas kesudian dan kerjasama yang anda berikan.
        </p>
        <p>
            <strong>PERSETUJUAN</strong><br>
            Sila tekan butang “Seterusnya” jika anda faham tujuan soal selidik ini dan setuju terlibat secara sukarela.
        </p>

        <div class="box-footer text-center">
            <?= Html::a('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', Url::to(['demografi']), ['class' => 'btn btn-success ']) ?>
        </div>
    </div>
</div>