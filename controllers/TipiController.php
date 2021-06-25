<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

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

        return $this->render('questions', [
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
