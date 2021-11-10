<?php

namespace app\models\eq2;

use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;

/**
 * This is the model class for table "eq2_main".
 *
 * @property int $id
 * @property string $icno
 * @property string $create_dt
 * @property int $completed
 * @property string $completed_dt
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eq2_main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icno'], 'required'],
            [['create_dt', 'completed_dt'], 'safe'],
            [['completed'], 'integer'],
            [['icno'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icno' => 'Icno',
            'create_dt' => 'Create Dt',
            'completed' => 'Completed',
            'completed_dt' => 'Completed Dt',
        ];
    }

    public function getDemografi()
    {
        return $this->hasOne(Demo::class, ['main_id' => 'id']);
    }


    public static function reverseSkor($skorItem)
    {

        switch ($skorItem) {
            case 1:
                $reverse = 5;
                break;
            case 2:
                $reverse = 4;
                break;
            case 3:
                $reverse = 3;
                break;
            case 4:
                $reverse = 2;
                break;
            case 5:
                $reverse = 1;
                break;
        }

        return $reverse;
    }

    public static function FormulaIndeks($domain, $main_id, $sub_domain=null)
    {
        $question = Questions::find()->where(['domain' => $domain])->all();

        if($sub_domain){
            $question = Questions::find()->where(['domain' => $domain, 'sub_domain'=>$sub_domain])->all();
        }

        $maxSkor = count($question) * 5;
        $minSkor = count($question);

        $model = self::getBhgn($domain, $main_id);

        $jumlahSkor = 0;
        for ($x = 1; $x <= $minSkor; $x++) {

            if (Questions::getRevItem($domain, $x)) {
                $jumlahSkor += Main::reverseSkor($model->{'item' . $x});
            } else {
                $jumlahSkor += $model->{'item' . $x};
            }
        }

        $indeks = ($jumlahSkor - $minSkor) / ($maxSkor - $minSkor) * 100;

        return round($indeks, 2);
    }



    public static function getBhgn($domain, $main_id)
    {

        switch ($domain) {
            case 1:
                $model = Bhgn1::find()->where(['main_id' => $main_id])->one();
                break;
            case 2:
                $model = Bhgn2::find()->where(['main_id' => $main_id])->one();
                break;
            case 3:
                $model = Bhgn3::find()->where(['main_id' => $main_id])->one();
                break;
            case 4:
                $model = Bhgn4::find()->where(['main_id' => $main_id])->one();
                break;
            case 5:
                $model = Bhgn5::find()->where(['main_id' => $main_id])->one();
                break;
            case 6:
                $model = Bhgn6::find()->where(['main_id' => $main_id])->one();
                break;
        }

        return $model;
    }

    public function getPdpaStatus()
    {
        return "Setuju";
    }

    public function getPdpaTarikh()
    {
        return Yii::$app->formatter->asDate($this->create_dt, 'php:d/m/Y'); // 2014-10-06;
    }

    public function getBtnView()
    {
        if ($this->checkComplete($this->id)) {
            return  Html::a('<i class="fa fa-eye"></i>', ['eq2/view-result', 'id' => $this->id], ['target' => '_blank']);
        }

        return null;
    }

    public static function checkComplete($id)
    {
        $model = Main::find()->where(['id' => $id, 'completed' => 1])->one();

        if ($model) {
            return true;
        }

        return false;
    }

    public static function label($id = null)
    {
        $arr = [
            "Intrapersonal",
            "Interpersonal",
            "Adaptasi",
            "Pengurusan Stres",
            "Mood Umum",
            "Tanggapan Positif",
        ];

        if ($id) {
            return $arr[$id];
        }

        return $arr;
    }

    /**
     * Paparan deskripsi
     * 
     * @param int $id 0 to 5
     * 
     * @return array if id provided return specific description
     */
    public static function deskripsi($id = null)
    {
        $arr = [
            "Berupaya memahami emosi diri dan orang lain, menilai diri, berdikari, berpendirian serta mempunyai matlamat.",
            "Berupaya membina empati, bertanggungjawab serta disenangi oleh orang lain.",
            "Berupaya mengawal tekanan dan mengawal diri ketika berada dalam keadaan yang sukar tanpa terperangkap di dalam keadaan tersebut.",
            "Berupaya membuat keputusan dengan baik, fleksibel dan juga seorang yang objektif.",
            "Seorang yang optimis dan periang. ",
            "Individu yang memperoleh skor yang tinggi dalam komponen ini cenderung memberikan tindak balas positif yang berlebihan (ekstrim)",
        ];

        if ($id) {
            return $arr[$id];
        }

        return $arr;
    }

    /**
     * Return dataprovider object
     * 
     * @param array $params parameters
     * 
     * @return array object
     */
    public function search($params)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => self::find(),
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }

    public function getIntrapersonal()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(1, $this->id);
        }

        return null;
    }

    public function getPenilaianKendiri()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(1, $this->id, '1.1');
        }

        return null;
    }

    public function getKesedaranEmosi()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(1, $this->id, '1.2');
        }

        return null;
    }
    public function getPenegasanDiri()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(1, $this->id, '1.3');
        }

        return null;
    }
    public function getBerdikari()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(1, $this->id, '1.4');
        }

        return null;
    }
    public function getKesempurnaanKendiri()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(1, $this->id, '1.5');
        }

        return null;
    }

    public function getInterpersonal()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(2, $this->id);
        }

        return null;
    }

    public function getEmpati()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(2, $this->id, '2.1');
        }

        return null;
    }
    public function getTanggungjawabSosial()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(2, $this->id, '2.2');
        }

        return null;
    }
    public function getHubunganInterpersonal()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(2, $this->id, '2.3');
        }

        return null;
    }

    public function getAdaptasi()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(3, $this->id);
        }

        return null;
    }

    public function getPenghayatanRealiti()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(3, $this->id, '3.1');
        }

        return null;
    }
    public function getFleksibel()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(3, $this->id, '3.2');
        }

        return null;
    }
    public function getPenyelesaianMasalah()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(3, $this->id, '3.3');
        }

        return null;
    }

    public function getPengurusanStres()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(4, $this->id);
        }

        return null;
    }

    public function getToleransiStres()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(4, $this->id, '4.1');
        }

        return null;
    }

    public function getPengawalanDorongan()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(4, $this->id, '4.2');
        }

        return null;
    }
   
    public function getMoodUmum()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(5, $this->id);
        }

        return null;
    }

    public function getOptimis()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(5, $this->id, '5.1');
        }

        return null;
    }

    public function getKebahagiaan()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(5, $this->id, '5.2');
        }

        return null;
    }

    public function getTanggapanPositif()
    {
        if ($this->checkComplete($this->id)) {
            return $this->FormulaIndeks(6, $this->id);
        }

        return null;
    }
}
