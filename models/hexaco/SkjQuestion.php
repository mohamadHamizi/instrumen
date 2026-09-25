<?php

namespace app\models\hexaco;

use Yii;

/**
 * This is the model class for table "hexaco_skj_questions".
 *
 * @property int $id
 * @property int $section
 * @property string $code
 * @property string $pernyataan
 */
class SkjQuestion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_skj_questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section'], 'required'],
            [['section'], 'integer', 'min' => 1, 'max' => 6],
            [['code'], 'required'],
            [['code'], 'string', 'max' => 5],
            [['pernyataan'], 'required'],
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
            'section' => 'Section',
            'code' => 'Code',
            'pernyataan' => 'Pernyataan',
        ];
    }

    /**
     * Returns the single SKJ question definition for a given section (1-6).
     *
     * @param int $section
     * @return SkjQuestion|null
     */
    public static function getBySection($section)
    {
        return self::find()->where(['section' => $section])->one();
    }
}
