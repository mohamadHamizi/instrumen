<?php

namespace app\controllers;

use app\models\TipiDemo;
use Yii;
use yii\web\Controller;
use app\models\TipiJadual;
use app\models\TipiMain;
use Exception;
use yii\helpers\VarDumper;

/**
 * TipiController
 */
class TipiController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "Ten-Item Personality Inventory-Malay (TIPI-Malay)";

        $model = new TipiMain();

        if (Yii::$app->request->isAjax && $model->load($_POST)) {
            Yii::$app->response->format = 'json';
            return \yii\widgets\ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post())) {

            $check_main = TipiMain::findOne(['icno' => $model->icno]);

            if ($check_main) {
                $model = $check_main;
            }

            $session = Yii::$app->session;
            $model->create_dt = date('Y-m-d H:i:s');
            if ($model->save()) {

                $this->ifSuccess();
                $session->set('tipi_main_id', $model->id);
                return $this->redirect(['demografi']);
            }
        }

        return $this->render('index', ['model' => $model]);
    }

    public function actionDemografi()
    {
        $this->view->title = "Demografi";

        $id = \Yii::$app->session->get('tipi_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $jenis_darah =  [
            'A+' => 'A+',
            'A-' => 'A-',
            'B+' => 'B+',
            'B-' => 'B-',
            'AB+' => 'AB+',
            'AB-' => 'AB-',
            'O+' => 'O+',
            'O-' => 'O-',
            'x' => 'Tidak Tahu',
        ];

        $department = $this->DepartmentList();

        $model = new TipiDemo();

        $check_model = TipiDemo::findOne(['main_id' => $id]);

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

        return $this->render('demografi', ['model' => $model, 'jenis_darah' => $jenis_darah, 'department'=>$department]);
    }

    public function actionQuestions()
    {

        $id = \Yii::$app->session->get('tipi_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $model = new TipiJadual();

        $check_model = TipiJadual::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

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
        ]);
    }

    public function actionResult()
    {
        $id = \Yii::$app->session->get('tipi_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $model = TipiJadual::findOne(['main_id' => $id]);

        $extraversionIndex = $model->extraversionIndex;
        $extraversionSkor = $model->extraversionSkor;

        return $this->render('result', [
            'model' => $model,
            'extraversionIndex' => $extraversionIndex,
            'extraversionSkor' => $extraversionSkor,
        ]);
    }

    public function actionDes()
    {

        Yii::$app->session->close();

        Yii::$app->session->remove('tipi_main_id');

        Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['tipi/index']);
    }

    protected function checkSession()
    {
        $id = \Yii::$app->session->get('tipi_main_id');

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

    public function DepartmentList()
    {

        $api_url = 'https://registrar.ums.edu.my/staff/web/api/staff/dept-list';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        return $response_data;
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
