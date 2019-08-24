<?php

namespace app\controllers;

use Yii;
use app\models\RekodCuti;
use app\models\RekodCutiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Users;
//use Yii;
use yii\filters\AccessControl;
use app\models\OkuQuestions;
use app\models\OkuRespons;
use yii\base\Model;
use app\models\OkuSumber;
use yii\data\ActiveDataProvider;
use app\models\OkuGroups;
use app\models\OkuDimensi;

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
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['mohon', 'pengganti'],
                'rules' => [
                    [
                        'actions' => ['mohon', 'pengganti'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all RekodCuti models.
     * @return mixed
     */
    public function actionBahagianB() {

        $this->view->title = "BAHAGIAN B : SUMBER KEBAHAGIAN SUBJEKTIF OKU-FIZIKAL";

        $groups = OkuGroups::findAll(['type' => 'B']);

        $model = new OkuSumber();

        if ($model->load(Yii::$app->request->post())) {
            
            $model->main_id = 1;

            if ($model->save()) {
                return $this->redirect(['bahagian-c']);
            }
        }

        return $this->render('bahagian-b', [
                    'model1' => $model,
                    'groups' => $groups,
        ]);
    }

    public function actionBahagianA() {

        $this->view->title = "BAHAGIAN A : DIMENSI KEBAHAGIAAN SUBJEKTIF OKU-FIZIKAL";

        $groups = OkuGroups::findAll(['type' => 'A']);

        $model = new OkuDimensi();

        if ($model->load(Yii::$app->request->post())) {
            
           $model->main_id = 1;

            if ($model->save()) {
                return $this->redirect(['bahagian-b']);
            }
        }

        return $this->render('bahagian-a', [
                    'model1' => $model,
                    'groups' => $groups,
        ]);
    }

    public function actionPapan() {

        $model = RekodCuti::find()->where(['status' => 'APPROVED'])->all();

        return $this->render('papan', [
                    'model' => $model,
                    'bil' => 1,
        ]);
    }

    public function actionMohon() {
        $icno = Yii::$app->user->getId();
//        \yii\helpers\VarDumper::dump($icno)
//        $this->pageTitle = 'test';
//        $icno = 890426495037;

        $model = new RekodCuti();

        if ($model->load(Yii::$app->request->post())) {

            $model->icno = $icno;
            $model->tempoh = RekodCuti::getTempohCuti($model->cuti_mula, $model->cuti_tamat);

            if ($model->save()) {
//                Yii::$app->session->setFlash('success','Permohonan anda telah dihantar kepada pengganti');

                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Permohonan anda telah dihantar kepada pengganti',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);
                return $this->redirect(['view-permohonan', 'id' => $model->id]);
            }
        }

        return $this->render('mohon', [
                    'model' => $model,
                    'icno' => $icno,
        ]);
    }

    public function actionViewPermohonan($id) {

//        $model = RekodCuti::findOne($id);
//        
//        var_dump($model);
//        die();

        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    public function actionPengganti() {

        $icno = Yii::$app->user->getId();

        $model = RekodCuti::find()->where(['ganti_by' => $icno, 'status' => 'ENTRY'])->all();

        return $this->render('pengganti', [
                    'model' => $model,
                    'bil' => 1,
        ]);
    }

    public function actionPeraku() {

        $icno = Yii::$app->user->getId();

        $model = NULL;
        //type pentadbiran(1)
        $user = Users::find()->where(['type' => 1, 'icno' => $icno])->one();

        if ($user) {
            $model = RekodCuti::find()->where(['status' => 'GANTI'])->all();
        }

        return $this->render('peraku', [
                    'model' => $model,
                    'bil' => 1,
        ]);
    }

    public function actionLulus() {

        $icno = Yii::$app->user->getId();

        $model = NULL;

        //for pengetua(5) and timbalan pengetua(4)
        $user = Users::find()->where(['icno' => $icno])->andWhere(['in', 'type', ['4', '5']])->one();

        if ($user) {
            $model = RekodCuti::find()->where(['status' => 'VERIFIED'])->all();
        }

        return $this->render('lulus', [
                    'model' => $model,
                    'bil' => 1,
        ]);
    }

    public function actionTindakanPeraku($id) {

        $icno = Yii::$app->user->getId();
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->ver_dt = date('Y-m-d H:i:s');
            $model->ver_by = $icno;

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Tindakan kelulusan telah dibuat',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);
                return $this->redirect(['peraku']);
            }
        }

        return $this->render('tindakan-peraku', [
                    'model' => $model,
        ]);
    }

    public function actionTindakanLulus($id) {

        $icno = Yii::$app->user->getId();
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $model->app_dt = date('Y-m-d H:i:s');
            $model->app_by = $icno;

            if ($model->save()) {
                Yii::$app->getSession()->setFlash('success', [
                    'type' => 'success',
                    'duration' => 5000,
                    'icon' => 'fa fa-check',
                    'message' => 'Perakuan telah dibuat',
                    'title' => 'Berjaya',
                    'positonY' => 'top',
                    'positonX' => 'right'
                ]);
                return $this->redirect(['lulus']);
            }
        }

        return $this->render('tindakan-lulus', [
                    'model' => $model,
        ]);
    }

    public function actionTindakanPengganti($id, $tindakan) {

        $icno = Yii::$app->user->getId();

        $model = RekodCuti::findOne(['id' => $id, 'ganti_by' => $icno]);

//        if ($model->load(Yii::$app->request->post())) {

        $model->ganti_dt = date('Y-m-d H:i:s');
        $model->status = ($tindakan == 1) ? 'GANTI' : 'REJECTED';

        if ($tindakan == 1) {
            $msg = 'Pengganti telah bersetuju!';
            $msg_type = 'success';
            $title = 'Bersetuju';
        } else {
            $msg = 'Pengganti tidak bersetuju!';
            $msg_type = 'danger';
            $title = 'Tidak Bersetuju';
        }


        if ($model->save()) {
            Yii::$app->getSession()->setFlash('success', [
                'type' => $msg_type,
                'duration' => 5000,
                'icon' => 'fa fa-check',
                'message' => $msg,
                'title' => $title,
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['view-permohonan', 'id' => $model->id]);
        }
//        }
//        return $this->render('mohon', [
//                    'model' => $model,
//                    'icno' => $icno,
//        ]);
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

    /**
     * Creates a new RekodCuti model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new RekodCuti();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing RekodCuti model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RekodCuti model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RekodCuti model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RekodCuti the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = RekodCuti::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
