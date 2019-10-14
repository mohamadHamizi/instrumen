<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_totals".
 *
 * @property int $id
 * @property int $main_id
 * @property double $kp
 * @property double $pn
 * @property double $al
 * @property double $ap
 * @property double $an
 * @property double $kr
 * @property double $pp
 * @property double $hb
 * @property double $sk
 * @property double $sr
 * @property double $si
 * @property double $pr
 * @property double $kb
 * @property double $ks
 * @property double $kn
 * @property double $pc
 * @property double $kf
 * @property double $hi
 * @property double $rk
 * @property double $jn
 * @property double $ka
 * @property double $pm
 * @property double $us
 * @property double $bp
 * @property double $bd
 * @property double $in
 * @property double $as
 * @property double $em
 * @property double $pi
 * @property double $kh
 */
class OkuTotals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_totals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id'], 'integer'],
            [['kp', 'pn', 'al', 'ap', 'an', 'kr', 'pp', 'hb', 'sk', 'sr', 'si', 'pr', 'kb', 'ks', 'kn', 'pc', 'kf', 'hi', 'rk', 'jn', 'ka', 'pm', 'us', 'bp', 'bd', 'in', 'as', 'em', 'pi', 'kh'], 'number'],
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
            'kp' => 'Kp',
            'pn' => 'Pn',
            'al' => 'Al',
            'ap' => 'Ap',
            'an' => 'An',
            'kr' => 'Kr',
            'pp' => 'Pp',
            'hb' => 'Hb',
            'sk' => 'Sk',
            'sr' => 'Sr',
            'si' => 'Si',
            'pr' => 'Pr',
            'kb' => 'Kb',
            'ks' => 'Ks',
            'kn' => 'Kn',
            'pc' => 'Pc',
            'kf' => 'Kf',
            'hi' => 'Hi',
            'rk' => 'Rk',
            'jn' => 'Jn',
            'ka' => 'Ka',
            'pm' => 'Pm',
            'us' => 'Us',
            'bp' => 'Bp',
            'bd' => 'Bd',
            'in' => 'In',
            'as' => 'As',
            'em' => 'Em',
            'pi' => 'Pi',
            'kh' => 'Kh',
        ];
    }
}
