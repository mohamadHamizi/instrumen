<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "mipk_questions".
 *
 * @property int $id
 * @property string $pernyataan
 */
class MipkQuestions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mipk_questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pernyataan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pernyataan' => 'Pernyataan',
        ];
    }

    public static function getProvider(){
        
        $provider = new ActiveDataProvider([
            'query' => self::find()->orderBy(['id' => SORT_ASC]),
            'pagination' => false,
        ]);
        
        return $provider;
        
    }
}
