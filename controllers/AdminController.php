<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\OkuMain;
use app\models\OkuMainSearch;

use app\models\OkuGroups;
use app\models\OkuDimensi;
use app\models\OkuStrategi;
use app\models\OkuKesan;
use app\models\OkuSumber;
use app\models\VDataMea;
use app\models\VDataMeaSearch;
use app\models\VDataMipkSearch;
use app\models\VDataMeaV2Search;

class AdminController extends \yii\web\Controller {

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['index'],
                'rules' => [
                    [
//                        'actions' => ['index'],
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

    public function actionIndex() {
        
        $searchModel = new OkuMainSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);

    }

    public function actionData() {
        
        ini_set('memory_limit', '1024M'); // or you could use 1G
        
        $searchModel = new OkuMainSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
        
    }

    public function actionDataMipk() {
        
        ini_set('memory_limit', '1024M'); // or you could use 1G
        
        $searchModel = new VDataMipkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-mipk', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
        
    }

    public function actionDataMea() {
        
        ini_set('memory_limit', '1024M'); // or you could use 1G
        
        $searchModel = new VDataMeaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-mea', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
        
    }

    public function actionDataMeaTwo() {
        
        ini_set('memory_limit', '1024M'); // or you could use 1G
        
        $searchModel = new VDataMeaV2Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-mea-two', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
        
    }
    
    public function actionShowResult($id){
//        $this->checkSession();
        $main_id = $id;

        $this->view->title = "KEPUTUSAN";
        
        $main = OkuMain::findOne(['id' => $main_id]);
        
        $model = \app\models\OkuDemografi::findOne(['main_id'=>$id]);
        
        $bhgnA = OkuDimensi::findOne(['main_id' => $main_id]);
        $bhgnB = OkuSumber::findOne(['main_id' => $main_id]);
        $bhgnC = OkuStrategi::findOne(['main_id' => $main_id]);
        $bhgnD = OkuKesan::findOne(['main_id' => $main_id]);

        $groups = OkuGroups::findAll(['type' => 'A']);
        $groupsB = OkuGroups::findAll(['type' => 'B']);
        $groupsC = OkuGroups::findAll(['type' => 'C']);
        $groupsD = OkuGroups::findAll(['type' => 'D']);
        
        
        return $this->render('show-result', [
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
   

}
