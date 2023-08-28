<?php

namespace app\models\eqbi;

use Yii;

/**
 * This is the model class for table "eqbi_bhgn1".
 *
 * @property int $id
 * @property int $main_id
 * @property int $item1
 * @property int $item2
 * @property int $item3
 * @property int $item4
 * @property int $item5
 * @property int $item6
 * @property int $item7
 * @property int $item8
 * @property int $item9
 * @property int $item10
 * @property int $item11
 * @property int $item12
 * @property int $item13
 * @property int $item14
 * @property int $item15
 * @property int $item16
 * @property int $item17
 * @property int $item18
 * @property int $item19
 * @property int $item20
 * @property int $item21
 * @property int $item22
 * @property int $item23
 * @property int $item24
 * @property int $item25
 * @property int $item26
 * @property int $item27
 * @property int $item28
 * @property int $item29
 * @property int $item30
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
class Bhgn1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eqbi_bhgn1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11', 'item12', 'item13', 'item14', 'item15', 'item16', 'item17', 'item18', 'item19', 'item20', 'item21', 'item22', 'item23', 'item24', 'item25', 'item26', 'item27', 'item28', 'item29', 'item30', 'item31', 'item32', 'item33', 'item34', 'item35', 'item36', 'item37', 'item38', 'item39', 'item40'], 'required'],
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11', 'item12', 'item13', 'item14', 'item15', 'item16', 'item17', 'item18', 'item19', 'item20', 'item21', 'item22', 'item23', 'item24', 'item25', 'item26', 'item27', 'item28', 'item29', 'item30', 'item31', 'item32', 'item33', 'item34', 'item35', 'item36', 'item37', 'item38', 'item39', 'item40'], 'integer'],
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
            'item1' => 'Item1',
            'item2' => 'Item2',
            'item3' => 'Item3',
            'item4' => 'Item4',
            'item5' => 'Item5',
            'item6' => 'Item6',
            'item7' => 'Item7',
            'item8' => 'Item8',
            'item9' => 'Item9',
            'item10' => 'item10',
            'item11' => 'Item11',
            'item12' => 'Item12',
            'item13' => 'Item13',
            'item14' => 'Item14',
            'item15' => 'Item15',
            'item16' => 'Item16',
            'item17' => 'Item17',
            'item18' => 'Item18',
            'item19' => 'Item19',
            'item20' => 'item20',
            'item21' => 'Item21',
            'item22' => 'Item22',
            'item23' => 'Item23',
            'item24' => 'Item24',
            'item25' => 'Item25',
            'item26' => 'Item26',
            'item27' => 'Item27',
            'item28' => 'Item28',
            'item29' => 'Item29',
            'item30' => 'item30',
            'item31' => 'Item31',
            'item32' => 'Item32',
            'item33' => 'Item33',
            'item34' => 'Item34',
            'item35' => 'Item35',
            'item36' => 'Item36',
            'item37' => 'Item37',
            'item38' => 'Item38',
            'item39' => 'Item39',
            'item40' => 'item40',
        ];
    }
}
