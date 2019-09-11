<?php

use app\models\OkuDimensi;
use app\models\OkuScoring;
use app\models\OkuSumber;
use app\models\OkuStrategi;
use app\models\OkuKesan;
?>



<!-- PRODUCT LIST -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN A : DIMENSI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <ul class="products-list product-list-in-box">
            <?php foreach ($groups as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuDimensi::GroupSkor($group->id, $main_id) ?>/<?=OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor;?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?>
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN B : SUMBER KEBAHAGIAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsB as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuSumber::GroupSkor($group->id, $main_id) ?>/<?=OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor;?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?>
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN C : STRATEGI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsC as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuStrategi::GroupSkor($group->id, $main_id) ?>/<?=OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor;?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?>
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- PRODUCT LIST -->
<div class="box box-danger">
    <div class="box-header with-border">
        <h3 class="box-title">BAHAGIAN D : KESAN KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <ul class="products-list product-list-in-box">
            <?php foreach ($groupsD as $group) { ?>
                <li class="item">
                    <div class="product-img">
                        <h4><?= $skor = OkuKesan::GroupSkor($group->id, $main_id) ?>/<?=OkuScoring::find()->where(['group_id' => $group->id])->orderBy('skor DESC')->one()->skor;?></h4>
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title"><?= $group->name ?>
                            <span class="label label-warning pull-right">Skala : <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->scale; ?></span></a>
                        <p style=" display: block; color: #999; overflow: hidden;text-overflow: ellipsis;">
                            <?= OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor])->deskripsi; ?>
                        </p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

