<?php

namespace app\models\hexaco;

use Yii;

/**
 * This is the model class for table "hexaco_emosi".
 *
 * @property int $id
 * @property int $main_id
 * @property int $item11
 * @property int $item12
 * @property int $item13
 * @property int $item14
 * @property int $item15
 * @property int $item16
 * @property int $item17
 * @property int $item18
 * @property int $item19
 * @property int $item20
 */
class Emosi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_emosi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item11', 'item12', 'item13', 'item14', 'item15', 'item16', 'item17', 'item18', 'item19', 'item20'], 'required'],
            [['main_id', 'item11', 'item12', 'item13', 'item14', 'item15', 'item16', 'item17', 'item18', 'item19', 'item20'], 'integer'],
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
            'item11' => 'Item11',
            'item12' => 'Item12',
            'item13' => 'Item13',
            'item14' => 'Item14',
            'item15' => 'Item15',
            'item16' => 'Item16',
            'item17' => 'Item17',
            'item18' => 'Item18',
            'item19' => 'Item19',
            'item20' => 'Item20',
        ];
    }
}
