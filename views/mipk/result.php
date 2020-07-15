<?php

use yii\helpers\Html;
?>

<!-- PRODUCT LIST -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Intrepretasi berdasarkan skor yang anda peroleh adalah seperti berikut: </h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <table class="table table-bordered table-striped table-condensed">
                    <tr>
                        <th  class="text-center" >Skor</th>
                        <th class="text-center text-capitalize">Intrepretasi</th>
                    </tr>
                    <tr style="font-weight: bold">
                        <td class="text-center" ><?=$skor?></td>
                        <td ><?=$interpretasi?></td>
                    </tr>
                </table>
    </div>

</div>
<div class="form-group text-center">
    <?= Html::a('<i class="fa fa-stop-circle"></i>&nbsp;Tamat Sesi / Jawab Semula', ['mipk/des'], ['class' => 'btn btn-danger']) ?>
</div>