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

                $session->set('icno', $exist->icno);
                $session->set('main_id', $exist->id);
                return $this->redirect(['demografi']);
            } else {

                $model->created_dt = date("Y-m-d");

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
                return $this->redirect(['bahagian-b']);
            }
        }

        return $this->render('bahagian-a', [
                    'model1' => $model,
                    'groups' => $groups,
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


        $model = OkuMain::findOne(['id' => $main_id]);
        $bhgnA = OkuDimensi::findOne(['main_id' => $main_id]);
        $bhgnB = OkuSumber::findOne(['main_id' => $main_id]);
        $bhgnC = OkuStrategi::findOne(['main_id' => $main_id]);
        $bhgnD = OkuKesan::findOne(['main_id' => $main_id]);

        $groups = OkuGroups::findAll(['type' => 'A']);
        $groupsB = OkuGroups::findAll(['type' => 'B']);
        $groupsC = OkuGroups::findAll(['type' => 'C']);
        $groupsD = OkuGroups::findAll(['type' => 'D']);
        
        
        return $this->render('result', [
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

    public function actionPapan() {

        $model = RekodCuti::find()->where(['status' => 'APPROVED'])->all();

        return $this->render('papan', [
                    'model' => $model,
                    'bil' => 1,
        ]);
    }

    public function actionDes() {

        \Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['index']);
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
