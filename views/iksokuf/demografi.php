<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-calendar-plus-o"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
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
        <?= $form->errorSummary($model); ?>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'no_oku'); ?></label>

            <div class="col-sm-5">
                <?=
                        $form->field($model, 'no_oku')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'no_oku'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kategori'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'kategori')->radiolist(['Kecederaan Saraf Tunjang ' => 'Kecederaan Saraf Tunjang ',
                    'Kehilangan Anggota Kaki' => 'Kehilangan Anggota Kaki',
                    'Kehilangan Anggota Tangan' => 'Kehilangan Anggota Tangan',
                    'Cerebral Palsy' => 'Cerebral Palsy',
                    'Polio' => 'Polio',
                    'Kerdil' => 'Kerdil',
                    'lain' => 'Lain-lain (Sila nyatakan)',
                ])->label(false);
                ?>
                <input type="text" id="lain_kategori" name="lain_kategori" hidden="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'sebab'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'sebab')->radiolist([
                    'Kemalangan' => 'Kemalangan',
                    'Sakit' => 'Sakit',
                    'lain' => 'Lain-lain (Sila nyatakan)',
                ])->label(false);
                ?>
                <input type="text" id="lain_sebab" name="lain_sebab" hidden="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'sejak'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'sejak')->radiolist([
                    'Sejak lahir' => 'Sejak lahir',
                    'Sejak umur' => 'Sejak umur',
                    'lain' => 'Lain-lain (Sila nyatakan)',
                ])->label(false);
                ?>
                <input type="text" id="lain_sejak" name="lain_sejak" hidden="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jantina'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'jantina')->radiolist([
                    'Lelaki' => 'Lelaki',
                    'Perempuan' => 'Perempuan',
                ])->label(false);
                ?>

            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'agama'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'agama')->radiolist([
                    'Islam' => 'Islam',
                    'Kristian' => 'Kristian',
                    'Buddha' => 'Buddha',
                    'Hindu' => 'Hindu',
                    'lain' => 'Lain-lain (Sila nyatakan)',
                ])->label(false);
                ?>
                <input type="text" id="lain_agama" name="lain_agama" hidden="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'etnik'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'etnik')->radiolist([
                    'Melayu' => 'Melayu',
                    'Cina' => 'Cina',
                    'India' => 'India',
                    'Bumiputera Sabah' => 'Bumiputera Sabah',
                    'Bumiputera Sarawak ' => 'Bumiputera Sarawak',
                    'lain' => 'Lain-lain (Sila nyatakan)',
                ])->label(false);
                ?>
                <input type="text" id="lain_etnik" name="lain_etnik" hidden="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kahwin'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'kahwin')->radiolist([
                    'Bujang' => 'Bujang',
                    'Berkahwin ' => 'Berkahwin ',
                    'Bercerai' => 'Bercerai',
                    'Kematian Pasangan' => 'Kematian Pasangan',
                    'lain' => 'Lain-lain (Sila nyatakan)',
                ])->label(false);
                ?>
                <input type="text" id="lain_kahwin" name="lain_kahwin" hidden="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'peralatan'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'peralatan')->radiolist([
                    'Kerusi Roda' => 'Kerusi Roda',
                    'Kaki Palsu' => 'Kaki Palsu',
                    'Tangan Palsu' => 'Tangan Palsu',
                    'Tongkat' => 'Tongkat',
                    'lain' => 'Lain-lain (Sila nyatakan)',
                ])->label(false);
                ?>
                <input type="text" id="lain_peralatan" name="lain_peralatan" hidden="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'umur'); ?></label>

            <div class="col-sm-2">
                <?=
                        $form->field($model, 'umur')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'umur'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'pendidikan'); ?></label>

            <div class="col-sm-6">

                <?=
                $form->field($model, 'pendidikan')->radiolist([
                    'Tiada Pendidikan Formal' => 'Tiada Pendidikan Formal',
                    'UPSR' => 'UPSR',
                    'SRP/PMR/PT3' => 'SRP/PMR/PT3',
                    'SPM/SPMV' => 'SPM/SPMV',
                    'STPM/STAM' => 'STPM/STAM',
                    'MATRIKULASI' => 'MATRIKULASI',
                    'DIPLOMA' => 'DIPLOMA',
                    'SARJANA MUDA' => 'SARJANA MUDA',
                    'SARJANA' => 'SARJANA',
                    'PHD' => 'PHD',
                    'lain' => 'Lain-lain (Sila nyatakan)',
                ])->label(false);
                ?>
                <input type="text" id="lain_pendidikan" name="lain_pendidikan" hidden="true"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'bantuan'); ?></label>

            <div class="col-sm-6">
                <?=
                        $form->field($model, 'bantuan')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'no_oku'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'jumlah'); ?></label>

            <div class="col-sm-2">
                <?=
                        $form->field($model, 'jumlah')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'jumlah'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kerja_anda'); ?></label>

            <div class="col-sm-6">
                <?=
                        $form->field($model, 'kerja_anda')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'kerja_anda'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'kerja_psgn'); ?></label>

            <div class="col-sm-6">
                <?=
                        $form->field($model, 'kerja_psgn')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'kerja_psgn'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'pendapatan'); ?></label>

            <div class="col-sm-3">
                <?=
                        $form->field($model, 'pendapatan')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'pendapatan'); ?>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label"><?= Html::activeLabel($model, 'alamat'); ?></label>

            <div class="col-sm-8">
                <?=
                        $form->field($model, 'alamat')->textInput()
//                        ->hint('Please enter your name')
                        ->label(false)
                ?>
            </div>
            <?= Html::error($model, 'alamat'); ?>
        </div>

    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <!--<button type="reset" class="btn btn-default"><i class="fa fa-repeat"></i>&nbsp;Reset</button>-->
        <?= Html::submitButton('<i class="fa fa-arrow-right"></i>&nbsp;Seterusnya', ['class' => 'btn btn-primary']) ?>
    </div>
    <!-- /.box-footer -->
    <?php ActiveForm::end(); ?>
</div>


<?php
$script = <<< JS
    
       
        $(function () {
        
        $('input[name="OkuDemografi[kategori]"]').on('click', function () {
            if ($(this).val() == 'lain') {
                $('#lain_kategori').show();
            } else {
                $('#lain_kategori').hide();
            }
        });
        
        $('input[name="OkuDemografi[sebab]"]').on('click', function () {
            if ($(this).val() == 'lain') {
                $('#lain_sebab').show();
            } else {
                $('#lain_sebab').hide();
            }
        });
        
        $('input[name="OkuDemografi[sejak]"]').on('click', function () {
            if ($(this).val() == 'lain') {
                $('#lain_sejak').show();
            } else {
                $('#lain_sejak').hide();
            }
        });
        
        $('input[name="OkuDemografi[agama]"]').on('click', function () {
            if ($(this).val() == 'lain') {
                $('#lain_agama').show();
            } else {
                $('#lain_agama').hide();
            }
        });
        
        $('input[name="OkuDemografi[etnik]"]').on('click', function () {
            if ($(this).val() == 'lain') {
                $('#lain_etnik').show();
            } else {
                $('#lain_etnik').hide();
            }
        });
        
        $('input[name="OkuDemografi[kahwin]"]').on('click', function () {
            if ($(this).val() == 'lain') {
                $('#lain_kahwin').show();
            } else {
                $('#lain_kahwin').hide();
            }
        });
        
        $('input[name="OkuDemografi[peralatan]"]').on('click', function () {
            if ($(this).val() == 'lain') {
                $('#lain_peralatan').show();
            } else {
                $('#lain_peralatan').hide();
            }
        });
        
        $('input[name="OkuDemografi[pendidikan]"]').on('click', function () {
            if ($(this).val() == 'lain') {
                $('#lain_pendidikan').show();
            } else {
                $('#lain_pendidikan').hide();
            }
        });
        
    });
        
JS;
$this->registerJs($script);
?>

<script>


</script>