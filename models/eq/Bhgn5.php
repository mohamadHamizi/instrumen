<?php

namespace app\models\eq;

use Yii;

/**
 * This is the model class for table "eq_bhgn5".
 *
 * @property int $id
 * @property int $main_id
 * @property int $item1
 * @property int $item2
 * @property int $item3
 * @property int $item4
 * @property int $item5
 * @property int $item6
 * @property int $item7
 * @property int $item8
 * @property int $item9
 * @property int $item10
 * @property int $item11
 * @property int $item12
 * @property int $item13
 * @property int $item14
 */
class Bhgn5 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eq_bhgn5';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11', 'item12', 'item13', 'item14'], 'required'],
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11', 'item12', 'item13', 'item14'], 'integer'],
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
            'item7' => 'Item7',
            'item8' => 'Item8',
            'item9' => 'Item9',
            'item10' => 'Item10',
            'item11' => 'Item11',
            'item12' => 'Item12',
            'item13' => 'Item13',
            'item14' => 'Item14',
        ];
    }
}
