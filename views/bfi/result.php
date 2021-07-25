<?php

use app\models\bfi\Jadual;
use yii\helpers\Html;

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

<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-th-large"></i>&nbsp;<strong>Keputusan Anda</strong></h3>
                <div class="box-body">
                    <p>
                        This assessment examined the <strong>Big Five Personality Dimension</strong>, which are (1) extraversion, (2) agreeableness, (3) conscientiousness,
                        (4) neuroticism, and (5) openness, Let's check out your scores.
                    </p>
                    <br>
                    <div class="progress-group">
                        <span class="progress-text">Extraversion</span>
                        <span class="progress-number"><b>Introversion</b></span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-aqua" style="width: <?= $extraversionIndex ?>%"><?= $extraversionIndex ?>% - <?= $model->extraversionTahap ?></div>
                        </div>
                    </div>

                    <div class="progress-group">
                        <span class="progress-text">Agreeableness</span>
                        <span class="progress-number"><b>Hostile</b></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-red" style="width: <?= $model->agreeablenessIndex ?>%"><?= $model->agreeablenessIndex ?>% - <?= $model->agreeablenessTahap ?></div>
                        </div>
                    </div>

                    <div class="progress-group">
                        <span class="progress-text">Conscientiousness</span>
                        <span class="progress-number"><b>Spontaneous</b></span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-green" style="width: <?= $model->conscientiousnessIndex ?>%"><?= $model->conscientiousnessIndex ?>% - <?= $model->conscientiousnessTahap ?></div>
                        </div>
                    </div>

                    <div class="progress-group">
                        <span class="progress-text">Emotional Stability</span>
                        <span class="progress-number"><b>Neurotic</b></span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-yellow" style="width: <?= $model->emotionalIndex ?>%"><?= $model->emotionalIndex ?>% - <?= $model->emotionalTahap ?></div>
                        </div>
                    </div>

                    <div class="progress-group">
                        <span class="progress-text">Openness to Experiences</span>
                        <span class="progress-number"><b>Closed</b></span>

                        <div class="progress">
                            <div class="progress-bar" style="width: <?= $model->opennessIndex ?>%"><?= $model->opennessIndex ?>% - <?= $model->opennessTahap ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-center">
    <?= Html::a('<i class="fa fa-check"></i>&nbsp;Tamat Sesi / Jawab Semula', ['/bfi/des'], ['class' => 'btn btn-danger']); ?>
</div>