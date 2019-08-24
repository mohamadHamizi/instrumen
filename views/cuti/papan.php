<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\daterange\DateRangePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use app\models\Users;

/* @var $this yii\web\View */
/* @var $model app\models\RekodCuti */

$this->title = 'Papan Kenyataan Cuti Felo';
//$this->params['breadcrumbs'][] = ['label' => 'Rekod Cuti', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>


<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-calendar"></i>&nbsp;<strong><?= $this->title ?></strong></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th style="width: 10px">Bil</th>
                    <th class="text-center text-bold">Pemohon</th>
                    <th class="text-center text-capitalize">Tarikh Cuti</th>
                    <th class="text-center text-capitalize">Tempoh (Hari)</th>
                    <th class="text-center text-capitalize">Tujuan/Catatan</th>
                    <!--<th class="text-center text-capitalize">Status</th>-->
                </tr>
                <?php foreach ($model as $cuti) { ?>
                 <tr>
                        <td class="text-center" ><?= $bil++; ?></td>
                        <td class="text-center"><?= $cuti->pemohon->fullname; ?></td>
                        <td class="text-center"><?= $cuti->tarikhFull; ?></td>
                        <td class="text-center"><?= $cuti->tempoh; ?></td>
                        <td class="text-center"><?= $cuti->remark; ?></td>
                        <!--<td class="text-center"><span class="badge bg-green"><?= $cuti->stat; ?></span></td>-->
                 </tr>
                
                <?php } ?>
            </table>
                <!-- form start -->
        </div>
    </div>

</div>