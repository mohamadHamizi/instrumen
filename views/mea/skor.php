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

    .title_text {
        color: cornflowerblue;
        font-weight: bold;
    }

    .progress-bar-reverse {
        float: right;
    }
</style>

<!-- PRODUCT LIST -->



<div class="row">
    <div class="col-lg-6 col-md-6 col-xs-12">
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
                            <td class="text-right title_text">Where you focus your attention</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_anda == 'E' ? 'selected_text' : 'normal_text' ?>">E</div>
                            </td>
                            <td class="text-left"><strong>Extraversion</strong><br>People who prefer Extraversion tend to folcus their attention on the outer wolrd of people and things</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_anda == 'I' ? 'selected_text' : 'normal_text' ?>">I</div>
                            </td>
                            <td class="text-left"><strong>Intoversion</strong><br>People who prefer Introversion tend to focus their
                                attention on the inner world of ideas and impressions.</td>

                        </tr>
                        <tr>
                            <td class="text-right title_text">The way
                                you take in
                                information</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_anda == 'S' ? 'selected_text' : 'normal_text' ?>">S</div>
                            </td>
                            <td class="text-left">
                                <strong>Sensing</strong>
                                <br>
                                People who prefer Sensing tend to take in
                                information through the five senses and focus on
                                the here and now.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_anda == 'N' ? 'selected_text' : 'normal_text' ?>">N</div>
                            </td>
                            <td class="text-left">
                                <strong>Intuition</strong>
                                <br>
                                People who prefer Intuition tend to take in information
                                from patterns and the big picture and focus on future
                                possibilities.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">The way
                                you make
                                decisions</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_anda == 'T' ? 'selected_text' : 'normal_text' ?>">T</div>
                            </td>
                            <td class="text-left">
                                <strong>Thinking</strong>
                                <br>
                                People who prefer Thinking tend to make decisions
                                based primarily on logic and on objective analysis
                                of cause and effect.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_anda == 'F' ? 'selected_text' : 'normal_text' ?>">F</div>
                            </td>
                            <td class="text-left">
                                <strong>Feeling</strong>
                                <br>
                                People who prefer Feeling tend to make decisions
                                based primarily on values and on subjective
                                evaluation of person-centered concerns.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">How you
                                deal with the
                                outer world</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_anda == 'J' ? 'selected_text' : 'normal_text' ?>">J</div>
                            </td>
                            <td class="text-left">
                                <strong>Judging</strong>
                                <br>
                                People who prefer Judging tend to like a planned
                                and organized approach to life and prefer to have
                                things settled.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_anda == 'P' ? 'selected_text' : 'normal_text' ?>">P</div>
                            </td>
                            <td class="text-left">
                                <strong>Perceiving</strong>
                                <br>
                                People who prefer Perceiving tend to like a flexible
                                and spontaneous approach to life and prefer to keep
                                their options open.
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
                            <td class="text-right title_text">Where you focus your attention</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_bos == 'E' ? 'selected_text_bos' : 'normal_text' ?>">E</div>
                            </td>
                            <td class="text-left"><strong>Extraversion</strong><br>People who prefer Extraversion tend to folcus their attention on the outer wolrd of people and things</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual1->pil_bos == 'I' ? 'selected_text_bos' : 'normal_text' ?>">I</div>
                            </td>
                            <td class="text-left"><strong>Intoversion</strong><br>People who prefer Introversion tend to focus their
                                attention on the inner world of ideas and impressions.</td>

                        </tr>
                        <tr>
                            <td class="text-right title_text">The way
                                you take in
                                information</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_bos == 'S' ? 'selected_text_bos' : 'normal_text' ?>">S</div>
                            </td>
                            <td class="text-left">
                                <strong>Sensing</strong>
                                <br>
                                People who prefer Sensing tend to take in
                                information through the five senses and focus on
                                the here and now.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual2->pil_bos == 'N' ? 'selected_text_bos' : 'normal_text' ?>">N</div>
                            </td>
                            <td class="text-left">
                                <strong>Intuition</strong>
                                <br>
                                People who prefer Intuition tend to take in information
                                from patterns and the big picture and focus on future
                                possibilities.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">The way
                                you make
                                decisions</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_bos == 'T' ? 'selected_text_bos' : 'normal_text' ?>">T</div>
                            </td>
                            <td class="text-left">
                                <strong>Thinking</strong>
                                <br>
                                People who prefer Thinking tend to make decisions
                                based primarily on logic and on objective analysis
                                of cause and effect.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual3->pil_bos == 'F' ? 'selected_text_bos' : 'normal_text' ?>">F</div>
                            </td>
                            <td class="text-left">
                                <strong>Feeling</strong>
                                <br>
                                People who prefer Feeling tend to make decisions
                                based primarily on values and on subjective
                                evaluation of person-centered concerns.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right title_text">How you
                                deal with the
                                outer world</td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_bos == 'J' ? 'selected_text_bos' : 'normal_text' ?>">J</div>
                            </td>
                            <td class="text-left">
                                <strong>Judging</strong>
                                <br>
                                People who prefer Judging tend to like a planned
                                and organized approach to life and prefer to have
                                things settled.
                            </td>
                            <td class="text-center">
                                <div class="<?php echo $model->jadual4->pil_bos == 'P' ? 'selected_text_bos' : 'normal_text' ?>">P</div>
                            </td>
                            <td class="text-left">
                                <strong>Perceiving</strong>
                                <br>
                                People who prefer Perceiving tend to like a flexible
                                and spontaneous approach to life and prefer to keep
                                their options open.
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
        <h3 class="box-title">Clarity of Reported Preferences : <?php echo $anda->tret ?></h3>

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
                    <td class="text-right title_text" style="width: 15%;">Extraversion <font style="color: crimson;">E</font>
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
                        <font style="color: crimson;">I</font> Introversion
                    </td>
                </tr>
                <tr>
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
                </tr>
                <tr>
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
                </tr>
                <tr>
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
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <td class="text-center"><strong><?php echo $model->jadual1->pil_anda ?></strong></td>
                            <td class="text-center"><strong><?php echo $model->jadual2->pil_anda ?></strong></td>
                            <td class="text-center"><strong><?php echo $model->jadual3->pil_anda ?></strong></td>
                            <td class="text-center"><strong><?php echo $model->jadual4->pil_anda ?></strong></td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong><?php echo $anda->tret ?></strong><br><?php echo $anda->rumusan ?></td>
                        </tr>
                    </table>
                </div>
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
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <td class="text-center"><strong><?php echo $model->jadual1->pil_bos ?></strong></td>
                            <td class="text-center"><strong><?php echo $model->jadual2->pil_bos ?></strong></td>
                            <td class="text-center"><strong><?php echo $model->jadual3->pil_bos ?></strong></td>
                            <td class="text-center"><strong><?php echo $model->jadual4->pil_bos ?></strong></td>
                        </tr>
                        <tr>
                            <td colspan="4"><strong><?php echo $bos->tret ?></strong><br><?php echo $bos->rumusan ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="box-footer text-center">
    <?= Html::a('<i class="fa fa-stop-circle"></i>&nbsp;Tamat Sesi / Jawab Semula', ['mea/des'], ['class' => 'btn btn-danger']) ?>
</div>