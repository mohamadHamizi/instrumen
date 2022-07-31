<?php

namespace app\controllers;

use app\models\sdts\Main;
use Yii;
use yii\web\Controller;
use app\models\bfi\Jadual;
use app\models\sdts\Dimensi;
use app\models\sdts\Items;
use app\models\sdts\Questions;
use app\models\UtilityFunc;

/**
 * bfiController
 */
class SdtsController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "Skala Daya Tindak Stres-Pelajar Universiti (SDTS-PU)";

        return $this->render('index', []);
    }

    public function actionDemografi()
    {
        $this->view->title = "Maklumat Pelajar";

        $tahapPengajian =  UtilityFunc::TahapPengajian();
        $modPengajian =  UtilityFunc::modPengajian();
        $statusTempatTinggal =  UtilityFunc::StatusTempatTinggal();
        $jenis_darah =  UtilityFunc::BloodTypeList();

        $model = new Main();

        if ($model->load(Yii::$app->request->post())) {

            $model->create_dt = date('Y-m-d H:i:s');


            if ($model->save()) {
                $this->ifSuccess();
                $session = Yii::$app->session;
                $session->set('sdts_main_id', $model->id);

                return $this->redirect(['questions']);
            }
        }

        return $this->render('demografi', [
            'model' => $model,
            'tahapPengajian' => $tahapPengajian,
            'modPengajian' => $modPengajian,
            'statusTempatTinggal' => $statusTempatTinggal,
            'jenis_darah' => $jenis_darah,
        ]);
    }

    public function actionQuestions()
    {

        $id = \Yii::$app->session->get('sdts_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }


        $model = new Items();
        $disabled = false;

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['result']);
            }

            $model->main_id = $id;

            $main = main::findOne($id);
            $main->status = 1;
            $main->save();



            if ($model->save()) {
                $this->ifSuccess();
                return $this->redirect(['result']);
            }
        }

        return $this->render('questions', [
            'model' => $model,
            'model1' => $model,
            'disabled' => $disabled,
        ]);
    }

    public function actionResult()
    {
        $id = \Yii::$app->session->get('sdts_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $model = Main::findOne($id);

        $dimensi = Dimensi::findOne($id);

        if (!$dimensi) {
            $dimensi = new Dimensi();
            $dimensi->main_id = $id;
            $dimensi->agama = $model->getAgama();
            $dimensi->masalah = $model->masalah;
            $dimensi->interaksi = $model->interaksi;
            $dimensi->produktif = $model->produktif;
            $dimensi->rakan = $model->rakan;
            $dimensi->save();
        }

        return $this->render('result', [
            'model' => $model,
            'id' => $id,
            'bil' => 1,
            'data' => $model->resultItemIndividu(),
            'arrQuestions' => Questions::findQuestion(),
        ]);
    }

    public function actionViewResult($id)
    {

        $model = Main::findOne($id);

        return $this->render('view-result', [
            'model' => $model,
            'id' => $id,
            'bil' => 1,
            'data' => $model->resultItemIndividu(),
            'arrQuestions' => Questions::findQuestion(),
            'back' => true,
        ]);
    }



    public function actionDes()
    {

        Yii::$app->session->close();

        Yii::$app->session->remove('sdts_main_id');

        Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['sdts/index']);
    }

    protected function checkSession()
    {
        $id = \Yii::$app->session->get('sdts_main_id');

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


    protected function ifError()
    {
        return Yii::$app->getSession()->setFlash('danger', [
            'type' => 'danger',
            'duration' => 5000,
            'icon' => 'fa fa-exclamation',
            'message' => 'Sila isi masukkan No. Kad Pengenalan',
            'title' => 'Tidak Berjaya',
            'positonY' => 'top',
            'positonX' => 'right'
        ]);
    }

    protected function ifSuccess()
    {
        return Yii::$app->getSession()->setFlash('success', [
            'type' => 'success',
            'duration' => 5000,
            'icon' => 'fa fa-check',
            'message' => 'Maklumat telah disimpan',
            'title' => 'Berjaya',
            'positonY' => 'top',
            'positonX' => 'right'
        ]);
    }
}
