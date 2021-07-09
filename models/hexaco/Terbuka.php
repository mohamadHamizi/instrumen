<?php

namespace app\models\hexaco;

use Yii;

/**
 * This is the model class for table "hexaco_terbuka".
 *
 * @property int $id
 * @property int $main_id
 * @property int $item51
 * @property int $item52
 * @property int $item53
 * @property int $item54
 * @property int $item55
 * @property int $item56
 * @property int $item57
 * @property int $item58
 * @property int $item59
 * @property int $item60
 */
class Terbuka extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_terbuka';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item51', 'item52', 'item53', 'item54', 'item55', 'item56', 'item57', 'item58', 'item59', 'item60'], 'required'],
            [['main_id', 'item51', 'item52', 'item53', 'item54', 'item55', 'item56', 'item57', 'item58', 'item59', 'item60'], 'integer'],
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
            'item51' => 'Item51',
            'item52' => 'Item52',
            'item53' => 'Item53',
            'item54' => 'Item54',
            'item55' => 'Item55',
            'item56' => 'Item56',
            'item57' => 'Item57',
            'item58' => 'Item58',
            'item59' => 'Item59',
            'item60' => 'Item60',
        ];
    }
}
