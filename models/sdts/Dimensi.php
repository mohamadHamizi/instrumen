<?php

namespace app\models\sdts;

use Yii;

/**
 * This is the model class for table "sdts_dimensi".
 *
 * @property int $id
 * @property int $main_id
 * @property double $agama
 * @property double $masalah
 * @property double $interaksi
 * @property double $produktif
 * @property double $rakan
 */
class Dimensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sdts_dimensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id'], 'integer'],
            [['agama', 'masalah', 'interaksi', 'produktif', 'rakan'], 'number'],
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
            'agama' => 'Agama',
            'masalah' => 'Masalah',
            'interaksi' => 'Interaksi',
            'produktif' => 'Produktif',
            'rakan' => 'Rakan',
        ];
    }
}
