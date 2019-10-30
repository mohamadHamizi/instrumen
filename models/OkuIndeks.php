<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_indeks".
 *
 * @property int $id
 * @property double $indeks
 * @property string $create_dt
 */
class OkuIndeks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_indeks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['indeks'], 'number'],
            [['create_dt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'indeks' => 'Indeks',
            'create_dt' => 'Create Dt',
        ];
    }
}
