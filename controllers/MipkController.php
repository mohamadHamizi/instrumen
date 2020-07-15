<?php

namespace app\controllers;

use app\models\MipkDemografi;
use app\models\MipkPengetahuan;
use Yii;
use yii\web\Controller;

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

        $id = \Yii::$app->session->get('mipk_id');


        $model = new MipkDemografi();

        if($id){
            $model = MipkDemografi::findOne(['id'=>$id]);
        }


        if ($model->load(Yii::$app->request->post())) {
            $session = Yii::$app->session;

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

                $session->set('mipk_id', $model->id);
                return $this->redirect(['bahagian-b']);
            }
        }

        return $this->render('bahagian-a', [
            'model' => $model,
        ]);
    }

    public function actionBahagianB()
    {
        $this->checkSession();
        $this->view->title = "BAHAGIAN B: PENGETAHUAN MENGENAI PERKAHWINAN KANAK-KANAK";

        $id = \Yii::$app->session->get('mipk_id');

        // $model = new MipkPengetahuan();

        if($id){
            $model = MipkPengetahuan::findOne(['main_id'=>$id]);

            if(!$model){
                $model = new MipkPengetahuan();
            }
        } else {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila isi Bahagian A : Profil',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['bahagian-a']);
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = \Yii::$app->session->get('mipk_id');
            $model->skor = MipkPengetahuan::getItemSkor(1, $model->item1)+MipkPengetahuan::getItemSkor(2, $model->item2)+MipkPengetahuan::getItemSkor(3, $model->item3)+MipkPengetahuan::getItemSkor(4, $model->item4)+MipkPengetahuan::getItemSkor(5, $model->item5)+MipkPengetahuan::getItemSkor(6, $model->item6)+MipkPengetahuan::getItemSkor(7, $model->item7)+MipkPengetahuan::getItemSkor(8, $model->item8)+MipkPengetahuan::getItemSkor(9, $model->item9)+MipkPengetahuan::getItemSkor(10, $model->item10)+MipkPengetahuan::getItemSkor(11, $model->item11)+MipkPengetahuan::getItemSkor(12, $model->item12);

            // $model->skor = $model->item1 + $model->item2 + $model->item3 + $model->item4 + $model->item5 + $model->item6 + $model->item7 + $model->item8 + $model->item9 + $model->item10 + $model->item11 + $model->item12;

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
                return $this->redirect(['result']);
            }
        }

        return $this->render('bahagian-b', [
            'model' => $model,
            'model1' => $model,
        ]);
    }


    public function actionResult()
    {
        $this->checkSession();

        $interpretasi = '';

        $id = \Yii::$app->session->get('mipk_id');

        if(!$id){
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Sila lengkapkan semua maklumat terlebih dahulu',
                'title' => 'Tidak berjaya',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
                return $this->redirect(['bahagian-a']);
        }

        
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

    public function actionDes() {

        // $session = Yii::$app->session;

        // check if a session is already open
        // if ($session->isActive) ...

        // close a session
        Yii::$app->session->close();
// 
        Yii::$app->session->remove('mipk_id');
        
        // destroys all data registered to a session.
        // Yii::$app->session->destroy();


        Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['mipk/index']);
    }

    protected function checkSession() {
        $mipk_id = \Yii::$app->session->get('mipk_id');

        if (!$mipk_id) {
            return $this->redirect(['index']);
        }
    }
}
