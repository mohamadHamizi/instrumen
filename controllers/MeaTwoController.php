<?php

namespace app\controllers;

use app\models\MeaV2Demo;
use app\models\MeaV2Jadual1;
use app\models\MeaV2Jadual2;
use app\models\MeaV2Jadual3;
use app\models\MeaV2Jadual4;
use app\models\MeaV2Main;
use app\models\MeaResult;
use app\models\Soalan;
use Yii;
use yii\web\Controller;
use yii\helpers\VarDumper;;

/**
 * CutiController implements the CRUD actions for RekodCuti model.
 */
class MeaTwoController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "Malay Version of Emblematic Analysis (EA-Malay)";

        $model = new MeaV2Main();

        if (Yii::$app->request->isAjax && $model->load($_POST)) {
            Yii::$app->response->format = 'json';
            return \yii\widgets\ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post())) {

            $check_main = MeaV2Main::findOne(['icno' => $model->icno]);

            if ($check_main) {
                $model = $check_main;
            }

            $session = Yii::$app->session;
            $model->create_dt = date('Y-m-d H:i:s');
            $model->save();

            $session->set('mea_main_id', $model->id);
            return $this->redirect(['demografi']);
        }

        return $this->render('index', ['model' => $model]);
    }

    public function actionDemografi()
    {
        $this->view->title = "Demografi";

        $id = \Yii::$app->session->get('mea_main_id');

        if (!$id) {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila Masukkan No. Kad pengenalan',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }


        $model = new MeaV2Demo();

        $check_model = MeaV2Demo::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Maklumat telah disimpan',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);

                return $this->redirect(['jadual-1']);
            }
        }

        return $this->render('demografi', ['model' => $model]);
    }

    public function actionJadual1()
    {
        // $this->checkSession();
        $this->view->title = "JADUAL 1";

        $id = \Yii::$app->session->get('mea_main_id');

        if (!$id) {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila Masukkan No. Kad pengenalan',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }

        $soalan = Soalan::find()->where(['jadual' => 1])->all();

        $model = new MeaV2Jadual1();

        $check_model = MeaV2Jadual1::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            $model->total_anda1 = 0;
            $model->total_anda2 = 0;
            $model->total_pen_11 = 0;
            $model->total_pen_12 = 0;
            $model->total_pen_21 = 0;
            $model->total_pen_22 = 0;

            if ($model->r1_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r2_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r3_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r4_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r5_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r6_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r7_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            //penilai 1

            if ($model->r1_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r2_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }
            
            if ($model->r3_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r4_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r5_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r6_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r7_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            //penilai 1


            //penilai 2
            if ($model->r1_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r2_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r3_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r4_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r5_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r6_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r7_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            //penilai 2


            if ($model->total_anda1 > $model->total_anda2) {
                $model->pil_anda = 'E';
            } else {
                $model->pil_anda = 'I';
            }

            if ($model->total_pen_11 > $model->total_pen_12) {
                $model->pil_pen_1 = 'E';
            } else {
                $model->pil_pen_1 = 'I';
            }
            if ($model->total_pen_21 > $model->total_pen_22) {
                $model->pil_pen_2 = 'E';
            } else {
                $model->pil_pen_2 = 'I';
            }

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Maklumat telah disimpan',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);

                return $this->redirect(['jadual-2']);
            }
        }

        return $this->render('jadual-1', [
            'soalan' => $soalan,
            'model' => $model,
        ]);
    }
    public function actionJadual2()
    {
        $this->view->title = "Jadual 2";

        $soalan = Soalan::find()->where(['jadual' => 2])->all();
        $model = new MeaV2Jadual2();

        $id = \Yii::$app->session->get('mea_main_id');

        if (!$id) {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila Masukkan No. Kad pengenalan',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }

        $check_model = MeaV2Jadual2::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            $model->total_anda1 = 0;
            $model->total_anda2 = 0;
            $model->total_pen_11 = 0;
            $model->total_pen_12 = 0;
            $model->total_pen_21 = 0;
            $model->total_pen_22 = 0;

            if ($model->r1_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r2_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r3_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r4_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r5_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r6_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r7_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            //penilai 1

            if ($model->r1_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r2_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }
            
            if ($model->r3_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r4_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r5_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r6_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r7_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            //penilai 1


            //penilai 2
            if ($model->r1_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r2_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r3_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r4_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r5_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r6_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r7_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            //penilai 2


            if ($model->total_anda1 > $model->total_anda2) {
                $model->pil_anda = 'S';
            } else {
                $model->pil_anda = 'N';
            }

            if ($model->total_pen_11 > $model->total_pen_12) {
                $model->pil_pen_1 = 'S';
            } else {
                $model->pil_pen_1 = 'N';
            }
            if ($model->total_pen_21 > $model->total_pen_22) {
                $model->pil_pen_2 = 'S';
            } else {
                $model->pil_pen_2 = 'N';
            }

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Maklumat telah disimpan',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);

                return $this->redirect(['jadual-3']);
            }
        }

        return $this->render('jadual-2', [
            'soalan' => $soalan,
            'model' => $model,
        ]);
    }
    public function actionJadual3()
    {
        $this->view->title = "Jadual 3";

        $soalan = Soalan::find()->where(['jadual' => 3])->all();
        $model = new MeaV2Jadual3();

        $id = \Yii::$app->session->get('mea_main_id');

        if (!$id) {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila Masukkan No. Kad pengenalan',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }

        $check_model = MeaV2Jadual3::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            $model->total_anda1 = 0;
            $model->total_anda2 = 0;
            $model->total_pen_11 = 0;
            $model->total_pen_12 = 0;
            $model->total_pen_21 = 0;
            $model->total_pen_22 = 0;

            if ($model->r1_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r2_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r3_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r4_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r5_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r6_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r7_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            //penilai 1

            if ($model->r1_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r2_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }
            
            if ($model->r3_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r4_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r5_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r6_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r7_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            //penilai 1


            //penilai 2
            if ($model->r1_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r2_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r3_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r4_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r5_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r6_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r7_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            //penilai 2


            if ($model->total_anda1 > $model->total_anda2) {
                $model->pil_anda = 'T';
            } else {
                $model->pil_anda = 'F';
            }

            if ($model->total_pen_11 > $model->total_pen_12) {
                $model->pil_pen_1 = 'T';
            } else {
                $model->pil_pen_1 = 'F';
            }
            if ($model->total_pen_21 > $model->total_pen_22) {
                $model->pil_pen_2 = 'T';
            } else {
                $model->pil_pen_2 = 'F';
            }

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Maklumat telah disimpan',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);

                return $this->redirect(['jadual-4']);
            }
        }

        return $this->render('jadual-3', [
            'soalan' => $soalan,
            'model' => $model,
        ]);
    }
    public function actionJadual4()
    {
        $this->view->title = "Jadual 4";

        $soalan = Soalan::find()->where(['jadual' => 4])->all();
        $model = new MeaV2Jadual4();

        $id = \Yii::$app->session->get('mea_main_id');

        if (!$id) {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila Masukkan No. Kad pengenalan',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }

        $check_model = MeaV2Jadual4::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            $model->total_anda1 = 0;
            $model->total_anda2 = 0;
            $model->total_pen_11 = 0;
            $model->total_pen_12 = 0;
            $model->total_pen_21 = 0;
            $model->total_pen_22 = 0;

            if ($model->r1_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r2_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r3_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r4_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r5_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r6_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            if ($model->r7_anda == 1) {
                $model->total_anda1++;
            } else {
                $model->total_anda2++;
            }

            //penilai 1

            if ($model->r1_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r2_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }
            
            if ($model->r3_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r4_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r5_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r6_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            if ($model->r7_pen_1 == 1) {
                $model->total_pen_11++;
            } else {
                $model->total_pen_12++;
            }

            //penilai 1


            //penilai 2
            if ($model->r1_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r2_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r3_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r4_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r5_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r6_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            if ($model->r7_pen_2 == 1) {
                $model->total_pen_21++;
            } else {
                $model->total_pen_22++;
            }
            //penilai 2


            if ($model->total_anda1 > $model->total_anda2) {
                $model->pil_anda = 'J';
            } else {
                $model->pil_anda = 'P';
            }

            if ($model->total_pen_11 > $model->total_pen_12) {
                $model->pil_pen_1 = 'J';
            } else {
                $model->pil_pen_1 = 'P';
            }
            if ($model->total_pen_21 > $model->total_pen_22) {
                $model->pil_pen_2 = 'J';
            } else {
                $model->pil_pen_2 = 'P';
            }

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Maklumat telah disimpan',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);

                return $this->redirect(['skor']);
            }
        }

        return $this->render('jadual-4', [
            'soalan' => $soalan,
            'model' => $model,
        ]);
    }

    public function actionSkor()
    {

        $this->view->title = "Keputusan";

        $id = \Yii::$app->session->get('mea_main_id');

        if (!$id) {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila Masukkan No. Kad pengenalan',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }

        $model = MeaV2Main::findOne(['id' => $id]);

        $anda = MeaResult::tret($model->jadual1->pil_anda, $model->jadual2->pil_anda, $model->jadual3->pil_anda, $model->jadual4->pil_anda);
        $pen_1 = MeaResult::tret($model->jadual1->pil_pen_1, $model->jadual2->pil_pen_1, $model->jadual3->pil_pen_1, $model->jadual4->pil_pen_1);
        $pen_2 = MeaResult::tret($model->jadual1->pil_pen_2, $model->jadual2->pil_pen_2, $model->jadual3->pil_pen_2, $model->jadual4->pil_pen_2);

        return $this->render('skor', [
            'model' => $model,
            'anda' => $anda,
            'pen_1' => $pen_1,
            'pen_2' => $pen_2,
        ]);
    }

    public function actionDes()
    {

        Yii::$app->session->close();

        Yii::$app->session->remove('mea_main_id');

        Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['mea/index']);
    }

    protected function checkSession()
    {
        $id = \Yii::$app->session->get('mea_main_id');

        if (!$id) {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila Masukkan No. Kad pengenalan',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }
    }
}
