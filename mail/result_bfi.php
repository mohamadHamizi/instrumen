<?php

use app\models\bfi\Jadual;
use yii\helpers\Html;
use yii\helpers\Url;

?>


<table width="100%" height="100%" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr>
            <td width="100%" align="center" valign="top" bgcolor="#E4E6E9" style="background-color:#E4E6E9; min-height: 200px;">
                <table>
                    <tbody>
                        <tr>
                            <td class="table-td-wrap" align="center" width="650" style="background-color:#ffffff;" bgcolor="#FFFFFF">
                                <table class="table-space" height="18" style="height: 18px; font-size: 0px; line-height: 0; width: 650px; background-color: #e4e6e9;" width="650" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td class="table-space-td" valign="middle" height="18" style="height: 18px; width: 650px; background-color: #e4e6e9;" width="650" bgcolor="#E4E6E9" align="left">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table-space" height="8" style="height: 8px; font-size: 0px; line-height: 0; width: 650px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                        <tr>
                                            <td class="table-space-td" valign="middle" height="8" style="height: 8px; width: 650px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="left">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="header-row" width="650" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;background-color: #ffffff;" bgcolor="#FFFFFF">
                                    <tbody>
                                        <tr>
                                            <td class="header-row-td" width="600" style="background-color: #ffffff;font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" valign="top" align="center"><?= $header1 ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;background-color: #ffffff;">
                                    <b style="color: #777777;background-color: #ffffff;">Berikut adalah keputusan BFI anda:</b>
                                    <!-- <br> Please confirm your registration to continue -->
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 650px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 650px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="left">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <table width="650" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <th class='text-center' bgcolor="#ffffff" style="background-color:#ffffff;">Dimensi</th>
                        <th class='text-center' bgcolor="#ffffff" style="background-color:#ffffff;">Skor</th>
                        <th class='text-center' bgcolor="#ffffff" style="background-color:#ffffff;">Purata</th>
                        <th class='text-center' bgcolor="#ffffff" style="background-color:#ffffff;">Tahap</th>
                        <th class='text-center' bgcolor="#ffffff" style="background-color:#ffffff;">Rank</th>
                    </tr>
                    <tr>
                        <td class="table-space-td" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF">Extraversion</td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $extraversionSkor ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->extraversionPurata ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->extraversionTahap ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= Jadual::rank($model->skorArray, $extraversionSkor) ?></td>
                    </tr>
                    <tr>
                        <td class="table-space-td" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF">Agreeableness</td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->AgreeablenessSkor ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->AgreeablenessPurata ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->AgreeablenessTahap ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= Jadual::rank($model->skorArray, $model->AgreeablenessSkor) ?></td>
                    </tr>
                    <tr>
                        <td class="table-space-td" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF">Conscientiousness</td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->conscientiousnessSkor ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->conscientiousnessPurata ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->conscientiousnessTahap ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= Jadual::rank($model->skorArray, $model->conscientiousnessSkor) ?></td>
                    </tr>
                    <tr>
                        <td class="table-space-td" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF">Emotional Stability</td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->emotionalSkor ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->emotionalPurata ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->emotionalTahap ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= Jadual::rank($model->skorArray, $model->emotionalSkor) ?></td>
                    </tr>
                    <tr>
                        <td class="table-space-td" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF">Openness to Experiences</td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->opennessSkor ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->opennessPurata ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= $model->opennessTahap ?></td>
                        <td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 650px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="center"><?= Jadual::rank($model->skorArray, $model->opennessSkor) ?></td>
                    </tr>
                </table>
                <table class="table-row" width="650" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff; padding-top:30px" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
                                <table class="table-col" align="left" width="378" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
                                    <tbody>
                                        <tr>
                                            <td class="table-col-td" width="600" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;" valign="top" align="left">
                                                <div style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; text-align: center;">
                                                    <?= Html::a('<i class="fa fa-bar-chart"></i>&nbsp;Lihat Keputusan Anda', Url::toRoute(['bfi/keputusan', 'id' => $id], 'https'), ['style' => 'color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; border: 4px solid #6fb3e0; padding: 4px 9px; font-size: 15px; line-height: 21px; background-color: #6fb3e0;']); ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 650px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 650px; background-color: #ffffff;" width="650" bgcolor="#FFFFFF" align="left">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-row-fixed" width="600" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                        <tr>
                            <td class="table-row-fixed-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;" valign="top" align="left">
                                <table class="table-col" align="left" width="" c650ellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
                                    <tbody>
                                        <tr>
                                            <td class="table-col-td" width="643" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
                                                <table width="100%" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
                                                    <tbody>
                                                        <tr>
                                                            <td width="100%" align="center" bgcolor="#f5f5f5" style="font-family: Arial, sans-serif; line-height: 24px; color: #bbbbbb; font-size: 13px; font-weight: normal; text-align: center; padding: 9px; border-width: 1px 0px 0px; border-style: solid; border-color: #e3e3e3; background-color: #f5f5f5;" valign="top">
                                                                <a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;">MISI &copy; 2019 - <?= date('Y') ?> All Rights Reserved.</a>
                                                                <br>
                                                                <!-- <a href="#" style="color: #478fca; text-decoration: none; background-color: transparent;">twitter</a> . -->
                                                                <a href="https://uppsiks.ums.edu.my/instrumen/web/site/contact" style="color: #5b7a91; text-decoration: none; background-color: transparent;">Profesor Madya Dr. Muhammad Idris Bin Bullare @ Hj. Bahari</a> .
                                                                <!-- <a href="#" style="color: #dd5a43; text-decoration: none; background-color: transparent;">google+</a> -->
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>