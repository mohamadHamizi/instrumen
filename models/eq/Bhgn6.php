<?php

namespace app\models\eq;

use Yii;

/**
 * This is the model class for table "eq_bhgn6".
 *
 * @property int $id
 * @property int $main_id
 * @property int $item1
 * @property int $item2
 * @property int $item3
 * @property int $item4
 * @property int $item5
 * @property int $item6
 */
class Bhgn6 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eq_bhgn6';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6'], 'required'],
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6'], 'integer'],
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
            'item1' => 'Item1',
            'item2' => 'Item2',
            'item3' => 'Item3',
            'item4' => 'Item4',
            'item5' => 'Item5',
            'item6' => 'Item6',
        ];
    }
}
