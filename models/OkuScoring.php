<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_scoring".
 *
 * @property int $id
 * @property int $group_id
 * @property int $skor
 * @property double $scale
 * @property string $tahap
 * @property string $deskripsi
 */
class OkuScoring extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_scoring';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id'], 'required'],
            [['group_id', 'skor'], 'integer'],
            [['scale'], 'number'],
            [['deskripsi'], 'string'],
            [['tahap'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'skor' => 'Skor',
            'scale' => 'Scale',
            'tahap' => 'Tahap',
            'deskripsi' => 'Deskripsi',
        ];
    }
}
