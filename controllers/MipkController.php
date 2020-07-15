<?php

namespace app\controllers;

use app\models\MipkDemografi;
use app\models\MipkPengetahuan;
use Yii;
use app\models\RekodCuti;
use app\models\RekodCutiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Users;
use yii\filters\AccessControl;
use app\models\OkuQuestions;
use app\models\OkuRespons;
use yii\base\Model;
use app\models\OkuSumber;
use yii\data\ActiveDataProvider;
use app\models\OkuGroups;
use app\models\OkuDimensi;
use app\models\OkuStrategi;
use app\models\OkuKesan;
use app\models\OkuMain;
use yii\web\Session;
use app\models\OkuDemografi;
use app\models\OkuScoring;
use app\models\OkuTotals;
use app\models\OkuIndeks;

/**
 * CutiController implements the CRUD actions for RekodCuti model.
 */
class MipkController extends Controller
{


    public function actionIndex()
    {

        return $this->render('index', []);
    }

    public function actionBahagianA()
    {

        $this->view->title = "PROFIL PESERTA";

        $model = new MipkDemografi();

        if ($model->load(Yii::$app->request->post())) {

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
                return $this->redirect(['bahagian-b', 'id'=>$model->id]);
            }
        }

        return $this->render('bahagian-a', [
            'model' => $model,
        ]);
    }

    public function actionBahagianB($id)
    {

        $this->view->title = "BAHAGIAN B: PENGETAHUAN MENGENAI PERKAHWINAN KANAK-KANAK";

        $model = new MipkPengetahuan();

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;
            $model->item1 = MipkPengetahuan::getItemSkor(1, $model->item1);
            $model->item2 = MipkPengetahuan::getItemSkor(2, $model->item2);
            $model->item3 = MipkPengetahuan::getItemSkor(3, $model->item3);
            $model->item4 = MipkPengetahuan::getItemSkor(4, $model->item4);
            $model->item5 = MipkPengetahuan::getItemSkor(5, $model->item5);
            $model->item6 = MipkPengetahuan::getItemSkor(6, $model->item6);
            $model->item7 = MipkPengetahuan::getItemSkor(7, $model->item7);
            $model->item8 = MipkPengetahuan::getItemSkor(8, $model->item8);
            $model->item9 = MipkPengetahuan::getItemSkor(9, $model->item9);
            $model->item10 = MipkPengetahuan::getItemSkor(10, $model->item10);
            $model->item11 = MipkPengetahuan::getItemSkor(11, $model->item11);
            $model->item12 = MipkPengetahuan::getItemSkor(12, $model->item12);

            $model->skor = $model->item1 + $model->item2 + $model->item3 + $model->item4 + $model->item5 + $model->item6 + $model->item7 + $model->item8 + $model->item9 + $model->item10 + $model->item11 + $model->item12;

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
                return $this->redirect(['result','id'=>$id]);
            }
        }

        return $this->render('bahagian-b', [
            'model' => $model,
            'model1' => $model,
        ]);
    }


    public function actionResult($id)
    {
        $interpretasi = '';

        $model = MipkPengetahuan::findOne(['main_id' => $id]);

        $skor = $model->skor;

        if($skor <= 4){
            $interpretasi = 'Pengetahuan anda mengenai perkahwinan kanak-kanak adalah rendah.';
        }


        if($skor >= 5 && $skor <= 8){
            $interpretasi = 'Pengetahuan anda mengenai perkahwinan kanak-kanak adalah sederhana.';
        }

        if($skor >= 9){
            $interpretasi = 'Pengetahuan anda mengenai perkahwinan kanak-kanak adalah tinggi.';
        }

        return $this->render('result', [
            'skor' => $skor,
            'interpretasi' => $interpretasi,
        ]);
    }
}
