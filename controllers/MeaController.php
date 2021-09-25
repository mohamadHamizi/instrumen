<?php

namespace app\controllers;

use app\models\MeaDemo;
use app\models\MeaJadual1;
use app\models\MeaJadual2;
use app\models\MeaJadual3;
use app\models\MeaJadual4;
use app\models\MeaMain;
use app\models\MeaResult;
use app\models\Soalan;
use app\models\UtilityFunc;
use Yii;
use yii\web\Controller;
use yii\helpers\VarDumper;

/**
 * CutiController implements the CRUD actions for RekodCuti model.
 */
class MeaController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "Malay Version of Emblematic Analysis (EA-Malay)";

        $model = new MeaMain();

        if (Yii::$app->request->isAjax && $model->load($_POST)) {
            Yii::$app->response->format = 'json';
            return \yii\widgets\ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post())) {

            $check_main = MeaMain::findOne(['icno' => $model->icno]);

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
        $department = UtilityFunc::DepartmentList();
        $jenis_darah =  UtilityFunc::BloodTypeList();

        if (!$id) {

            UtilityFunc::ifError("Sila Masukkan No. Kad pengenalan");
            return $this->redirect(['index']);
        }

        $model = new MeaDemo();

        $check_model = MeaDemo::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        $main = MeaMain::findOne($id);
        $var = UtilityFunc::myKad($main->icno);

        $model->tarikh_lahir = $var['tarikh_lahir'];
        $model->umur = $var['umur'];

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            if ($model->save()) {
                UtilityFunc::ifSuccess("Maklumat telah disimpan");
                return $this->redirect(['jadual-1']);
            }
        }

        return $this->render('demografi', [
            'model' => $model,
            'department' => $department,
            'jenis_darah' => $jenis_darah,
        ]);
    }

    public function actionJadual1()
    {
        $this->view->title = "JADUAL 1";

        $id = \Yii::$app->session->get('mea_main_id');


        if (!$id) {
            UtilityFunc::ifError('Sila Masukkan No. Kad pengenalan');
            return $this->redirect(['index']);
        }

        $soalan = Soalan::find()->where(['jadual' => 1])->all();

        $model = new MeaJadual1();
        $disabled = MeaMain::checkComplete($id);
        $check_model = MeaJadual1::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            $model->total_anda1 = 0;
            $model->total_anda2 = 0;
            $model->total_bos1 = 0;
            $model->total_bos2 = 0;

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

            if ($model->r1_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r2_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r3_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r4_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r5_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r6_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r7_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }


            if ($model->total_anda1 > $model->total_anda2) {
                $model->pil_anda = 'E';
            } else {
                $model->pil_anda = 'I';
            }

            if ($model->total_bos1 > $model->total_bos2) {
                $model->pil_bos = 'E';
            } else {
                $model->pil_bos = 'I';
            }

            if ($model->save()) {
                UtilityFunc::ifSuccess('Maklumat telah disimpan');

                return $this->redirect(['jadual-2']);
            }
        }

        return $this->render('jadual-1', [
            'soalan' => $soalan,
            'model' => $model,
            'disabled' => $disabled,
        ]);
    }
    public function actionJadual2()
    {
        $this->view->title = "Jadual 2";

        $soalan = Soalan::find()->where(['jadual' => 2])->all();
        $model = new MeaJadual2();

        $id = \Yii::$app->session->get('mea_main_id');
        $disabled = MeaMain::checkComplete($id);

        if (!$id) {
            UtilityFunc::ifError('Sila Masukkan No. Kad pengenalan');
            return $this->redirect(['index']);
        }

        $check_model = MeaJadual2::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            $model->total_anda1 = 0;
            $model->total_anda2 = 0;
            $model->total_bos1 = 0;
            $model->total_bos2 = 0;

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

            if ($model->r1_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r2_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r3_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r4_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r5_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r6_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r7_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }


            if ($model->total_anda1 > $model->total_anda2) {
                $model->pil_anda = 'S';
            } else {
                $model->pil_anda = 'N';
            }

            if ($model->total_bos1 > $model->total_bos2) {
                $model->pil_bos = 'S';
            } else {
                $model->pil_bos = 'N';
            }

            if ($model->save()) {
                UtilityFunc::ifSuccess('Maklumat telah disimpan');
                return $this->redirect(['jadual-3']);
            }
        }

        return $this->render('jadual-2', [
            'soalan' => $soalan,
            'model' => $model,
            'disabled' => $disabled,
        ]);
    }

    public function actionJadual3()
    {
        $this->view->title = "Jadual 3";

        $soalan = Soalan::find()->where(['jadual' => 3])->all();
        $model = new MeaJadual3();

        $id = \Yii::$app->session->get('mea_main_id');
        $disabled = MeaMain::checkComplete($id);

        if (!$id) {
            UtilityFunc::ifError('Sila Masukkan No. Kad pengenalan');
            return $this->redirect(['index']);
        }

        $check_model = MeaJadual3::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {
            $model->main_id = $id;

            $model->total_anda1 = 0;
            $model->total_anda2 = 0;
            $model->total_bos1 = 0;
            $model->total_bos2 = 0;

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

            if ($model->r1_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r2_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r3_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r4_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r5_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r6_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r7_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }


            if ($model->total_anda1 > $model->total_anda2) {
                $model->pil_anda = 'T';
            } else {
                $model->pil_anda = 'F';
            }

            if ($model->total_bos1 > $model->total_bos2) {
                $model->pil_bos = 'T';
            } else {
                $model->pil_bos = 'F';
            }

            if ($model->save()) {
                UtilityFunc::ifSuccess('Maklumat telah disimpan');
                return $this->redirect(['jadual-4']);
            }
        }

        return $this->render('jadual-3', [
            'soalan' => $soalan,
            'model' => $model,
            'disabled' => $disabled,
        ]);
    }
    public function actionJadual4()
    {
        $this->view->title = "Jadual 4";

        $soalan = Soalan::find()->where(['jadual' => 4])->all();
        $model = new MeaJadual4();

        $id = \Yii::$app->session->get('mea_main_id');
        $disabled = MeaMain::checkComplete($id);

        if (!$id) {
            UtilityFunc::ifError('Sila Masukkan No. Kad pengenalan');
            return $this->redirect(['index']);
        }

        $check_model = MeaJadual4::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            $model->total_anda1 = 0;
            $model->total_anda2 = 0;
            $model->total_bos1 = 0;
            $model->total_bos2 = 0;

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

            if ($model->r1_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r2_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r3_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r4_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r5_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r6_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }

            if ($model->r7_bos == 1) {
                $model->total_bos1++;
            } else {
                $model->total_bos2++;
            }


            if ($model->total_anda1 > $model->total_anda2) {
                $model->pil_anda = 'J';
            } else {
                $model->pil_anda = 'P';
            }

            if ($model->total_bos1 > $model->total_bos2) {
                $model->pil_bos = 'J';
            } else {
                $model->pil_bos = 'P';
            }

            if ($model->save()) {
                UtilityFunc::ifSuccess('Maklumat telah disimpan');
                return $this->redirect(['skor']);
            }
        }

        return $this->render('jadual-4', [
            'soalan' => $soalan,
            'model' => $model,
            'disabled' => $disabled,
        ]);
    }

    public function actionSkor()
    {

        $this->view->title = "Keputusan";

        $id = \Yii::$app->session->get('mea_main_id');

        if (!$id) {
            UtilityFunc::ifSuccess('Sila Masukkan No. Kad pengenalan');

            return $this->redirect(['index']);
        }

        $model = MeaMain::findOne(['id' => $id]);

        if ($model->completed == 0) {
            $model->completed = 1;
            $model->completed_dt = date('Y-m-d H:i:s');
            $model->save();
        }

        $anda = MeaResult::tret($model->jadual1->pil_anda, $model->jadual2->pil_anda, $model->jadual3->pil_anda, $model->jadual4->pil_anda);
        $bos = MeaResult::tret($model->jadual1->pil_bos, $model->jadual2->pil_bos, $model->jadual3->pil_bos, $model->jadual4->pil_bos);

        return $this->render('skor', [
            'model' => $model,
            'anda' => $anda,
            'bos' => $bos,
        ]);
    }

    public function actionViewResult($id)
    {

        $this->view->title = "Keputusan";

        $model = MeaMain::findOne(['id' => $id]);
        $demo = MeaDemo::findOne(['main_id' => $id]);

        $anda = MeaResult::tret($model->jadual1->pil_anda, $model->jadual2->pil_anda, $model->jadual3->pil_anda, $model->jadual4->pil_anda);
        $bos = MeaResult::tret($model->jadual1->pil_bos, $model->jadual2->pil_bos, $model->jadual3->pil_bos, $model->jadual4->pil_bos);

        return $this->render('view-result', [
            'model' => $model,
            'anda' => $anda,
            'bos' => $bos,
            'demo' => $demo,
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
            UtilityFunc::ifError('Sila Masukkan No. Kad pengenalan');
            return $this->redirect(['index']);
        }
    }
}
