<?php

namespace app\controllers;

use app\models\eq\Demo;
use app\models\eq\Main;
use app\models\eq\Bhgn1;
use app\models\eq\Bhgn2;
use app\models\eq\Bhgn3;
use app\models\eq\Bhgn4;
use app\models\eq\Bhgn5;
use app\models\eq\Bhgn6;
use app\models\eq\Questions;
use Yii;
use yii\web\Controller;
use app\models\UtilityFunc;

/**
 * TipiController
 */
class EqController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "EQ-Malay";

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

                UtilityFunc::ifSuccess("Maklumat telah disimpan");
                $session->set('eq_main_id', $model->id);
                return $this->redirect(['demografi']);
            }
        }

        return $this->render('index', ['model' => $model]);
    }

    public function actionDemografi()
    {
        $this->view->title = "Demografi";

        $id = \Yii::$app->session->get('eq_main_id');

        if (!$id) {
            UtilityFunc::ifError("Sila isi masukkan No. Kad Pengenalan");
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
                UtilityFunc::ifSuccess("Maklumat telah disimpan");

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

        $this->view->title = "Intrapersonal";

        $id = \Yii::$app->session->get('eq_main_id');

        if (!$id) {
            UtilityFunc::ifError("Sila isi masukkan No. Kad Pengenalan");
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(1);

        $model = new Bhgn1();
        $disabled = Main::checkComplete($id);

        $check_model = Bhgn1::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn2']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                UtilityFunc::ifSuccess("Maklumat telah disimpan");
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
        $this->view->title = "Interpersonal";

        $id = \Yii::$app->session->get('eq_main_id');

        if (!$id) {
            UtilityFunc::ifError("Sila isi masukkan No. Kad Pengenalan");
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(2);

        $model = new Bhgn2();
        $disabled = Main::checkComplete($id);

        $check_model = Bhgn2::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn3']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                UtilityFunc::ifSuccess("Maklumat telah disimpan");
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
        $this->view->title = "Pengurusan Stres";

        $id = \Yii::$app->session->get('eq_main_id');

        if (!$id) {
            UtilityFunc::ifError("Sila isi masukkan No. Kad Pengenalan");
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(3);

        $model = new Bhgn3();
        $disabled = Main::checkComplete($id);

        $check_model = Bhgn3::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn4']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                UtilityFunc::ifSuccess("Maklumat telah disimpan");
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
        $this->view->title = "Adaptasi";

        $id = \Yii::$app->session->get('eq_main_id');

        if (!$id) {
            UtilityFunc::ifError("Sila isi masukkan No. Kad Pengenalan");
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(4);

        $model = new Bhgn4();
        $disabled = Main::checkComplete($id);

        $check_model = Bhgn4::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn5']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                UtilityFunc::ifSuccess("Maklumat telah disimpan");
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
        $this->view->title = "Mood Umum";

        $id = \Yii::$app->session->get('eq_main_id');

        if (!$id) {
            UtilityFunc::ifError("Sila isi masukkan No. Kad Pengenalan");
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(5);

        $model = new Bhgn5();
        $disabled = Main::checkComplete($id);

        $check_model = Bhgn5::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['bhgn6']);
            }

            $model->main_id = $id;

            if ($model->save()) {
                UtilityFunc::ifSuccess("Maklumat telah disimpan");
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
        $this->view->title = "Tanggapan Positif";

        $id = \Yii::$app->session->get('eq_main_id');

        if (!$id) {
            UtilityFunc::ifError("Sila isi masukkan No. Kad Pengenalan");
            return $this->redirect(['index']);
        }

        $dataProvider = Questions::getProvider(6);

        $model = new Bhgn6();
        $disabled = Main::checkComplete($id);

        $check_model = Bhgn6::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        }

        if ($model->load(Yii::$app->request->post())) {

            if ($disabled == true) {
                return $this->redirect(['result']);
            }

            $model->main_id = $id;

            if ($model->save()) {

                $main = Main::findOne($id);

                if ($main->completed == 0) {
                    $main->completed = 1;
                    $main->completed_dt = date('Y-m-d H:i:s');
                    $main->save();
                }

                UtilityFunc::ifSuccess("Maklumat telah disimpan");
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
        $id = \Yii::$app->session->get('eq_main_id');

        if (!$id) {
            UtilityFunc::ifError("Sila isi masukkan No. Kad Pengenalan");
            return $this->redirect(['index']);
        }

        $model = Main::find()->where(['id' => $id])->one();

        $dataArr = [
            Main::FormulaIndeks(1, $id),
            Main::FormulaIndeks(2, $id),
            Main::FormulaIndeks(3, $id),
            Main::FormulaIndeks(4, $id),
            Main::FormulaIndeks(5, $id),
            Main::FormulaIndeks(6, $id),
        ];

        return $this->render('result', [
            'model' => $model,
            'dataArr' => $dataArr,
            'label' => Main::label(),
            'deskripsi' => Main::deskripsi(),
        ]);
    }

    public function actionViewResult($id)
    {

        $demo = Demo::findOne(['main_id' => $id]);
        $model = Main::find()->where(['id' => $id])->one();

        $dataArr = [
            Main::FormulaIndeks(1, $id),
            Main::FormulaIndeks(2, $id),
            Main::FormulaIndeks(3, $id),
            Main::FormulaIndeks(4, $id),
            Main::FormulaIndeks(5, $id),
            Main::FormulaIndeks(6, $id),
        ];

        return $this->render('view-result', [
            'demo' => $demo,
            'model' => $model,
            'dataArr' => $dataArr,
            'label' => Main::label(),
            'deskripsi' => Main::deskripsi(),
        ]);
    }

    public function actionDes()
    {

        Yii::$app->session->close();

        Yii::$app->session->remove('eq_main_id');

        Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['eq/index']);
    }

    protected function checkSession()
    {
        $id = \Yii::$app->session->get('eq_main_id');

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
