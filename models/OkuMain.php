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
    
    
    public function getDemografi() {
        return $this->hasOne(OkuDemografi::className(), ['main_id'=>'id']);
    }
}
