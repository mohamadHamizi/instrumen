<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\TipiJadual;

/**
 * TipiController
 */
class TipiController extends Controller
{

    public function actionIndex()
    {
        return null;
    }

    public function actionDemografi()
    {
        return null;
    }

    public function actionQuestions()
    {
        $model = new TipiJadual();

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = 1;
            $model->create_dt = date('Y-m-d');

            if ($model->save()) {
                return $this->redirect(['result', 'id'=> $model->id]);
            }
        }

        return $this->render('questions', [
            'model' => $model,
            'model1' => $model,
        ]);
    }

    public function actionResult($id)
    {
        $model = TipiJadual::findOne($id);

        return $this->render('result', [
            'model' => $model,
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
}
