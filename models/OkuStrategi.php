<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_strategi".
 *
 * @property int $id
 * @property int $main_id
 * @property int $c1
 * @property int $c2
 * @property int $c3
 * @property int $c4
 * @property int $c5
 * @property int $c6
 * @property int $c7
 * @property int $c8
 * @property int $c9
 * @property int $c10
 * @property int $c11
 * @property int $c12
 * @property int $c13
 * @property int $c14
 * @property int $c15
 * @property int $c16
 * @property int $c17
 * @property int $c18
 * @property int $c19
 * @property int $c20
 * @property int $c21
 * @property int $c22
 * @property int $c23
 * @property int $c24
 * @property int $c25
 * @property int $c26
 * @property int $c27
 * @property int $c28
 * @property int $c29
 * @property int $c30
 * @property int $c31
 * @property int $c32
 * @property int $c33
 * @property int $c34
 * @property int $c35
 * @property int $c36
 * @property int $c37
 * @property int $c38
 * @property int $c39
 * @property int $c40
 * @property int $c41
 * @property int $c42
 * @property int $c43
 * @property int $c44
 * @property int $c45
 * @property int $c46
 * @property int $c47
 * @property int $c48
 * @property int $c49
 * @property int $c50
 * @property int $c51
 * @property int $c52
 * @property int $c53
 * @property int $c54
 * @property int $c55
 * @property int $c56
 * @property int $c57
 * @property int $c58
 * @property int $c59
 */
class OkuStrategi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_strategi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'c10', 'c11', 'c12', 'c13', 'c14', 'c15', 'c16', 'c17', 'c18', 'c19', 'c20', 'c21', 'c22', 'c23', 'c24', 'c25', 'c26', 'c27', 'c28', 'c29', 'c30', 'c31', 'c32', 'c33', 'c34', 'c35', 'c36', 'c37', 'c38', 'c39', 'c40', 'c41', 'c42', 'c43', 'c44', 'c45', 'c46', 'c47', 'c48', 'c49', 'c50', 'c51', 'c52', 'c53', 'c54', 'c55', 'c56', 'c57', 'c58', 'c59'], 'required', 'message'=>"Ruangan ini adalah wajib!"],
            [['main_id', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'c10', 'c11', 'c12', 'c13', 'c14', 'c15', 'c16', 'c17', 'c18', 'c19', 'c20', 'c21', 'c22', 'c23', 'c24', 'c25', 'c26', 'c27', 'c28', 'c29', 'c30', 'c31', 'c32', 'c33', 'c34', 'c35', 'c36', 'c37', 'c38', 'c39', 'c40', 'c41', 'c42', 'c43', 'c44', 'c45', 'c46', 'c47', 'c48', 'c49', 'c50', 'c51', 'c52', 'c53', 'c54', 'c55', 'c56', 'c57', 'c58', 'c59'], 'integer'],
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
            'c1' => 'C1',
            'c2' => 'C2',
            'c3' => 'C3',
            'c4' => 'C4',
            'c5' => 'C5',
            'c6' => 'C6',
            'c7' => 'C7',
            'c8' => 'C8',
            'c9' => 'C9',
            'c10' => 'C10',
            'c11' => 'C11',
            'c12' => 'C12',
            'c13' => 'C13',
            'c14' => 'C14',
            'c15' => 'C15',
            'c16' => 'C16',
            'c17' => 'C17',
            'c18' => 'C18',
            'c19' => 'C19',
            'c20' => 'C20',
            'c21' => 'C21',
            'c22' => 'C22',
            'c23' => 'C23',
            'c24' => 'C24',
            'c25' => 'C25',
            'c26' => 'C26',
            'c27' => 'C27',
            'c28' => 'C28',
            'c29' => 'C29',
            'c30' => 'C30',
            'c31' => 'C31',
            'c32' => 'C32',
            'c33' => 'C33',
            'c34' => 'C34',
            'c35' => 'C35',
            'c36' => 'C36',
            'c37' => 'C37',
            'c38' => 'C38',
            'c39' => 'C39',
            'c40' => 'C40',
            'c41' => 'C41',
            'c42' => 'C42',
            'c43' => 'C43',
            'c44' => 'C44',
            'c45' => 'C45',
            'c46' => 'C46',
            'c47' => 'C47',
            'c48' => 'C48',
            'c49' => 'C49',
            'c50' => 'C50',
            'c51' => 'C51',
            'c52' => 'C52',
            'c53' => 'C53',
            'c54' => 'C54',
            'c55' => 'C55',
            'c56' => 'C56',
            'c57' => 'C57',
            'c58' => 'C58',
            'c59' => 'C59',
        ];
    }
}
