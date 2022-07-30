<?php

namespace app\models\sdts;

use Yii;

/**
 * This is the model class for table "sdts_items".
 *
 * @property int $id
 * @property int $main_id
 * @property int $a1
 * @property int $a2
 * @property int $a3
 * @property int $b1
 * @property int $b2
 * @property int $c1
 * @property int $c2
 * @property int $c3
 * @property int $c4
 * @property int $d1
 * @property int $d2
 * @property int $d3
 * @property int $e1
 * @property int $e2
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sdts_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'a1', 'a2', 'a3', 'b1', 'b2', 'c1', 'c2', 'c3', 'c4', 'd1', 'd2', 'd3', 'e1', 'e2'], 'required'],
            [['main_id', 'a1', 'a2', 'a3', 'b1', 'b2', 'c1', 'c2', 'c3', 'c4', 'd1', 'd2', 'd3', 'e1', 'e2'], 'integer'],
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
            'a1' => 'A 1',
            'a2' => 'A 2',
            'a3' => 'A 3',
            'b1' => 'B 1',
            'b2' => 'B 2',
            'c1' => 'C 1',
            'c2' => 'C 2',
            'c3' => 'C 3',
            'c4' => 'C 4',
            'd1' => 'D 1',
            'd2' => 'D 2',
            'd3' => 'D 3',
            'e1' => 'E 1',
            'e2' => 'E 2',
        ];
    }
}
