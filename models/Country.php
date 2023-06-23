<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "e_instrumen.country".
 *
 * @property string $CountryCd
 * @property string $Country
 * @property int $StudyExtPeriod
 * @property string $CountryCdMM
 * @property int $isActive
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'e_instrumen.country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CountryCd'], 'required'],
            [['StudyExtPeriod', 'isActive'], 'integer'],
            [['CountryCd'], 'string', 'max' => 3],
            [['Country'], 'string', 'max' => 255],
            [['CountryCdMM'], 'string', 'max' => 20],
            [['CountryCd'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CountryCd' => 'Country Cd',
            'Country' => 'Country',
            'StudyExtPeriod' => 'Study Ext Period',
            'CountryCdMM' => 'Country Cd Mm',
            'isActive' => 'Is Active',
        ];
    }
}
