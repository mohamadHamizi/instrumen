<?php

namespace app\models\hexaco;

use Yii;

/**
 * This is the model class for table "hexaco_kebersetujuan".
 *
 * @property int $id
 * @property int $main_id
 * @property int $item31
 * @property int $item32
 * @property int $item33
 * @property int $item34
 * @property int $item35
 * @property int $item36
 * @property int $item37
 * @property int $item38
 * @property int $item39
 * @property int $item40
 */
class Kebersetujuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_kebersetujuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item31', 'item32', 'item33', 'item34', 'item35', 'item36', 'item37', 'item38', 'item39', 'item40'], 'required'],
            [['main_id', 'item31', 'item32', 'item33', 'item34', 'item35', 'item36', 'item37', 'item38', 'item39', 'item40'], 'integer'],
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
            'item31' => 'Item31',
            'item32' => 'Item32',
            'item33' => 'Item33',
            'item34' => 'Item34',
            'item35' => 'Item35',
            'item36' => 'Item36',
            'item37' => 'Item37',
            'item38' => 'Item38',
            'item39' => 'Item39',
            'item40' => 'Item40',
        ];
    }
}
