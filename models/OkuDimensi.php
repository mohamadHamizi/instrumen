<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_dimensi".
 *
 * @property int $id
 * @property int $main_id
 * @property int $a1
 * @property int $a2
 * @property int $a3
 * @property int $a4
 * @property int $a5
 * @property int $a6
 * @property int $a7
 * @property int $a8
 * @property int $a9
 * @property int $a10
 * @property int $a11
 * @property int $a12
 * @property int $a13
 * @property int $a14
 * @property int $a15
 * @property int $a16
 * @property int $a17
 * @property int $a18
 * @property int $a19
 * @property int $a20
 * @property int $a21
 * @property int $a22
 * @property int $a23
 * @property int $a24
 * @property int $a25
 * @property int $a26
 * @property int $a27
 * @property int $a28
 * @property int $a29
 * @property int $a30
 * @property int $a31
 * @property int $a32
 * @property int $a33
 * @property int $a34
 * @property int $a35
 * @property int $a36
 * @property int $a37
 * @property int $a38
 * @property int $a39
 * @property int $a40
 * @property int $a41
 * @property int $a42
 * @property int $a43
 * @property int $a44
 * @property int $a45
 * @property int $a46
 * @property int $a47
 * @property int $a48
 * @property int $a49
 * @property int $a50
 * @property int $a51
 * @property int $a52
 * @property int $a53
 * @property int $a54
 * @property int $a55
 * @property int $a56
 * @property int $a57
 * @property int $a58
 */
class OkuDimensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_dimensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'a11', 'a12', 'a13', 'a14', 'a15', 'a16', 'a17', 'a18', 'a19', 'a20', 'a21', 'a22', 'a23', 'a24', 'a25', 'a26', 'a27', 'a28', 'a29', 'a30', 'a31', 'a32', 'a33', 'a34', 'a35', 'a36', 'a37', 'a38', 'a39', 'a40', 'a41', 'a42', 'a43', 'a44', 'a45', 'a46', 'a47', 'a48', 'a49', 'a50', 'a51', 'a52', 'a53', 'a54', 'a55', 'a56', 'a57', 'a58'], 'required', 'message'=>"Ruangan ini adalah wajib!"],
            [['main_id', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'a9', 'a10', 'a11', 'a12', 'a13', 'a14', 'a15', 'a16', 'a17', 'a18', 'a19', 'a20', 'a21', 'a22', 'a23', 'a24', 'a25', 'a26', 'a27', 'a28', 'a29', 'a30', 'a31', 'a32', 'a33', 'a34', 'a35', 'a36', 'a37', 'a38', 'a39', 'a40', 'a41', 'a42', 'a43', 'a44', 'a45', 'a46', 'a47', 'a48', 'a49', 'a50', 'a51', 'a52', 'a53', 'a54', 'a55', 'a56', 'a57', 'a58'], 'integer'],
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
            'a1' => 'A1',
            'a2' => 'A2',
            'a3' => 'A3',
            'a4' => 'A4',
            'a5' => 'A5',
            'a6' => 'A6',
            'a7' => 'A7',
            'a8' => 'A8',
            'a9' => 'A9',
            'a10' => 'A10',
            'a11' => 'A11',
            'a12' => 'A12',
            'a13' => 'A13',
            'a14' => 'A14',
            'a15' => 'A15',
            'a16' => 'A16',
            'a17' => 'A17',
            'a18' => 'A18',
            'a19' => 'A19',
            'a20' => 'A20',
            'a21' => 'A21',
            'a22' => 'A22',
            'a23' => 'A23',
            'a24' => 'A24',
            'a25' => 'A25',
            'a26' => 'A26',
            'a27' => 'A27',
            'a28' => 'A28',
            'a29' => 'A29',
            'a30' => 'A30',
            'a31' => 'A31',
            'a32' => 'A32',
            'a33' => 'A33',
            'a34' => 'A34',
            'a35' => 'A35',
            'a36' => 'A36',
            'a37' => 'A37',
            'a38' => 'A38',
            'a39' => 'A39',
            'a40' => 'A40',
            'a41' => 'A41',
            'a42' => 'A42',
            'a43' => 'A43',
            'a44' => 'A44',
            'a45' => 'A45',
            'a46' => 'A46',
            'a47' => 'A47',
            'a48' => 'A48',
            'a49' => 'A49',
            'a50' => 'A50',
            'a51' => 'A51',
            'a52' => 'A52',
            'a53' => 'A53',
            'a54' => 'A54',
            'a55' => 'A55',
            'a56' => 'A56',
            'a57' => 'A57',
            'a58' => 'A58',
        ];
    }
}
