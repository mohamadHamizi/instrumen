<?php

namespace app\controllers;

use app\models\hexaco\Demo;
use app\models\hexaco\Ekstraversi;
use app\models\hexaco\Emosi;
use app\models\hexaco\Keberhemahan;
use app\models\hexaco\Kebersetujuan;
use app\models\hexaco\Kejujuran;
use app\models\hexaco\Main;
use app\models\hexaco\Questions;
use app\models\hexaco\Terbuka;
use Yii;
use yii\web\Controller;
use app\models\UtilityFunc;

/**
 * TipiController
 */
class HexacoController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "The HEXACO Personality Inventory-Malay (HEXACO-Malay)";

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
                $session->set('hexaco_main_id', $model->id);
                return $this->redirect(['demografi']);
            }
        }

        return $this->render('index', ['model' => $model]);
    }

    public function actionDemografi()
    {
        $this->view->title = "Demografi";

        $id = \Yii::$app->session->get('hexaco_main_id');

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

        $main = Main::findOne($id);
        $var = UtilityFunc::myKad($main->icno);

        $model->tarikh_lahir = $var['tarikh_lahir'];
        $model->umur = $var['umur'];

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            if ($model->save()) {
                $this->ifSuccess();

                return $this->redirect(['bhgn1']);
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

    public function actionBhgn1()
    {

        $this->view->title = "Kejujuran Kerendahan Hati";

        $id = \Yii::$app->session->get('hexaco_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(1);

        $model = new Kejujuran();
        $disabled = false;

        $check_model = Kejujuran::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
            $disabled = true;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn2']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                $this->ifSuccess();
                return $this->redirect(['bhgn2']);
            }
        }

        return $this->render('bhgn1', [
            'model' => $model,
            'model1' => $model,
            'disabled' => $disabled,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBhgn2()
    {
        $this->view->title = "Emosi";

        $id = \Yii::$app->session->get('hexaco_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(2);

        $model = new Emosi();
        $disabled = false;

        $check_model = Emosi::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
            $disabled = true;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn3']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                $this->ifSuccess();
                return $this->redirect(['bhgn3']);
            }
        }

        return $this->render('bhgn2', [
            'model' => $model,
            'model1' => $model,
            'disabled' => $disabled,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBhgn3()
    {
        $this->view->title = "Ekstraversi";

        $id = \Yii::$app->session->get('hexaco_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(3);

        $model = new Ekstraversi();
        $disabled = false;

        $check_model = Ekstraversi::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
            $disabled = true;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn4']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                $this->ifSuccess();
                return $this->redirect(['bhgn4']);
            }
        }

        return $this->render('bhgn3', [
            'model' => $model,
            'model1' => $model,
            'disabled' => $disabled,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionBhgn4()
    {
        $this->view->title = "Kebersetujuan";

        $id = \Yii::$app->session->get('hexaco_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(4);

        $model = new Kebersetujuan();
        $disabled = false;

        $check_model = Kebersetujuan::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
            $disabled = true;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn5']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                $this->ifSuccess();
                return $this->redirect(['bhgn5']);
            }
        }

        return $this->render('bhgn4', [
            'model' => $model,
            'model1' => $model,
            'disabled' => $disabled,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionBhgn5()
    {
        $this->view->title = "Keberhemahan";

        $id = \Yii::$app->session->get('hexaco_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(5);

        $model = new Keberhemahan();
        $disabled = false;

        $check_model = Keberhemahan::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
            $disabled = true;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn6']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                $this->ifSuccess();
                return $this->redirect(['bhgn6']);
            }
        }

        return $this->render('bhgn5', [
            'model' => $model,
            'model1' => $model,
            'disabled' => $disabled,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionBhgn6()
    {
        $this->view->title = "Terbuka kepada Pengalaman";

        $id = \Yii::$app->session->get('hexaco_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(6);

        $model = new Terbuka();
        $disabled = false;

        $check_model = Terbuka::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
            $disabled = true;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['result']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                $this->ifSuccess();
                return $this->redirect(['result']);
            }
        }

        return $this->render('bhgn6', [
            'model' => $model,
            'model1' => $model,
            'disabled' => $disabled,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionResult()
    {
        $id = \Yii::$app->session->get('hexaco_main_id');

        if (!$id) {
            $this->ifError();
            return $this->redirect(['index']);
        }

        $model = Main::find()->where(['id'=>$id])->one();

        $dimensiArr = Main::dimensiAnda($id);

        $dataArr = [
            'name' => 'Indeks',
            'data' => Main::resultAnda($id),
        ];

        return $this->render('result', [
            'model' => $model,
            'dataArr' => $dataArr,
            'dimensiArr' => $dimensiArr,
            'id' => $id,
            'bil' => 1,
            'labelDimensi' => Main::labelDimensi(),
        ]);
    }

    public function actionViewResult($id)
    {
        
        $demo = Demo::findOne(['main_id'=>$id]);
        $model = Main::find()->where(['id'=>$id])->one();

        $dimensiArr = Main::dimensiAnda($id);

        $dataArr = [
            'name' => 'Indeks',
            'data' => Main::resultAnda($id),
        ];

        return $this->render('view-result', [
            'demo' => $demo,
            'model' => $model,
            'dataArr' => $dataArr,
            'dimensiArr' => $dimensiArr,
            'id' => $id,
            'bil' => 1,
            'labelDimensi' => Main::labelDimensi(),
        ]);
    }

    public function actionDes()
    {

        Yii::$app->session->close();

        Yii::$app->session->remove('hexaco_main_id');

        Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['hexaco/index']);
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
