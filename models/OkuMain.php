<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_main".
 *
 * @property int $id
 * @property string $icno
 * @property int $skor_a
 * @property int $skor_b
 * @property int $skor_c
 * @property int $skor_d
 * @property int $status if 1 completed
 * @property string $created_dt
 */
class OkuMain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['skor_a', 'skor_b', 'skor_c', 'skor_d', 'status'], 'integer'],
            [['created_dt'], 'safe'],
            [['icno'], 'string', 'max' => 16],
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
            'skor_a' => 'Skor A',
            'skor_b' => 'Skor B',
            'skor_c' => 'Skor C',
            'skor_d' => 'Skor D',
            'status' => 'Status',
            'created_dt' => 'Created Dt',
        ];
    }


    public function getDemografi()
    {
        return $this->hasOne(OkuDemografi::className(), ['main_id' => 'id']);
    }
    public function getDimensi()
    {
        return $this->hasOne(OkuDimensi::className(), ['main_id' => 'id']);
    }
    public function getSumber()
    {
        return $this->hasOne(OkuSumber::className(), ['main_id' => 'id']);
    }
    public function getStrategi()
    {
        return $this->hasOne(OkuStrategi::className(), ['main_id' => 'id']);
    }
    public function getKesan()
    {
        return $this->hasOne(OkuKesan::className(), ['main_id' => 'id']);
    }
    public function getBhgnE()
    {
        return $this->hasOne(OkuBhgnE::class, ['main_id' => 'id']);
    }

    public function getTarikh()
    {
        return ($this->created_dt) ? Yii::$app->formatter->asDate($this->created_dt, 'd/MM/Y') : '-';
    }

    public function getStatusName()
    {
        if ($this->status == 1) {
            return 'COMPLETED';
        } else {
            return 'INCOMPLETE';
        }
    }

    public static function checkComplete($id)
    {
        $model = self::find()->where(['id' => $id, 'status' => 1])->one();

        if ($model) {
            return true;
        }

        return false;
    }
}
