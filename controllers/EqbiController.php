<?php

namespace app\controllers;

use app\models\eqbi\Demo;
use app\models\eqbi\Main;
use app\models\eqbi\Bhgn1;
use app\models\eqbi\Bhgn2;
use app\models\eqbi\Bhgn3;
use app\models\eqbi\Bhgn4;
use app\models\eqbi\Bhgn5;
use app\models\eqbi\Bhgn6;
use app\models\eqbi\Questions;
use Yii;
use yii\web\Controller;
use app\models\UtilityFunc;

/**
 * TipiController
 */
class EqbiController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = "EQ v2";

        $cur_year = date('Y');

        $model = new Main();

        if (Yii::$app->request->isAjax && $model->load($_POST)) {
            Yii::$app->response->format = 'json';
            return \yii\widgets\ActiveForm::validate($model);
        }

        if ($model->load(Yii::$app->request->post())) {

            $session = Yii::$app->session;
            $check_main = Main::find()->where(['icno' => $model->icno, 'YEAR(create_dt)' => $cur_year])->one();

            if ($check_main) {

                if ($check_main->completed == 1) {
                    $session->set('eqbi_main_id', $check_main->id);
                    return $this->redirect(['result']);
                } else if ($check_main->completed == 0) {
                    $model = $check_main;
                }
            }

            $model->create_dt = date('Y-m-d H:i:s');
            if ($model->save()) {

                UtilityFunc::ifSuccess("Saved!");
                $session->set('eqbi_main_id', $model->id);
                return $this->redirect(['demografi']);
            }
        }



        return $this->render('index', ['model' => $model]);
    }

    public function actionDemografi()
    {
        $this->view->title = "Demographics";

        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            UtilityFunc::ifError("Please Enter your Identification No.");
            return $this->redirect(['index']);
        }

        $jenis_darah =  UtilityFunc::BloodTypeList();
        $warganegara =  UtilityFunc::WargaList();
        $status_kerja =  [
            'Bekerja' => 'Employed',
            'Pelajar' => 'Student',
            '99' => 'Others',
        ];;

        $department = UtilityFunc::DepartmentList();
        $country = UtilityFunc::CountryList();

        $main = Main::findOne($id);
        $model = new Demo();

        $check_model = Demo::findOne(['main_id' => $id]);

        if ($check_model) {
            $model = $check_model;
        } else {
            $oldDemo = Demo::find()->joinWith(['relMain'])->where(['eqbi_main.icno' => $main->icno, 'eqbi_main.completed' => 1])->one();

            if ($oldDemo) {
                $model = new Demo(
                    $oldDemo->getAttributes() // get all attributes and copy them to the new instance
                );
                $model->id = null;
            }
        }

        $var = UtilityFunc::myKad($main->icno);

        $model->tarikh_lahir = $var['tarikh_lahir'];
        $model->umur = $var['umur'];

        if ($model->load(Yii::$app->request->post())) {

            $model->main_id = $id;

            if ($model->save()) {
                UtilityFunc::ifSuccess("Saved!");

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

        $this->view->title = "1. INTRAPERSONAL";

        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            UtilityFunc::ifError("Please Enter your Identification No.");
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
                UtilityFunc::ifSuccess("Saved!");
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
        $this->view->title = "2. INTERPERSONAL";

        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            UtilityFunc::ifError("Please Enter your Identification No.");
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
                UtilityFunc::ifSuccess("Saved!");
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
        $this->view->title = "ADAPTASI";

        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            UtilityFunc::ifError("Please Enter your Identification No.");
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
                UtilityFunc::ifSuccess("Saved!");
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
        $this->view->title = "4. PENGURUSAN STRES";

        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            UtilityFunc::ifError("Please Enter your Identification No.");
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
                UtilityFunc::ifSuccess("Saved!");
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
        $this->view->title = "5. MOOD UMUM";

        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            UtilityFunc::ifError("Please Enter your Identification No.");
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
                UtilityFunc::ifSuccess("Saved!");
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
        $this->view->title = "6. TANGGAPAN POSITIF";

        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            UtilityFunc::ifError("Please Enter your Identification No.");
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

                UtilityFunc::ifSuccess("Saved!");
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
        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            UtilityFunc::ifError("Please Enter your Identification No.");
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
            'bil' => 1,
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

        Yii::$app->session->remove('eqbi_main_id');

        Yii::$app->session->destroy(); // destroy all session
        return $this->redirect(['eqbi/index']);
    }

    protected function checkSession()
    {
        $id = \Yii::$app->session->get('eqbi_main_id');

        if (!$id) {
            Yii::$app->getSession()->setFlash('danger', [
                'type' => 'danger',
                'duration' => 5000,
                'icon' => 'fa fa-exclamation',
                'message' => 'Please Enter your Identification No.',
                'title' => 'Failed',
                'positonY' => 'top',
                'positonX' => 'right'
            ]);
            return $this->redirect(['index']);
        }
    }
}
