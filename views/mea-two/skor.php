<?php

use yii\helpers\Html;
?>

<!-- PRODUCT LIST -->
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