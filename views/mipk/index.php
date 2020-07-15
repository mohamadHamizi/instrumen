<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>


<div class="box box-info">
    <div class="box-header with-border text-center">
        <h3 class="box-title"><strong>TINJAUAN SOAL SELIDIK <br>
                PROGRAM KESEDARAN TANGANI PERKAHWINAN KANAK-KANAK<br>
                JABATAN HAL EHWAL WANITA NEGERI SABAH DAN MAJLIS PENASIHAT WANITA SABAH</strong></h3>
    </div>
    <div class="box-body">
        <p>Sukacita dimaklumkan bahawa Jabatan Hal Ehwal Wanita Sabah (JHEWA) dan Majlis Penasihat Wanita Sabah (MPWS) ingin memohon jasa baik Tuan/Puan/Saudara/Saudari untuk memberi maklum balas mengenai pengetahuan anda mengenai isu perkahwinan kanak-kanak. Tujuan pentadbiran soal selidik ini adalah membantu peserta mengetahui secara umum mengenai perkahwinan kanak-kanak yang terkandung dalam MIPK dan mengetahui tahap pengetahuan peserta mengenai perkahwinan kanak-kanak khasnya di negeri Sabah.</p>
        <p>Maklum balas yang diberikan adalah sangat penting untuk mengumpul maklumat dan data berkaitan isu perkahwinan kanak-kanak.</p>
        <p>
            <h5><strong>PANDUAN:</strong></h5>
            <ol>
                <li>Penyertaan anda dalam sesi pentadbiran soal selidik ini adalah sukarela.</li>
                <li>Anda digalakkan untuk menjawab pernyataan yang dikemukakan dengan jujur dan ikhlas. </li>
                <li>Jawapan anda adalah SULIT dan hanya digunakan untuk tujuan penambahbaikan pelaksanaan program.</li>
                <li>Data hanya akan dianalisis berdasarkan keseluruhan responden dan bukan secara individu.</li>
            </ol>
        </p>
        <p>Terima kasih atas kesudian dan kerjasama yang anda berikan. </p>
        <h5><strong>PERSETUJUAN</strong></h5>
        <p>Sila tekan butang “Next” jika anda faham tujuan soal selidik ini dan setuju terlibat secara sukarela.</p>
        <div class="box-footer text-center">
        <?= Html::a('<i class="fa fa-arrow-right"></i>&nbsp;Next', Url::to(['mipk/bahagian-a'], $schema = true),['class' => 'btn btn-primary']) ?>
        <!-- <button type="reset" class="btn btn-primary"><i class="fa fa-arrow-right"></i>&nbsp;Next</button> -->
        </div>
    </div>
</div>