<?php

use app\models\bfi\Jadual;

?>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><i class="fa fa-fa-user-secret"></i>&nbsp;<strong>Keputusan Anda</strong></h3>
    </div>
    <div class="box-body">
        <table class="table table-primary table-striped table-bordered">
            <thead class="thead-light">
                <tr>
                    <th class='text-center'>Dimensi</th>
                    <th width='40%' class='text-center'>Indeks</th>
                    <th class='text-center'>Skor</th>
                    <th class='text-center'>Purata</th>
                    <th class='text-center'>Tahap</th>
                    <th class='text-center'>Rank</th>
                </tr>
            </thead>
            <tr>
                <td>Extraversion</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-aqua" style="width: <?= $extraversionIndex ?>%"></div>
                    </div>
                    <?= $extraversionIndex ?>%
                </td>
                <td class='text-center'><?= $extraversionSkor ?></td>
                <td class='text-center'><?= $model->extraversionPurata ?></td>
                <td class='text-center'><?= $model->extraversionTahap ?></td>
                <td class='text-center'><?= Jadual::rank($model->skorArray, $extraversionSkor) ?></td>
            </tr>
            <tr>
                <td>Agreeableness</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-red" style="width: <?= $model->agreeablenessIndex ?>%"></div>
                    </div>
                    <?= $model->agreeablenessIndex ?>%
                </td>
                <td class='text-center'><?= $model->AgreeablenessSkor ?></td>
                <td class='text-center'><?= $model->AgreeablenessPurata ?></td>
                <td class='text-center'><?= $model->AgreeablenessTahap ?></td>
                <td class='text-center'><?= Jadual::rank($model->skorArray, $model->AgreeablenessSkor) ?></td>
            </tr>
            <tr>
                <td>Conscientiousness</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-green" style="width: <?= $model->conscientiousnessIndex ?>%"></div>
                    </div>
                    <?= $model->conscientiousnessIndex ?>%
                </td>
                <td class='text-center'><?= $model->conscientiousnessSkor ?></td>
                <td class='text-center'><?= $model->conscientiousnessPurata ?></td>
                <td class='text-center'><?= $model->conscientiousnessTahap ?></td>
                <td class='text-center'><?= Jadual::rank($model->skorArray, $model->conscientiousnessSkor) ?></td>
            </tr>

            <tr>
                <td>Emotional Stability</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-yellow" style="width: <?= $model->emotionalIndex ?>%"></div>
                    </div>
                    <?= $model->emotionalIndex ?>%
                </td>
                <td class='text-center'><?= $model->emotionalSkor ?></td>
                <td class='text-center'><?= $model->emotionalPurata ?></td>
                <td class='text-center'><?= $model->emotionalTahap ?></td>
                <td class='text-center'><?= Jadual::rank($model->skorArray, $model->emotionalSkor) ?></td>
            </tr>
            <tr>
                <td>Openness to Experiences</td>
                <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar" style="width: <?= $model->opennessIndex ?>%"></div>
                    </div>
                    <?= $model->opennessIndex ?>%
                </td>
                <td class='text-center'><?= $model->opennessSkor ?></td>
                <td class='text-center'><?= $model->opennessPurata ?></td>
                <td class='text-center'><?= $model->opennessTahap ?></td>
                <td class='text-center'><?= Jadual::rank($model->skorArray, $model->opennessSkor) ?></td>
            </tr>


        </table>


    </div>
</div>
