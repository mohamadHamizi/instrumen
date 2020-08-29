<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mea_result".
 *
 * @property string $tret
 * @property string $rumusan
 */
class MeaResult extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mea_result';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tret'], 'required'],
            [['rumusan'], 'string'],
            [['tret'], 'string', 'max' => 4],
            [['tret'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tret' => 'Tret',
            'rumusan' => 'Rumusan',
        ];
    }

    public static function tret($j1,$j2,$j3,$j4){

        $tret = $j1.$j2.$j3.$j4;

        $model = MeaResult::findOne(['tret'=>$tret]);

        return $model;
    }
}
