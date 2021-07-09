<?php

namespace app\models\hexaco;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "hexaco_questions".
 *
 * @property int $id
 * @property int $dimensi_id
 * @property string $sub_dimensi
 * @property string $pernyataan
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dimensi_id', 'sub_dimensi', 'pernyataan'], 'required'],
            [['dimensi_id'], 'integer'],
            [['pernyataan'], 'string'],
            [['sub_dimensi'], 'string', 'max' => 22],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dimensi_id' => 'Dimensi ID',
            'sub_dimensi' => 'Sub Dimensi',
            'pernyataan' => 'Pernyataan',
        ];
    }

    public static function getProvider($dimensi_id)
    {
        $provider = new ActiveDataProvider([
            'query' => self::find()->where(['dimensi_id'=>$dimensi_id])->orderBy(['id' => SORT_ASC]),
            'pagination' => false,
        ]);

        return $provider;
    }
}
