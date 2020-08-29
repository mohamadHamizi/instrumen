<?php

namespace app\models;

use app\models\MeaJadual1;
use app\models\MeaJadual2;
use app\models\MeaJadual3;
use app\models\MeaJadual4;
use Yii;

/**
 * This is the model class for table "mea_main".
 *
 * @property int $id
 * @property string $icno
 * @property string $create_dt
 */
class MeaMain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mea_main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icno'], 'required' , 'message'=>'Sila Masukkan No. Kad Pengenalan'],
            [['icno'], 'checklenght'],
            [['create_dt'], 'safe'],
            [['icno'], 'string', 'max' => 12],
        ];
    }

    public function checklenght($attribute, $params) {

        $icno = $this->icno;

        $end = strlen($icno);


        if($end != 12){
            $this->addError($attribute, 'sila masukkan 12 angka nombor kad pengenalan anda!');
        }

    }

    public function getJadual1() {
        return $this->hasOne(MeaJadual1::className(), ['main_id'=>'id']);
    }
    public function getJadual2() {
        return $this->hasOne(MeaJadual2::className(), ['main_id'=>'id']);
    }
    public function getJadual3() {
        return $this->hasOne(MeaJadual3::className(), ['main_id'=>'id']);
    }
    public function getJadual4() {
        return $this->hasOne(MeaJadual4::className(), ['main_id'=>'id']);
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
}
