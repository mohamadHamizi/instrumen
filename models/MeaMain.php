<?php

namespace app\models;

use app\models\MeaJadual1;
use app\models\MeaJadual2;
use app\models\MeaJadual3;
use app\models\MeaJadual4;
use Yii;
use yii\helpers\Html;

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
        return $this->hasOne(MeaJadual1::class, ['main_id'=>'id']);
    }
    public function getJadual2() {
        return $this->hasOne(MeaJadual2::class, ['main_id'=>'id']);
    }
    public function getJadual3() {
        return $this->hasOne(MeaJadual3::class, ['main_id'=>'id']);
    }
    public function getJadual4() {
        return $this->hasOne(MeaJadual4::class, ['main_id'=>'id']);
    }

    public static function highestSkor($pil1, $pil2){
        if($pil1 > $pil2){
            return $pil1;
        }

        if($pil2 > $pil1){
            return $pil2;
        }
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

    // public function getBtnView()
    // {
    //     if ($this->jadual4->total_bos2) {
    //         return  Html::a('<i class="fa fa-eye"></i>', ['mea/view-result', 'id' => $this->id], ['target' => '_blank']);
    //     }

    //     return null;
    // }

    public static function checkComplete($id)
    {
        $model = MeaMain::find()->where(['id' => $id, 'completed' => 1])->one();

        if ($model) {
            return true;
        }

        return false;
    }
}
