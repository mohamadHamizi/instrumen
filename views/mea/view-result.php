<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<style>
    .graf-legend {
        font-size: 12px;
        width: 150px;
    }

    .normal_text {
        font-size: 50px;
        font-weight: bold;
        border-style: solid;
        padding-left: 10px;
        padding-right: 10px;
        width: 60px;
        display: inline-block;
    }

    .selected_text {
        font-size: 50px;
        font-weight: bold;
        border-style: solid;
        padding-left: 10px;
        padding-right: 10px;
        width: 60px;
        display: inline-block;
        background-color: cornflowerblue;
    }

    .selected_text_bos {
        font-size: 50px;
        font-weight: bold;
        border-style: solid;
        padding-left: 10px;
        padding-right: 10px;
        width: 60px;
        display: inline-block;
        background-color: #DE4B39;
    }

    .title_text {
        color: cornflowerblue;
        font-weight: bold;
    }

    .progress-bar-reverse {
        float: right;
    }
</style>

<!-- PRODUCT LIST -->


<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Demografi Responden</strong></h3>
    </div>
    <div class="box-body">
        <?php
        echo DetailView::widget([
            'model' => $demo,
            'attributes' => [
                [
                    'label' => 'Nama Penuh',
                    'value' => $demo->nama_penuh,
                ],
                'jantina',
                'umur',
                [                      // the owner name of the model
                    'label' => 'Jawatan',
                    'value' => $demo->jawatan,
                ],
                'organisasi',
                'organisasi_lain',
                'tarikh_lahir',
                'warna',
                'bangsa',
                'darah',
                // [                      // the owner name of the model
                //     'label' => 'Warganegara',
                //     'value' => $demo->warganegara,
                // ],
                'anak_keberapa',
                // [                      // the owner name of the model
                //     'label' => 'Negara',
                //     'value' => $demo->negara,
                // ],
            ],
        ]);
        ?>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Jenis Laporan : <?php echo $anda->tret ?> (Anda)</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td class="text-right title_text" style="width:10%">DI MANA ANDA MENUMPUKAN PERHATIAN ANDA</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_anda == 'E' ? 'selected_text' : 'normal_text' ?>">E</div>
                                <?= Html::img('/instrumen/web/img/e.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Ekstrovert</strong>
                                <br>
                                Individu ini cenderung menumpukan perhatian mereka kepada manusia dan benda-benda di dunia luar.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_anda == 'I' ? 'selected_text' : 'normal_text' ?>">I</div>
                                <?= Html::img('/instrumen/web/img/i.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Introvert</strong>
                                <br>
                                Individu ini lebih suka menumpukan perhatian mereka pada dunia tanggapan dan idea.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MENDAPATKAN MAKLUMAT</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_anda == 'S' ? 'selected_text' : 'normal_text' ?>">S</div>
                                <?= Html::img('/instrumen/web/img/s.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Sensing</strong>
                                <br>
                                Individu ini lebih cenderung menggunakan kelima-lima deria untuk mendapatkan maklumat dan menumpukan perhatian pada situasi semasa.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_anda == 'N' ? 'selected_text' : 'normal_text' ?>">N</div>
                                <?= Html::img('/instrumen/web/img/n.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Intuition</strong>
                                <br>
                                Individu ini lebih cenderung mengambil maklumat menggunakan gerak hati, melihat gambaran secara keseluruhan dan fokus pada kemungkinan masa depan.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MEMBUAT KEPUTUSAN</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_anda == 'T' ? 'selected_text' : 'normal_text' ?>">T</div>
                                <?= Html::img('/instrumen/web/img/t.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Thinking</strong>
                                <br>
                                Individu ini cenderung membuat sesuatu keputusan berdasarkan logik dan analisis objektif berdasarkan sebab dan akibat.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_anda == 'F' ? 'selected_text' : 'normal_text' ?>">F</div>
                                <?= Html::img('/instrumen/web/img/f.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Feeling</strong>
                                <br>
                                Individu ini cenderung membuat keputusan berdasarkan nilai dan penilaian subjektif terhadap keprihatinan yang berpusatkan orang.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">BAGAIMANA ANDA MENGHADAPI DUNIA LUAR</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_anda == 'J' ? 'selected_text' : 'normal_text' ?>">J</div>
                                <?= Html::img('/instrumen/web/img/j.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Judging</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang terancang dan teratur dan lebih suka menyelesaikan sesuatu.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_anda == 'P' ? 'selected_text' : 'normal_text' ?>">P</div>
                                <?= Html::img('/instrumen/web/img/p.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Perceiving</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang fleksibel dan spontan serta lebih suka membiarkan pilihan mereka terbuka.
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="box box-danger box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Jenis Laporan : <?php echo $bos->tret ?> (Ketua)</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td class="text-right title_text" style="width:10%">DI MANA ANDA MENUMPUKAN PERHATIAN ANDA</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_bos == 'E' ? 'selected_text_bos' : 'normal_text' ?>">E</div>
                                <?= Html::img('/instrumen/web/img/e.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Ekstrovert</strong>
                                <br>
                                Individu ini cenderung menumpukan perhatian mereka kepada manusia dan benda-benda di dunia luar.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_bos == 'I' ? 'selected_text_bos' : 'normal_text' ?>">I</div>
                                <?= Html::img('/instrumen/web/img/i.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Introvert</strong>
                                <br>
                                Individu ini lebih suka menumpukan perhatian mereka pada dunia tanggapan dan idea.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MENDAPATKAN MAKLUMAT</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_bos == 'S' ? 'selected_text_bos' : 'normal_text' ?>">S</div>
                                <?= Html::img('/instrumen/web/img/s.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Sensing</strong>
                                <br>
                                Individu ini lebih cenderung menggunakan kelima-lima deria untuk mendapatkan maklumat dan menumpukan perhatian pada situasi semasa.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_bos == 'N' ? 'selected_text_bos' : 'normal_text' ?>">N</div>
                                <?= Html::img('/instrumen/web/img/n.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Intuition</strong>
                                <br>
                                Individu ini lebih cenderung mengambil maklumat menggunakan gerak hati, melihat gambaran secara keseluruhan dan fokus pada kemungkinan masa depan.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MEMBUAT KEPUTUSAN</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_bos == 'T' ? 'selected_text_bos' : 'normal_text' ?>">T</div>
                                <?= Html::img('/instrumen/web/img/t.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Thinking</strong>
                                <br>
                                Individu ini cenderung membuat sesuatu keputusan berdasarkan logik dan analisis objektif berdasarkan sebab dan akibat.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_bos == 'F' ? 'selected_text_bos' : 'normal_text' ?>">F</div>
                                <?= Html::img('/instrumen/web/img/f.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Feeling</strong>
                                <br>
                                Individu ini cenderung membuat keputusan berdasarkan nilai dan penilaian subjektif terhadap keprihatinan yang berpusatkan orang.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">BAGAIMANA ANDA MENGHADAPI DUNIA LUAR</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_bos == 'J' ? 'selected_text_bos' : 'normal_text' ?>">J</div>
                                <?= Html::img('/instrumen/web/img/j.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Judging</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang terancang dan teratur dan lebih suka menyelesaikan sesuatu.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_bos == 'P' ? 'selected_text_bos' : 'normal_text' ?>">P</div>
                                <?= Html::img('/instrumen/web/img/p.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-left">
                                <strong>Perceiving</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang fleksibel dan spontan serta lebih suka membiarkan pilihan mereka terbuka.
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box box-success box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Peratusan %</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table">

                <tr>
                    <td><?= Html::img('/instrumen/web/img/e.png', ['width' => '70px']); ?></td>
                    <td class="text-right title_text" style="width: 15%;">Extravert <font style="color: crimson;">E</font>
                    </td>
                    <td class="text-center" colspan="4" style="width: 35%;">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse" style="width:<?= round(($model->jadual1->total_anda1 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_anda1 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-red" style="width:<?= round(($model->jadual1->total_bos1 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_bos1 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="text-center" colspan="4" style="width: 35%;">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:<?= round(($model->jadual1->total_anda2 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_anda2 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:<?= round(($model->jadual1->total_bos2 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_bos2 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="title_text" style="width: 15%;">
                        <font style="color: crimson;">I</font> Introvert
                    </td>
                    <td><?= Html::img('/instrumen/web/img/i.png', ['width' => '70px']); ?></td>
                </tr>
                <tr>
                    <td><?= Html::img('/instrumen/web/img/s.png', ['width' => '70px']); ?></td>
                    <td class="text-right title_text">Sensing <font style="color: crimson;">S</font>
                    </td>
                    <td class="text-right" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse" style="width:<?= round(($model->jadual2->total_anda1 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_anda1 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-red" style="width:<?= round(($model->jadual2->total_bos1 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_bos1 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="text-center" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:<?= round(($model->jadual2->total_anda2 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_anda2 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:<?= round(($model->jadual2->total_bos2 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_bos2 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="title_text">
                        <font style="color: crimson;">N</font> Intuition
                    </td>
                    <td><?= Html::img('/instrumen/web/img/n.png', ['width' => '70px']); ?></td>
                </tr>
                <tr>
                    <td><?= Html::img('/instrumen/web/img/t.png', ['width' => '70px']); ?></td>
                    <td class="text-right title_text">Thinking <font style="color: crimson;">T</font>
                    </td>
                    <td class="text-right" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse" style="width:<?= round(($model->jadual3->total_anda1 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_anda1 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-red" style="width:<?= round(($model->jadual3->total_bos1 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_bos1 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="text-center" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:<?= round(($model->jadual3->total_anda2 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_anda2 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:<?= round(($model->jadual3->total_bos2 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_bos2 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="title_text">
                        <font style="color: crimson;">F</font> Feeling
                    </td>
                    <td><?= Html::img('/instrumen/web/img/f.png', ['width' => '70px']); ?></td>
                </tr>
                <tr>
                    <td><?= Html::img('/instrumen/web/img/j.png', ['width' => '70px']); ?></td>
                    <td class="text-right title_text">Judging <font style="color: crimson;">J</font>
                    </td>
                    <td class="text-right" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse" style="width:<?= round(($model->jadual4->total_anda1 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_anda1 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-red" style="width:<?= round(($model->jadual4->total_bos1 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_bos1 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="text-center" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:<?= round(($model->jadual4->total_anda2 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_anda2 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:<?= round(($model->jadual4->total_bos2 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_bos2 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="title_text">
                        <font style="color: crimson;">P</font> Perceiving
                    </td>
                    <td><?= Html::img('/instrumen/web/img/p.png', ['width' => '70px']); ?></td>
                </tr>

            </table>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-1 col-md-1 col-xs-12">
                    <strong>Rujukan :</strong>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12">
                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:100%">Anda (<?php echo $anda->tret ?>)</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12">

                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:100%">Ketua (<?php echo $bos->tret ?>)</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Anda</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped">
                    <tr style="font-size: 30px; text-transform:uppercase;">
                        <td class="text-center"><strong><?php echo $model->jadual1->pil_anda ?></strong></td>
                        <td class="text-center"><strong><?php echo $model->jadual2->pil_anda ?></strong></td>
                        <td class="text-center"><strong><?php echo $model->jadual3->pil_anda ?></strong></td>
                        <td class="text-center"><strong><?php echo $model->jadual4->pil_anda ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><strong>
                                <font style="font-size: 30px; text-transform:uppercase;">The <?php echo $anda->ciri ?></font>
                            </strong></td>
                    </tr>
                    <tr>
                        <td colspan="4"><?php echo $anda->rumusan ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="box box-danger box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Ketua</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped">
                    <tr style="font-size: 30px; text-transform:uppercase;">
                        <td class="text-center"><strong><?php echo $model->jadual1->pil_bos ?></strong></td>
                        <td class="text-center"><strong><?php echo $model->jadual2->pil_bos ?></strong></td>
                        <td class="text-center"><strong><?php echo $model->jadual3->pil_bos ?></strong></td>
                        <td class="text-center"><strong><?php echo $model->jadual4->pil_bos ?></strong></td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-center"><strong>
                                <font style="font-size: 30px; text-transform:uppercase;">The <?php echo $bos->ciri ?></font>
                            </strong></td>
                    </tr>
                    <tr>
                        <td colspan="4"><?php echo $bos->rumusan ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="box-footer text-center">
    <?= Html::a('<i class="fa fa-stop-circle"></i>&nbsp;Kembali', ['/admin/data-mea'], ['class' => 'btn btn-danger']) ?>
</div>