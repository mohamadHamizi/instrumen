<?php

namespace app\models\bfi;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "tipi_questions".
 *
 * @property int $id
 * @property string $pernyataan
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bfi_questions';
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
