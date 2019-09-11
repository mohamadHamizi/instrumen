<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_totals".
 *
 * @property int $id
 * @property int $main_id
 * @property int $group_id
 * @property int $skor
 */
class OkuTotals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_totals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'group_id', 'skor'], 'integer'],
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
            'group_id' => 'Group ID',
            'skor' => 'Skor',
        ];
    }
}
