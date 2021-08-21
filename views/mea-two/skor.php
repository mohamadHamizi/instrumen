<?php

use yii\helpers\Html;
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Reported Type : <?php echo $anda->tret ?> (Anda)</h3>

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
                <h3 class="box-title">Reported Type : <?php echo $bos->tret ?> (Ketua)</h3>

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
                            </td>
                            <td class="text-left" style="width:20%"><strong>Ekstrovert</strong>
                                <br>
                                Individu ini cenderung menumpukan perhatian mereka kepada manusia dan benda-benda di dunia luar.
                            </td>
                            <td>
                                <?= Html::img('/instrumen/web/img/e.png', ['width' => '70px']); ?>
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_bos == 'I' ? 'selected_text_bos' : 'normal_text' ?>">I</div>
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
                                <div class="<?php echo $model->jadual2->pil_bos == 'S' ? 'selected_text_bos' : 'normal_text' ?>">S</div>
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
                                <div class="<?php echo $model->jadual2->pil_bos == 'N' ? 'selected_text_bos' : 'normal_text' ?>">N</div>
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
                                <div class="<?php echo $model->jadual3->pil_bos == 'T' ? 'selected_text_bos' : 'normal_text' ?>">T</div>
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
                                <div class="<?php echo $model->jadual3->pil_bos == 'F' ? 'selected_text_bos' : 'normal_text' ?>">F</div>
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
                                <div class="<?php echo $model->jadual4->pil_bos == 'J' ? 'selected_text_bos' : 'normal_text' ?>">J</div>
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
                                <div class="<?php echo $model->jadual4->pil_bos == 'P' ? 'selected_text_bos' : 'normal_text' ?>">P</div>
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


<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Skor</h3>

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
                <td class="text-center"><strong><?php echo $model->jadual1->pil_anda ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual2->pil_anda ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual3->pil_anda ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual4->pil_anda ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual1->pil_pen_1 ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual2->pil_pen_1 ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual3->pil_pen_1 ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual4->pil_pen_1 ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual1->pil_pen_2 ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual2->pil_pen_2 ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual3->pil_pen_2 ?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual4->pil_pen_2 ?></strong></td>
            </tr>
            <tr>
                <td colspan="4"><strong><?php echo $anda->tret ?></strong><br><?php echo $anda->rumusan ?></td>
                <td colspan="4"><strong><?php echo $pen_1->tret ?></strong><br><?php echo $pen_1->rumusan ?></td>
                <td colspan="4"><strong><?php echo $pen_2->tret ?></strong><br><?php echo $pen_2->rumusan ?></td>
            </tr>
        </table>


        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th class="text-center">&nbsp;</th>
                <th class="text-center">Anda</th>
                <th class="text-center">Penilai 1</th>
                <th class="text-center">Penilai 2</th>
            </tr>
            <tr>
                <td class="text-center"><h2><strong>ENERGY</strong></h2></td>
                <td class="text-center"><h1>(<?php echo $model->jadual1->skorPilihanAnda ?>) <?php echo $model->jadual1->pil_anda ?></h1></td>
                <td class="text-center"><h1><?php echo $model->jadual1->pil_pen_1 ?> (<?php echo $model->jadual1->skorPilihanPenilai1?>)</h1></td>
                <td class="text-center"><h1><?php echo $model->jadual1->pil_pen_2 ?> (<?php echo $model->jadual1->skorPilihanPenilai2?>)</h1></td>
            </tr>
            <tr>
                <td class="text-center"><h2><strong>INFORMATION</strong></h2></td>
                <td class="text-center"><h1>(<?php echo $model->jadual2->skorPilihanAnda ?>) <?php echo $model->jadual2->pil_anda ?></h1></td>
                <td class="text-center"><h1><?php echo $model->jadual2->pil_pen_1 ?> (<?php echo $model->jadual2->skorPilihanPenilai1 ?>)</h1></td>
                <td class="text-center"><h1><?php echo $model->jadual2->pil_pen_2 ?> (<?php echo $model->jadual2->skorPilihanPenilai2?>)</h1></td>
            </tr>
            <tr>
                <td class="text-center"><h2><strong>DECISIONS</strong></h2></td>
                <td class="text-center"><h1>(<?php echo $model->jadual3->skorPilihanAnda ?>) <?php echo $model->jadual3->pil_anda ?></h1></td>
                <td class="text-center"><h1><?php echo $model->jadual3->pil_pen_1 ?> (<?php echo $model->jadual3->skorPilihanPenilai1 ?>)</h1></td>
                <td class="text-center"><h1><?php echo $model->jadual3->pil_pen_2 ?> (<?php echo $model->jadual3->skorPilihanPenilai2?>)</h1></td>
            </tr>
            <tr>
                <td class="text-center"><h2> <strong>LIFESTYLE</strong></h2></td>
                <td class="text-center"><h1>(<?php echo $model->jadual4->skorPilihanAnda ?>) <?php echo $model->jadual4->pil_anda ?></h1></td>
                <td class="text-center"><h1><?php echo $model->jadual4->pil_pen_1 ?> (<?php echo $model->jadual4->skorPilihanPenilai1 ?>)</h1></td>
                <td class="text-center"><h1><?php echo $model->jadual4->pil_pen_2 ?> (<?php echo $model->jadual4->skorPilihanPenilai2?>)</h1></td>
            </tr>
        </table>
    </div>
    <div class="box-footer text-center">
        <?= Html::a('<i class="fa fa-stop-circle"></i>&nbsp;Tamat Sesi / Jawab Semula', ['mea-two/des'], ['class' => 'btn btn-danger']) ?>
    </div>