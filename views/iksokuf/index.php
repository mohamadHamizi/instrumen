<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-wheelchair-alt"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?php
    $form = ActiveForm::begin([
                'fieldConfig' => [
                    'options' => [
                        'tag' => false,
                    ],
                ],
                'options' => ['class' => 'form-horizontal form-label-left'
    ]]);
    ?>

    <div class="box-body">
        <h4>Pengenalan</h4>
        <p>Ahli falsafah menyatakan bahawa kebahagiaan berupaya meningkatkan motivasi seseorang. Menurut World Happiness Report (2012), masyarakat  dalam sesebuah negara seharusnya menumpukan dan menggalakkan pencapaian kebahagiaan bagi warganegara mereka. Tidak dinafikan bahawa manfaat kebendaan yang ingin dicapai di dunia tidak akan dapat memenuhi keperluan sebenar manusia. Sebaliknya kehidupan yang berbentuk kebendaan perlu seiring dengan keperluan penting manusia seperti tidak merasa penderitaan, keperitan hidup, keadilan sosial dan boleh merasai erti kebahagiaan. Bagi mencapai kebahagiaan sejati, seseorang memerlukan keseronokan (spt; memiliki emosi positif untuk mencapai tahap kepuasan hidup yang tinggi), keterlibatan (spt; terlibat dalam aktiviti-aktiviti yang mengasyikkan untuk mendapatkan kesejahteraan hidup) dan makna (spt; mencari makna hidup merupakan penentu kepada kepentingan psikologi kesejahteraan). </p>

        <p>“Kebahagiaan tidak seharusnya disamakan dengan ketidakhadiran atau ketiadaan ketidakupayaan ataupun ketidakupayaan kronik tidak boleh disalahtafsirkan sebagai penyakit tetap atau kehilangan.” Golongan Orang Kurang Upaya (OKU) memerlukan aspek kebahagiaan dan kepuasan hidup seperti orang lain. OKU-Fizikal memerlukan empat aspek untuk mencapai kebahagiaan subjektif iaitu kerohanian, emosi positif, efikasi kendiri dan kepuasan terhadap akses (Ferlis Bahari, 2014). Kerohanian merupakan kebahagiaan subjektif OKU-F yang boleh diperoleh melalui keimanan, redha (menerima ketentuan Tuhan), tawakal (berserah kepada ketentuan Tuhan), kesyukuran dan ketenangan hati. Kebahagiaan OKU-F difahami sebagai satu emosi gembira melebihi kesedihan dan emosi tersebut berubah-ubah mengikut konteks, situasi dan keadaan. Selain itu, kebahagiaan subjektif OKU-F juga diperoleh melalui kendiri yang merujuk kepada perasaan dihargai oleh orang lain, perasaan menghargai diri sendiri dan perasaan menghargai orang lain. Manakala, kebahagiaan OKU-F dari segi kepuasan terhadap akses merupakan perasaan terhadap sesuatu yang telah berjaya dicapai atau dimiliki oleh mereka khasnya berkaitan aksesibiliti untuk OKU-Fizikal.</p>

        <p>KebahagiaanKu-OKU/MyHappiness-PwD terbahagi kepada tiga bahagian iaitu melibatkan item-item yang mengukur dimensi, sumber dan strategi kebahagiaan. Terdapat tujuh (7) dimensi kebahagiaan subjektif OKU-F yang melibatkan 58 item iaitu kepuasan, kendiri, altruisme, afek positif, afek negatif, kerohanian, dan pemikiran positif. Sementara itu, terdapat 10 sumber kebahagiaan subjektif OKU-F yang melibatkan 62 item iaitu perhubungan, sokongan penjaga, sokongan rakan, sokongan institusi, peralatan, kebolehaksesan, kesaksamaan, kebebasan, pencapaian dan kesihatan fizikal. Bagi strategi pula, terdapat 10 strategi kebahagiaan OKU-F yang melibatkan 59 item iaitu hiburan, rekreasi, jenaka, keagamaan, penetapan matlamat, usaha, pemikiran positif, berdikari, interaksi, dan aktiviti sosial.</p>

        <?= $form->errorSummary($model); ?>

        <div class="form-group">
            <label class="col-sm-4 control-label"><i class="fa fa-pencil-square"></i>&nbsp;No. Kad Pengenalan</label>

            <div class="col-sm-6">
                <?= $form->field($model, 'icno')->textInput(['maxlength' => true,])->label(false); ?>
            </div>
        </div>


    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>
        <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Hantar', ['class' => 'btn btn-success pull-right']) ?>
    </div>
    <!-- /.box-footer -->
    <?php ActiveForm::end(); ?>
</div>
