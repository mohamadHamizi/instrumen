<?php

namespace app\models\eq;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "eq_main".
 *
 * @property int $id
 * @property string $icno
 * @property string $create_dt
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eq_main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icno'], 'required'],
            [['create_dt'], 'safe'],
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
                $reverse = 4;
                break;
            case 2:
                $reverse = 3;
                break;
            case 3:
                $reverse = 2;
                break;
            case 4:
                $reverse = 1;
                break;
        }

        return $reverse;
    }

    public static function FormulaIndeks($domain, $main_id)
    {
        $question = Questions::find()->where(['domain' => $domain])->all();

        $maxSkor = count($question) * 4;
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
        if ($this->terbuka->item60) {
            return  Html::a('<i class="fa fa-eye"></i>', ['hexaco/view-result', 'id' => $this->id], ['target' => '_blank']);
        }

        return null;
    }
}
