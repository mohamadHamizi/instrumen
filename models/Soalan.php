<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mea_soalan".
 *
 * @property int $id
 * @property int $jadual
 * @property string $persepsi
 * @property string $pil_1
 * @property string $pil_2
 * @property int $no
 * @property string $code_1_1
 * @property string $code_1_2
 * @property string $code_2_1
 * @property string $code_2_2
 */
class Soalan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mea_soalan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jadual', 'no'], 'integer'],
            [['persepsi', 'pil_1', 'pil_2'], 'string', 'max' => 200],
            [['code_1_1', 'code_1_2', 'code_2_1', 'code_2_2'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jadual' => 'Jadual',
            'persepsi' => 'Persepsi',
            'pil_1' => 'Pil 1',
            'pil_2' => 'Pil 2',
            'no' => 'No',
            'code_1_1' => 'Code 1 1',
            'code_1_2' => 'Code 1 2',
            'code_2_1' => 'Code 2 1',
            'code_2_2' => 'Code 2 2',
        ];
    }
}
