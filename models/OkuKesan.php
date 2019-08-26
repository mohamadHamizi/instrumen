<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_kesan".
 *
 * @property int $id
 * @property int $main_id
 * @property int $d1
 * @property int $d2
 * @property int $d3
 * @property int $d4
 * @property int $d5
 * @property int $d6
 * @property int $d7
 * @property int $d8
 * @property int $d9
 * @property int $d10
 * @property int $d11
 * @property int $d12
 * @property int $d13
 * @property int $d14
 * @property int $d15
 * @property int $d16
 */
class OkuKesan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_kesan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'd15', 'd16'], 'required', 'message'=>"Ruangan ini adalah wajib!"],
            [['main_id', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'd15', 'd16'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main_id' => 'Main ID',
            'd1' => 'D1',
            'd2' => 'D2',
            'd3' => 'D3',
            'd4' => 'D4',
            'd5' => 'D5',
            'd6' => 'D6',
            'd7' => 'D7',
            'd8' => 'D8',
            'd9' => 'D9',
            'd10' => 'D10',
            'd11' => 'D11',
            'd12' => 'D12',
            'd13' => 'D13',
            'd14' => 'D14',
            'd15' => 'D15',
            'd16' => 'D16',
        ];
    }
}
