<?php

namespace app\models\sdts;

use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sdts_questions".
 *
 * @property int $id
 * @property string $item
 * @property string $pernyataan
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sdts_questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item'], 'string', 'max' => 2],
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
            'item' => 'Item',
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

    public static function findQuestion()
    {

        $model = self::find()->where([])->all();
     
        $data = ArrayHelper::map($model,'item','pernyataan');

        return $data;
    }
}
