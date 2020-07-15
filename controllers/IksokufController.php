<?php

namespace app\controllers;

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
class IksokufController extends Controller {

    /**
     * {@inheritdoc}
     */
//    public function behaviors() {
//        return [
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'delete' => ['POST'],
//                ],
//            ],
//        ];
//    }
//    public function behaviors() {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'only' => ['index', 'bahagian-a', 'bahagian-b', 'bahagian-a', 'bahagian-d'],
//                'rules' => [
//                    [
//                        'actions' => ['index', 'bahagian-a', 'bahagian-b', 'bahagian-a', 'bahagian-d'],
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }

    public function actionIndex() {
        $this->view->title = "PEMARKATAN e-INSTRUMEN KEBAHAGIAAN SUBJEKTIF ORANG KURANG UPAYA-FIZIKAL (e-IKSOKU-F)";

        $model = new OkuMain();

        if ($model->load(Yii::$app->request->post())) {
            $session = Yii::$app->session;

            $exist = OkuMain::findOne(['icno' => $model->icno]);

            //sekiranya ada rekod.. just continue ke page yang blum ada markah
            if ($exist) {

                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Maklumat telah disimpan',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);
                
                $session->set('icno', $exist->icno);
                $session->set('main_id', $exist->id);
                return $this->redirect(['demografi']);
            } else {
                
                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Maklumat telah disimpan',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);

                $model->created_dt = date("Y-m-d H:i:s");

                if ($model->save()) {
                    $session->set('icno', $model->icno);
                    $session->set('main_id', $model->id);
                    return $this->redirect(['demografi']);
                }
            }
        }

        return $this->render('index', [
                    'model' => $model,
        ]);
    }

    public function actionDemografi() {
        
        $this->view->title = "PROFIL DEMOGRAFI";
        $this->checkSession();

        $main_id = \Yii::$app->session->get('main_id');

        $model = new OkuDemografi();
        
        $demografi = OkuDemografi::findOne(['main_id' => $main_id]);

        if ($demografi) {
            $model = $demografi;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $main_id;

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
                return $this->redirect(['bahagian-a']);
            }
        }

        return $this->render('demografi', [
                    'model' => $model,
        ]);
    }

    public function actionBahagianA() {

        $this->checkSession();

        $main_id = \Yii::$app->session->get('main_id');

        $this->view->title = "BAHAGIAN A : DIMENSI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL";

        $groups = OkuGroups::findAll(['type' => 'A']);

        $model = new OkuDimensi();

        $dimensi = OkuDimensi::findOne(['main_id' => $main_id]);

        if ($dimensi) {
            $model = $dimensi;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $main_id;

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
                return $this->redirect(['bahagian-b']);
            }
        }

        return $this->render('bahagian-a', [
                    'model1' => $model,
                    'groups' => $groups,
            'main_id' => $main_id,
        ]);
    }

    /**
     * Lists all RekodCuti models.
     * @return mixed
     */
    public function actionBahagianB() {

        $this->checkSession();
        $main_id = \Yii::$app->session->get('main_id');

        $this->view->title = "BAHAGIAN B : SUMBER KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL";

        $groups = OkuGroups::findAll(['type' => 'B']);

        $model = new OkuSumber();

        $sumber = OkuSumber::findOne(['main_id' => $main_id]);

        if ($sumber) {
            $model = $sumber;
        }


        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $main_id;

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
                return $this->redirect(['bahagian-c']);
            }
        }

        return $this->render('bahagian-b', [
                    'model1' => $model,
                    'groups' => $groups,
        ]);
    }

    public function actionBahagianC() {

        $this->checkSession();
        $main_id = \Yii::$app->session->get('main_id');

        $this->view->title = "BAHAGIAN C : STRATEGI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL";

        $groups = OkuGroups::findAll(['type' => 'C']);

        $model = new OkuStrategi();

        $strategi = OkuStrategi::findOne(['main_id' => $main_id]);

        if ($strategi) {
            $model = $strategi;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $main_id;

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
                return $this->redirect(['bahagian-d']);
            }
        }

        return $this->render('bahagian-c', [
                    'model1' => $model,
                    'groups' => $groups,
        ]);
    }

    public function actionBahagianD() {

        $this->checkSession();
        $main_id = \Yii::$app->session->get('main_id');

        $this->view->title = "BAHAGIAN D : KESAN KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL";

        $groups = OkuGroups::findAll(['type' => 'D']);

        $model = new OkuKesan();

        $kesan = OkuKesan::findOne(['main_id' => $main_id]);

        if ($kesan) {
            $model = $kesan;
        }

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $main_id;
             

            if ($model->save()) {

                $main = OkuMain::findOne($main_id);
                $main->status = 1;
                $main->save(false);

                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Tahniah anda selesai menjawab semua soalan :)',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);
                return $this->redirect(['result']);
            }
        }

        return $this->render('bahagian-d', [
                    'model1' => $model,
                    'groups' => $groups,
        ]);
    }

    public function actionResult() {
        $this->checkSession();
        $main_id = \Yii::$app->session->get('main_id');

        $this->view->title = "KEPUTUSAN";
        
        $this->saveTotals($main_id);

        $model = OkuMain::findOne(['id' => $main_id]);
        $bhgnA = OkuDimensi::findOne(['main_id' => $main_id]);
        $bhgnB = OkuSumber::findOne(['main_id' => $main_id]);
        $bhgnC = OkuStrategi::findOne(['main_id' => $main_id]);
        $bhgnD = OkuKesan::findOne(['main_id' => $main_id]);

        $groups = OkuGroups::findAll(['type' => 'A']);
        $groupsB = OkuGroups::findAll(['type' => 'B']);
        $groupsC = OkuGroups::findAll(['type' => 'C']);
        $groupsD = OkuGroups::findAll(['type' => 'D']);
        
        $indeksAll = OkuIndeks::find()->orderBy(['id'=>'DESC'])->one();
        
        return $this->render('result', [
                    'indeksAll' => $indeksAll->indeks,
                    'tahapIndeksAll' => OkuDimensi::tahap($indeksAll->indeks),
                    'model' => $model,
                    'bhgnA' => $bhgnA,
                    'bhgnB' => $bhgnB,
                    'bhgnC' => $bhgnC,
                    'bhgnD' => $bhgnD,
                    'groups' => $groups,
                    'groupsB' => $groupsB,
                    'groupsC' => $groupsC,
                    'groupsD' => $groupsD,
                    'main_id' => $main_id,
        ]);
    }

    public static function saveTotals($main_id){
        
        $model = OkuTotals::findOne(['main_id'=>$main_id]);
        
        if(!$model){
            $model = new OkuTotals();
        }
        
        $model->main_id = $main_id; 
        
        $model->kp = OkuScoring::ScaleOnly('KP', $main_id);
        $model->pn = OkuScoring::ScaleOnly('PN', $main_id);
        $model->al = OkuScoring::ScaleOnly('AL', $main_id);
        $model->ap = OkuScoring::ScaleOnly('AP', $main_id);
        $model->an = OkuScoring::ScaleOnly('AN', $main_id);
        $model->kr = OkuScoring::ScaleOnly('KR', $main_id);
        $model->pp = OkuScoring::ScaleOnly('PP', $main_id);
        $model->hb = OkuScoring::ScaleOnly('HB', $main_id);
        $model->sk = OkuScoring::ScaleOnly('SK', $main_id);
        $model->sr = OkuScoring::ScaleOnly('SR', $main_id);
        $model->si = OkuScoring::ScaleOnly('SI', $main_id);
        $model->pr = OkuScoring::ScaleOnly('PR', $main_id);
        $model->kb = OkuScoring::ScaleOnly('KB', $main_id);
        $model->ks = OkuScoring::ScaleOnly('KS', $main_id);
        $model->kn = OkuScoring::ScaleOnly('KN', $main_id);
        $model->pc = OkuScoring::ScaleOnly('PC', $main_id);
        $model->kf = OkuScoring::ScaleOnly('KF', $main_id);
        $model->hi = OkuScoring::ScaleOnly('HI', $main_id);
        $model->rk = OkuScoring::ScaleOnly('RK', $main_id);
        $model->jn = OkuScoring::ScaleOnly('JN', $main_id);
        $model->ka = OkuScoring::ScaleOnly('KA', $main_id);
        $model->pm = OkuScoring::ScaleOnly('PM', $main_id);
        $model->us = OkuScoring::ScaleOnly('US', $main_id);
        $model->bp = OkuScoring::ScaleOnly('BP', $main_id);
        $model->bd = OkuScoring::ScaleOnly('BD', $main_id);
        $model->in = OkuScoring::ScaleOnly('IN', $main_id);
        $model->as = OkuScoring::ScaleOnly('AS', $main_id);
        $model->em = OkuScoring::ScaleOnly('EM', $main_id);
        $model->pi = OkuScoring::ScaleOnly('PI', $main_id);
        $model->kh = OkuScoring::ScaleOnly('KH', $main_id);
        
        
        if($model->save()){
            return true;
        }
        
        
        return false;
        
    }

    public function actionDes() {

        \Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['site/pdpa']);
    }

    

    /**
     * Displays a single RekodCuti model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

   

    protected function checkSession() {
        $icno = \Yii::$app->session->get('icno');

        if (!$icno) {
            return $this->redirect(['index']);
        }
    }

}
