<?php

namespace app\models\hexaco;

use Yii;

/**
 * This is the model class for table "hexaco_keberhemahan".
 *
 * @property int $id
 * @property int $main_id
 * @property int $item41
 * @property int $item42
 * @property int $item43
 * @property int $item44
 * @property int $item45
 * @property int $item46
 * @property int $item47
 * @property int $item48
 * @property int $item49
 * @property int $item50
 */
class Keberhemahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_keberhemahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item41', 'item42', 'item43', 'item44', 'item45', 'item46', 'item47', 'item48', 'item49', 'item50'], 'required'],
            [['main_id', 'item41', 'item42', 'item43', 'item44', 'item45', 'item46', 'item47', 'item48', 'item49', 'item50'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'main_id' => 'Main ID',
            'item41' => 'Item41',
            'item42' => 'Item42',
            'item43' => 'Item43',
            'item44' => 'Item44',
            'item45' => 'Item45',
            'item46' => 'Item46',
            'item47' => 'Item47',
            'item48' => 'Item48',
            'item49' => 'Item49',
            'item50' => 'Item50',
        ];
    }
}
