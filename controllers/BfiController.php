<?php

namespace app\controllers;

use app\models\bfi\Demo;
use Yii;
use yii\web\Controller;
use app\models\bfi\Jadual;
use app\models\bfi\Main;
use Exception;
use yii\helpers\VarDumper;
use app\models\UtilityFunc;

/**
 * bfiController
 */
class BfiController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "Big Five Inventory-10-Malay (BFI-Malay)";

        $model = new Main();

        if (Yii::$app->request->isAjax && $model->load($_POST)) {
            Yii::$app->response->format = 'json';
            return \yii\widgets\ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post())) {

            $check_main = Main::findOne(['icno' => $model->icno]);

            if ($check_main) {
                $model = $check_main;
            }

            $session = Yii::$app->session;
            $model->create_dt = date('Y-m-d H:i:s');
            if ($model->save()) {

                $this->ifSuccess();
                $session->set('bfi_main_id', $model->id);
                return $this->redirect(['demografi']);
            }
        }

        return $this->render('index', ['model' => $model]);
    }

    public function actionDemografi()
    {
        $this->view->title = "Demografi";

        $id = \Yii::$app->session->get('bfi_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $jenis_darah =  UtilityFunc::BloodTypeList();
        $warganegara =  UtilityFunc::WargaList();
        $status_kerja =  UtilityFunc::StatusKerja();

        $department = UtilityFunc::DepartmentList();
        $country = UtilityFunc::CountryList();

        $model = new Demo();

        $check_model = Demo::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            if ($model->save()) {
                $this->ifSuccess();

                return $this->redirect(['questions']);
            }
        }

        return $this->render('demografi', [
            'model' => $model,
            'jenis_darah' => $jenis_darah,
            'department' => $department,
            'status_kerja' => $status_kerja,
            'country' => $country,
            'warganegara' => $warganegara,
        ]);
    }

    public function actionQuestions()
    {

        $id = \Yii::$app->session->get('bfi_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $model = new Jadual();
        $disabled = false;

        $check_model = Jadual::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
            $disabled = false;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['result']);
            }

            $model->main_id = $id;
            $model->create_dt = date('Y-m-d');

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
        $id = \Yii::$app->session->get('bfi_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $model = Jadual::findOne(['main_id' => $id]);

        $extraversionIndex = $model->extraversionIndex;
        $extraversionSkor = $model->extraversionSkor;

        return $this->render('result', [
            'model' => $model,
            'extraversionIndex' => $extraversionIndex,
            'extraversionSkor' => $extraversionSkor,
        ]);
    }

    public function actionViewResult($id)
    {
        
        $model = Jadual::findOne(['main_id' => $id]);

        $demo = Demo::findOne(['main_id'=>$id]);

        $extraversionIndex = $model->extraversionIndex;
        $extraversionSkor = $model->extraversionSkor;

        return $this->render('view-result', [
            'model' => $model,
            'demo' => $demo,
            'extraversionIndex' => $extraversionIndex,
            'extraversionSkor' => $extraversionSkor,
        ]);
    }

    public function actionDes()
    {

        Yii::$app->session->close();

        Yii::$app->session->remove('bfi_main_id');

        Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['bfi/index']);
    }

    protected function checkSession()
    {
        $id = \Yii::$app->session->get('bfi_main_id');

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
