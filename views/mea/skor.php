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
                <th class="text-center" colspan="4">Ketua (<?php echo $bos->tret ?>)</th>
            </tr>
            <tr>
                <td class="text-center"><strong><?php echo $model->jadual1->pil_anda?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual2->pil_anda?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual3->pil_anda?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual4->pil_anda?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual1->pil_bos?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual2->pil_bos?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual3->pil_bos?></strong></td>
                <td class="text-center"><strong><?php echo $model->jadual4->pil_bos?></strong></td>
            </tr>
            <tr>
                <td colspan="4"><strong><?php echo $anda->tret ?></strong><br><?php echo $anda->rumusan ?></td>
                <td colspan="4"><strong><?php echo $anda->tret ?></strong><br><?php echo $bos->rumusan ?></td>
            </tr>
        </table>
    </div>
    <div class="box-footer text-center">
        <?= Html::a('<i class="fa fa-stop-circle"></i>&nbsp;Tamat Sesi / Jawab Semula', ['mea/des'], ['class' => 'btn btn-danger']) ?>
    </div>