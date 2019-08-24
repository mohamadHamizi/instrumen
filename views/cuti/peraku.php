<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="box box-info">
    <div class="box-header with-border">
        <h4 class="box-title"><i class="fa fa-list-ul"></i>&nbsp;<strong>Senarai tindakan untuk Perakuan</strong></h4>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th style="width: 10px">Bil</th>
                    <th class="text-center text-bold">Pemohon</th>
                    <th class="text-center text-capitalize">Tarikh Cuti</th>
                    <th class="text-center text-capitalize">Tempoh (Hari)</th>
                    <!--<th class="text-center text-capitalize">Tujuan/Catatan</th>-->
                    <th class="text-center" colspan="2" style="width: 40px">Tindakan</th>
                </tr>
                <?php //yii\helpers\VarDumper::dump($model); ?>
                <?php if ($model) { ?>
                    <?php foreach ($model as $cuti) { ?>
                        <tr>
                            <td class="text-center" ><?= $bil++; ?></td>
                            <td class="text-center"><?= $cuti->pemohon->fullname; ?></td>
                            <td class="text-center"><span class="badge bg-blue"><?= $cuti->tarikhFull; ?></span></td>
                            <td class="text-center"><?= $cuti->tempoh; ?></td>
                            <!--<td class="text-center"><?= $cuti->remark; ?></td>-->
                            <td class="text-center"><?= Html::a('<i class="fa fa-pencil"></i>', ['/cuti/tindakan-peraku', 'id'=>$cuti->id], ['class' => 'btn-sm']) ?></td>
                           
                        </tr>
                    <?php } ?>
                <?php } ?>
            </table>
        </div>
    </div>
</div>