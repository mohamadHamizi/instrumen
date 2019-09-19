<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_groups".
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $shortname
 */
class OkuGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 150],
            [['shortname'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'Name',
            'shortname' => 'Shortname',
        ];
    }
    
    public static function groupLabel($type){
        
        $groups = OkuGroups::findAll(['type' => $type]);
        
        $label = [];
        
        foreach ($groups as $a){
            $label[] = $a->shortname;
        }
        
        return $label;
    }
}
