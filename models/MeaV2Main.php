<?php

namespace app\models;

use Yii;
use app\models\MeaV2Jadual1;
use app\models\MeaV2Jadual2;
use app\models\MeaV2Jadual3;
use app\models\MeaV2Jadual4;

/**
 * This is the model class for table "mea_v2_main".
 *
 * @property int $id
 * @property string $icno
 * @property string $create_dt
 */
class MeaV2Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mea_v2_main';
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

    public function checklenght($attribute, $params)
    {

        $icno = $this->icno;

        $end = strlen($icno);


        if ($end != 12) {
            $this->addError($attribute, 'sila masukkan 12 angka nombor kad pengenalan anda!');
        }
    }

    public function getJadual1()
    {
        return $this->hasOne(MeaV2Jadual1::class, ['main_id' => 'id']);
    }
    public function getJadual2()
    {
        return $this->hasOne(MeaV2Jadual2::class, ['main_id' => 'id']);
    }
    public function getJadual3()
    {
        return $this->hasOne(MeaV2Jadual3::class, ['main_id' => 'id']);
    }
    public function getJadual4()
    {
        return $this->hasOne(MeaV2Jadual4::class, ['main_id' => 'id']);
    }

    public static function highestSkor($pil1, $pil2)
    {
        if ($pil1 > $pil2) {
            return $pil1;
        }

        if ($pil2 > $pil1) {
            return $pil2;
        }
    }

    public static function checkComplete($id)
    {
        $model = self::find()->where(['id' => $id, 'completed' => 1])->one();

        if ($model) {
            return true;
        }

        return false;
    }
}
