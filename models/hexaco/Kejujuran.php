<?php

namespace app\models\hexaco;

use Yii;

/**
 * This is the model class for table "hexaco_kejujuran".
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
 */
class Kejujuran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_kejujuran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10'], 'required'],
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10'], 'integer'],
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
        ];
    }
}
