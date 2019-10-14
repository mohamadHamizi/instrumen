<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_ref_demo".
 *
 * @property int $id
 * @property int $pd
 * @property int $key
 * @property string $value
 */
class OkuRefDemo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_ref_demo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pd', 'key'], 'integer'],
            [['value'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pd' => 'Pd',
            'key' => 'Key',
            'value' => 'Value',
        ];
    }
}
