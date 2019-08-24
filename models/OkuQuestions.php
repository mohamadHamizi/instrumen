<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "oku_questions".
 *
 * @property int $id
 * @property int $group_id
 * @property string $type
 * @property string $code
 * @property string $pernyataan
 */
class OkuQuestions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id'], 'integer'],
            [['type', 'code'], 'string', 'max' => 5],
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
            'group_id' => 'Group ID',
            'type' => 'Type',
            'code' => 'Code',
            'pernyataan' => 'Pernyataan',
        ];
    }
    
    public function getSmallCode(){
        return strtolower($this->code);
    }
    
    public static function getProvider($group_id, $type){
        
        $provider = new ActiveDataProvider([
            'query' => self::find()->where(['group_id'=>$group_id, 'type'=>$type])->orderBy(['id' => SORT_ASC]),
            'pagination' => false,
        ]);
        
        return $provider;
        
    }
}
