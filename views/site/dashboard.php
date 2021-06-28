<?php

use yii\helpers\Html;
?>



<!-- /.col -->
<div class="col-md-12 col-xs-12 col-lg-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Laman Utama</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <p>What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            <p>Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


            <p>Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

<div class="col-md-12 col-xs-12 col-lg-12">
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Senarai Instrumen</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>

        <div class="box-body">

            <div class="col-md-4">
                <div class="box box-primary box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-wheelchair">&nbsp;</i>KK-OKU</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                        <p>KebahagiaanKu-OKU/MyHappiness-PwD</p>
                        <?= Html::a('Jawab Soal Selidik <i class="fa fa-arrow-circle-right"></i>', ['tipi/index'], ['class' => 'small-box-footer']) ?>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-4">
                <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-line-chart">&nbsp;</i>EA-MALAY</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                        <p>Malay Version of Emblematic Analysis</p>
                        <?= Html::a('Jawab Soal Selidik <i class="fa fa-arrow-circle-right"></i>', ['mea/index'], ['class' => 'small-box-footer']) ?>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-4">
                <div class="box box-default box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-bar-chart">&nbsp;</i>EA-MALAY (v2)</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                        <p>Malay Version of Emblematic Analysis Version 2</p>
                        <?= Html::a('Jawab Soal Selidik <i class="fa fa-arrow-circle-right"></i>', ['mea-two/index'], ['class' => 'small-box-footer']) ?>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-4">
                <div class="box box-danger box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-bar-chart">&nbsp;</i>TIPI-MALAY</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                        <p>Ten-Item Personality Inventory-Malay (TIPI-Malay)</p>
                        <?= Html::a('Jawab Soal Selidik <i class="fa fa-arrow-circle-right"></i>', ['tipi/index'], ['class' => 'small-box-footer']) ?>
                    </div>
                    <!-- /.box-body -->

                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</div>