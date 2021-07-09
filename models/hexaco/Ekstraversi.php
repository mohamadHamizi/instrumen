<?php

namespace app\models\hexaco;

use Yii;

/**
 * This is the model class for table "hexaco_ekstraversi".
 *
 * @property int $id
 * @property int $main_id
 * @property int $item21
 * @property int $item22
 * @property int $item23
 * @property int $item24
 * @property int $item25
 * @property int $item26
 * @property int $item27
 * @property int $item28
 * @property int $item29
 * @property int $item30
 */
class Ekstraversi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_ekstraversi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item21', 'item22', 'item23', 'item24', 'item25', 'item26', 'item27', 'item28', 'item29', 'item30'], 'required'],
            [['main_id', 'item21', 'item22', 'item23', 'item24', 'item25', 'item26', 'item27', 'item28', 'item29', 'item30'], 'integer'],
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
            'item21' => 'Item21',
            'item22' => 'Item22',
            'item23' => 'Item23',
            'item24' => 'Item24',
            'item25' => 'Item25',
            'item26' => 'Item26',
            'item27' => 'Item27',
            'item28' => 'Item28',
            'item29' => 'Item29',
            'item30' => 'Item30',
        ];
    }
}
