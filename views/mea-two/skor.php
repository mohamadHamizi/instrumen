<?php

use yii\helpers\Html;
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

    .selected_text_bos_2 {
        font-size: 50px;
        font-weight: bold;
        border-style: solid;
        padding-left: 10px;
        padding-right: 10px;
        width: 60px;
        display: inline-block;
        background-color: #00A65A;
    }

    .title_text {
        color: cornflowerblue;
        font-weight: bold;
    }

    .progress-bar-reverse {
        float: right;
    }
</style>

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Jenis Pelaporan : <?php echo $anda->tret ?> (Anda)</h3>

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
                            </td>
                            <td class="text-left" style="width:20%"><strong>Ekstrovert</strong>
                                <br>
                                Individu ini cenderung menumpukan perhatian mereka kepada manusia dan benda-benda di dunia luar.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/e.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_anda == 'I' ? 'selected_text' : 'normal_text' ?>">I</div>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Introvert</strong>
                                <br>
                                Individu ini lebih suka menumpukan perhatian mereka pada dunia tanggapan dan idea.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/i.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MENDAPATKAN MAKLUMAT</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_anda == 'S' ? 'selected_text' : 'normal_text' ?>">S</div>
                            </td>
                            <td class="text-left">
                                <strong>Sensing</strong>
                                <br>
                                Individu ini lebih cenderung menggunakan kelima-lima deria untuk mendapatkan maklumat dan menumpukan perhatian pada situasi semasa.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/s.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_anda == 'N' ? 'selected_text' : 'normal_text' ?>">N</div>
                            </td>
                            <td class="text-left">
                                <strong>Intuition</strong>
                                <br>
                                Individu ini lebih cenderung mengambil maklumat menggunakan gerak hati, melihat gambaran secara keseluruhan dan fokus pada kemungkinan masa depan.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/n.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MEMBUAT KEPUTUSAN</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_anda == 'T' ? 'selected_text' : 'normal_text' ?>">T</div>
                            </td>
                            <td class="text-left">
                                <strong>Thinking</strong>
                                <br>
                                Individu ini cenderung membuat sesuatu keputusan berdasarkan logik dan analisis objektif berdasarkan sebab dan akibat.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/t.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_anda == 'F' ? 'selected_text' : 'normal_text' ?>">F</div>
                            </td>
                            <td class="text-left">
                                <strong>Feeling</strong>
                                <br>
                                Individu ini cenderung membuat keputusan berdasarkan nilai dan penilaian subjektif terhadap keprihatinan yang berpusatkan orang.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/f.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">BAGAIMANA ANDA MENGHADAPI DUNIA LUAR</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_anda == 'J' ? 'selected_text' : 'normal_text' ?>">J</div>
                            </td>
                            <td class="text-left">
                                <strong>Judging</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang terancang dan teratur dan lebih suka menyelesaikan sesuatu.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/j.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_anda == 'P' ? 'selected_text' : 'normal_text' ?>">P</div>
                            </td>
                            <td class="text-left">
                                <strong>Perceiving</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang fleksibel dan spontan serta lebih suka membiarkan pilihan mereka terbuka.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/p.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box box-danger box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Jenis Pelaporan : <?php echo $pen_1->tret ?> (Penilai 1)</h3>

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
                                <div class="<?php echo $model->jadual1->pil_pen_1 == 'E' ? 'selected_text_bos' : 'normal_text' ?>">E</div>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Ekstrovert</strong>
                                <br>
                                Individu ini cenderung menumpukan perhatian mereka kepada manusia dan benda-benda di dunia luar.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/e.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_pen_1 == 'I' ? 'selected_text_bos' : 'normal_text' ?>">I</div>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Introvert</strong>
                                <br>
                                Individu ini lebih suka menumpukan perhatian mereka pada dunia tanggapan dan idea.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/i.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MENDAPATKAN MAKLUMAT</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_pen_1 == 'S' ? 'selected_text_bos' : 'normal_text' ?>">S</div>
                            </td>
                            <td class="text-left">
                                <strong>Sensing</strong>
                                <br>
                                Individu ini lebih cenderung menggunakan kelima-lima deria untuk mendapatkan maklumat dan menumpukan perhatian pada situasi semasa.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/s.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_pen_1 == 'N' ? 'selected_text_bos' : 'normal_text' ?>">N</div>
                            </td>
                            <td class="text-left">
                                <strong>Intuition</strong>
                                <br>
                                Individu ini lebih cenderung mengambil maklumat menggunakan gerak hati, melihat gambaran secara keseluruhan dan fokus pada kemungkinan masa depan.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/n.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MEMBUAT KEPUTUSAN</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_pen_1 == 'T' ? 'selected_text_bos' : 'normal_text' ?>">T</div>
                            </td>
                            <td class="text-left">
                                <strong>Thinking</strong>
                                <br>
                                Individu ini cenderung membuat sesuatu keputusan berdasarkan logik dan analisis objektif berdasarkan sebab dan akibat.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/t.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_pen_1 == 'F' ? 'selected_text_bos' : 'normal_text' ?>">F</div>
                            </td>
                            <td class="text-left">
                                <strong>Feeling</strong>
                                <br>
                                Individu ini cenderung membuat keputusan berdasarkan nilai dan penilaian subjektif terhadap keprihatinan yang berpusatkan orang.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/f.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">BAGAIMANA ANDA MENGHADAPI DUNIA LUAR</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_pen_1 == 'J' ? 'selected_text_bos' : 'normal_text' ?>">J</div>
                            </td>
                            <td class="text-left">
                                <strong>Judging</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang terancang dan teratur dan lebih suka menyelesaikan sesuatu.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/j.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_pen_1 == 'P' ? 'selected_text_bos' : 'normal_text' ?>">P</div>
                            </td>
                            <td class="text-left">
                                <strong>Perceiving</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang fleksibel dan spontan serta lebih suka membiarkan pilihan mereka terbuka.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/p.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Jenis Pelaporan : <?php echo $pen_2->tret ?> (Penilai 2)</h3>

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
                                <div class="<?php echo $model->jadual1->pil_pen_2 == 'E' ? 'selected_text_bos_2' : 'normal_text' ?>">E</div>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Ekstrovert</strong>
                                <br>
                                Individu ini cenderung menumpukan perhatian mereka kepada manusia dan benda-benda di dunia luar.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/e.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_pen_2 == 'I' ? 'selected_text_bos_2' : 'normal_text' ?>">I</div>
                            </td>
                            <td class="text-left" style="width:20%"><strong>Introvert</strong>
                                <br>
                                Individu ini lebih suka menumpukan perhatian mereka pada dunia tanggapan dan idea.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/i.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MENDAPATKAN MAKLUMAT</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_pen_2 == 'S' ? 'selected_text_bos_2' : 'normal_text' ?>">S</div>
                            </td>
                            <td class="text-left">
                                <strong>Sensing</strong>
                                <br>
                                Individu ini lebih cenderung menggunakan kelima-lima deria untuk mendapatkan maklumat dan menumpukan perhatian pada situasi semasa.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/s.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_pen_2 == 'N' ? 'selected_text_bos_2' : 'normal_text' ?>">N</div>
                            </td>
                            <td class="text-left">
                                <strong>Intuition</strong>
                                <br>
                                Individu ini lebih cenderung mengambil maklumat menggunakan gerak hati, melihat gambaran secara keseluruhan dan fokus pada kemungkinan masa depan.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/n.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">CARA ANDA MEMBUAT KEPUTUSAN</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_pen_2 == 'T' ? 'selected_text_bos_2' : 'normal_text' ?>">T</div>
                            </td>
                            <td class="text-left">
                                <strong>Thinking</strong>
                                <br>
                                Individu ini cenderung membuat sesuatu keputusan berdasarkan logik dan analisis objektif berdasarkan sebab dan akibat.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/t.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_pen_2 == 'F' ? 'selected_text_bos_2' : 'normal_text' ?>">F</div>
                            </td>
                            <td class="text-left">
                                <strong>Feeling</strong>
                                <br>
                                Individu ini cenderung membuat keputusan berdasarkan nilai dan penilaian subjektif terhadap keprihatinan yang berpusatkan orang.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/f.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">BAGAIMANA ANDA MENGHADAPI DUNIA LUAR</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_pen_2 == 'J' ? 'selected_text_bos_2' : 'normal_text' ?>">J</div>
                            </td>
                            <td class="text-left">
                                <strong>Judging</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang terancang dan teratur dan lebih suka menyelesaikan sesuatu.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/j.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_pen_2 == 'P' ? 'selected_text_bos_2' : 'normal_text' ?>">P</div>
                            </td>
                            <td class="text-left">
                                <strong>Perceiving</strong>
                                <br>
                                Individu ini cenderung menyukai pendekatan hidup yang fleksibel dan spontan serta lebih suka membiarkan pilihan mereka terbuka.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/p.png', ['width' => '70px']); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box box-warning box-solid">
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
                    <td class="text-right title_text" style="width: 15%;">Extravert
                        <br>
                        <div class='normal_text' ?>E</div>
                    </td>
                    <td class="text-center" colspan="4" style="width: 35%;">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse" style="width:<?= round(($model->jadual1->total_anda1 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_anda1 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-red" style="width:<?= round(($model->jadual1->total_pen_11 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_pen_11 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-green" style="width:<?= round(($model->jadual1->total_pen_21 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_pen_21 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="text-center" colspan="4" style="width: 35%;">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:<?= round(($model->jadual1->total_anda2 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_anda2 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:<?= round(($model->jadual1->total_pen_12 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_pen_12 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-green" style="width:<?= round(($model->jadual1->total_pen_22 / 7) * 100, 0) ?>%"><?= round(($model->jadual1->total_pen_22 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="title_text" style="width: 15%;">
                        Introvert
                        <br>
                        <div class='normal_text' ?>I</div>
                    </td>
                    <td><?= Html::img('/instrumen/web/img/i.png', ['width' => '70px']); ?></td>
                </tr>
                <tr>
                    <td><?= Html::img('/instrumen/web/img/s.png', ['width' => '70px']); ?></td>
                    <td class="text-right title_text">Sensing
                        <br>
                        <div class='normal_text' ?>S</div>
                    </td>
                    <td class="text-right" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse" style="width:<?= round(($model->jadual2->total_anda1 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_anda1 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-red" style="width:<?= round(($model->jadual2->total_pen_11 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_pen_11 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-green" style="width:<?= round(($model->jadual2->total_pen_21 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_pen_21 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="text-center" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:<?= round(($model->jadual2->total_anda2 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_anda2 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:<?= round(($model->jadual2->total_pen_12 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_pen_12 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-green" style="width:<?= round(($model->jadual2->total_pen_22 / 7) * 100, 0) ?>%"><?= round(($model->jadual2->total_pen_22 / 7) * 100, 0) ?>%</div>
                        </div>

                    </td>
                    <td class="title_text" style="width: 15%;">
                        Intuition
                        <br>
                        <div class='normal_text' ?>N</div>
                    </td>
                    <td><?= Html::img('/instrumen/web/img/n.png', ['width' => '70px']); ?></td>
                </tr>
                <tr>
                    <td><?= Html::img('/instrumen/web/img/t.png', ['width' => '70px']); ?></td>
                    <td class="text-right title_text">Thinking
                        <br>
                        <div class='normal_text' ?>T</div>
                    </td>
                    <td class="text-right" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse" style="width:<?= round(($model->jadual3->total_anda1 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_anda1 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-red" style="width:<?= round(($model->jadual3->total_pen_11 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_pen_11 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-green" style="width:<?= round(($model->jadual3->total_pen_21 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_pen_21 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="text-center" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:<?= round(($model->jadual3->total_anda2 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_anda2 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:<?= round(($model->jadual3->total_pen_12 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_pen_12 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-green" style="width:<?= round(($model->jadual3->total_pen_22 / 7) * 100, 0) ?>%"><?= round(($model->jadual3->total_pen_22 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="title_text">
                        Feeling
                        <br>
                        <div class='normal_text' ?>F</div>
                    </td>
                    <td><?= Html::img('/instrumen/web/img/f.png', ['width' => '70px']); ?></td>
                </tr>
                <tr>
                    <td><?= Html::img('/instrumen/web/img/j.png', ['width' => '70px']); ?></td>
                    <td class="text-right title_text">Judging
                        <br>
                        <div class='normal_text' ?>J</div>
                    </td>
                    <td class="text-right" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse" style="width:<?= round(($model->jadual4->total_anda1 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_anda1 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-red" style="width:<?= round(($model->jadual4->total_pen_11 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_pen_11 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar-reverse progress-bar-green" style="width:<?= round(($model->jadual4->total_pen_21 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_pen_21 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="text-center" colspan="4">
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar" style="width:<?= round(($model->jadual4->total_anda2 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_anda2 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:<?= round(($model->jadual4->total_pen_12 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_pen_12 / 7) * 100, 0) ?>%</div>
                        </div>
                        <div class="progress progress-lg">
                            <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-green" style="width:<?= round(($model->jadual4->total_pen_22 / 7) * 100, 0) ?>%"><?= round(($model->jadual4->total_pen_22 / 7) * 100, 0) ?>%</div>
                        </div>
                    </td>
                    <td class="title_text">
                        Perceiving
                        <br>
                        <div class='normal_text' ?>P</div>
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
                        <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-red" style="width:100%">Penilai 1 (<?php echo $pen_1->tret ?>)</div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-xs-12">

                    <div class="progress progress-lg">
                        <div class="progress-bar progress-bar-animated progress-bar-striped progress-bar progress-bar-green" style="width:100%">Penilai 2 (<?php echo $pen_2->tret ?>)</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="box box-warning box-solid">
    <div class="box-header with-border">
        <h3 class="box-title">Keterangan</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th class="text-center" colspan="4">Anda</th>
                <th class="text-center" colspan="4">Penilai 1</th>
                <th class="text-center" colspan="4">Penilai 2</th>
            </tr>
            <tr>
                <td class="text-center progress-bar-primary"><strong><?php echo $model->jadual1->pil_anda ?></strong></td>
                <td class="text-center progress-bar-primary"><strong><?php echo $model->jadual2->pil_anda ?></strong></td>
                <td class="text-center progress-bar-primary"><strong><?php echo $model->jadual3->pil_anda ?></strong></td>
                <td class="text-center progress-bar-primary"><strong><?php echo $model->jadual4->pil_anda ?></strong></td>
                <td class="text-center progress-bar-red"><strong><?php echo $model->jadual1->pil_pen_1 ?></strong></td>
                <td class="text-center progress-bar-red"><strong><?php echo $model->jadual3->pil_pen_1 ?></strong></td>
                <td class="text-center progress-bar-red"><strong><?php echo $model->jadual2->pil_pen_1 ?></strong></td>
                <td class="text-center progress-bar-red"><strong><?php echo $model->jadual4->pil_pen_1 ?></strong></td>
                <td class="text-center progress-bar-green"><strong><?php echo $model->jadual1->pil_pen_2 ?></strong></td>
                <td class="text-center progress-bar-green"><strong><?php echo $model->jadual2->pil_pen_2 ?></strong></td>
                <td class="text-center progress-bar-green"><strong><?php echo $model->jadual3->pil_pen_2 ?></strong></td>
                <td class="text-center progress-bar-green"><strong><?php echo $model->jadual4->pil_pen_2 ?></strong></td>
            </tr>
            <tr>
                <td colspan="4" class="text-center">
                    <font style="font-size: 30px; text-transform:uppercase; font-weight:bold;">THE <?php echo $anda->ciri ?>
                    </font>
                    <hr>
                    <?php echo $anda->rumusan ?>
                </td>
                <td colspan="4" class="text-center">
                    <font style="font-size: 30px; text-transform:uppercase; font-weight:bold;">THE <?php echo $pen_1->ciri ?></font>
                    <hr><?php echo $pen_1->rumusan ?>
                </td>
                <td colspan="4" class="text-center">
                    <font style="font-size: 30px; text-transform:uppercase; font-weight:bold;">THE <?php echo $pen_2->ciri ?></font>
                    <hr><?php echo $pen_2->rumusan ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="box-footer text-center">
        <?= Html::a('<i class="fa fa-stop-circle"></i>&nbsp;Tamat Sesi / Jawab Semula', ['mea-two/des'], ['class' => 'btn btn-danger']) ?>
    </div>