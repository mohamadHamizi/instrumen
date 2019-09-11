<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_sumber".
 *
 * @property int $id
 * @property int $main_id
 * @property int $b1
 * @property int $b2
 * @property int $b3
 * @property int $b4
 * @property int $b5
 * @property int $b6
 * @property int $b7
 * @property int $b8
 * @property int $b9
 * @property int $b10
 * @property int $b11
 * @property int $b12
 * @property int $b13
 * @property int $b14
 * @property int $b15
 * @property int $b16
 * @property int $b17
 * @property int $b18
 * @property int $b19
 * @property int $b20
 * @property int $b21
 * @property int $b22
 * @property int $b23
 * @property int $b24
 * @property int $b25
 * @property int $b26
 * @property int $b27
 * @property int $b28
 * @property int $b29
 * @property int $b30
 * @property int $b31
 * @property int $b32
 * @property int $b33
 * @property int $b34
 * @property int $b35
 * @property int $b36
 * @property int $b37
 * @property int $b38
 * @property int $b39
 * @property int $b40
 * @property int $b41
 * @property int $b42
 * @property int $b43
 * @property int $b44
 * @property int $b45
 * @property int $b46
 * @property int $b47
 * @property int $b48
 * @property int $b49
 * @property int $b50
 * @property int $b51
 * @property int $b52
 * @property int $b53
 * @property int $b54
 * @property int $b55
 * @property int $b56
 * @property int $b57
 * @property int $b58
 * @property int $b59
 * @property int $b60
 * @property int $b61
 * @property int $b62
 */
class OkuSumber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_sumber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'b13', 'b14', 'b15', 'b16', 'b17', 'b18', 'b19', 'b20', 'b21', 'b22', 'b23', 'b24', 'b25', 'b26', 'b27', 'b28', 'b29', 'b30', 'b31', 'b32', 'b33', 'b34', 'b35', 'b36', 'b37', 'b38', 'b39', 'b40', 'b41', 'b42', 'b43', 'b44', 'b45', 'b46', 'b47', 'b48', 'b49', 'b50', 'b51', 'b52', 'b53', 'b54', 'b55', 'b56', 'b57', 'b58', 'b59', 'b60', 'b61', 'b62'], 'required', 'message'=>"Ruangan ini adalah wajib!"],
            [['main_id', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'b13', 'b14', 'b15', 'b16', 'b17', 'b18', 'b19', 'b20', 'b21', 'b22', 'b23', 'b24', 'b25', 'b26', 'b27', 'b28', 'b29', 'b30', 'b31', 'b32', 'b33', 'b34', 'b35', 'b36', 'b37', 'b38', 'b39', 'b40', 'b41', 'b42', 'b43', 'b44', 'b45', 'b46', 'b47', 'b48', 'b49', 'b50', 'b51', 'b52', 'b53', 'b54', 'b55', 'b56', 'b57', 'b58', 'b59', 'b60', 'b61', 'b62'], 'integer'],
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
            'b1' => 'B1',
            'b2' => 'B2',
            'b3' => 'B3',
            'b4' => 'B4',
            'b5' => 'B5',
            'b6' => 'B6',
            'b7' => 'B7',
            'b8' => 'B8',
            'b9' => 'B9',
            'b10' => 'B10',
            'b11' => 'B11',
            'b12' => 'B12',
            'b13' => 'B13',
            'b14' => 'B14',
            'b15' => 'B15',
            'b16' => 'B16',
            'b17' => 'B17',
            'b18' => 'B18',
            'b19' => 'B19',
            'b20' => 'B20',
            'b21' => 'B21',
            'b22' => 'B22',
            'b23' => 'B23',
            'b24' => 'B24',
            'b25' => 'B25',
            'b26' => 'B26',
            'b27' => 'B27',
            'b28' => 'B28',
            'b29' => 'B29',
            'b30' => 'B30',
            'b31' => 'B31',
            'b32' => 'B32',
            'b33' => 'B33',
            'b34' => 'B34',
            'b35' => 'B35',
            'b36' => 'B36',
            'b37' => 'B37',
            'b38' => 'B38',
            'b39' => 'B39',
            'b40' => 'B40',
            'b41' => 'B41',
            'b42' => 'B42',
            'b43' => 'B43',
            'b44' => 'B44',
            'b45' => 'B45',
            'b46' => 'B46',
            'b47' => 'B47',
            'b48' => 'B48',
            'b49' => 'B49',
            'b50' => 'B50',
            'b51' => 'B51',
            'b52' => 'B52',
            'b53' => 'B53',
            'b54' => 'B54',
            'b55' => 'B55',
            'b56' => 'B56',
            'b57' => 'B57',
            'b58' => 'B58',
            'b59' => 'B59',
            'b60' => 'B60',
            'b61' => 'B61',
            'b62' => 'B62',
        ];
    }
    
    public static function GroupSkor($group_id, $main_id) {

        $q = OkuQuestions::findAll(['group_id' => $group_id]);

        $arr = '';
        $skor = 0;

        foreach ($q as $v) {
            $arr .= strtolower($v->code) . ',';
        }

        $model = OkuSumber::find()
                ->select("$arr")
                ->where(['main_id' => $main_id])
                ->one();

        foreach($model as $key => $val){
            $skor += $val;
        }
        
        return $skor;
    }

    public function getKepuasan() {
        return $this->GroupSkor(1, $this->main_id);
    }
    public function getSokonganPenjaga() {
        return $this->GroupSkor(2, $this->main_id);
    }
    public function getSokonganRakan() {
        return $this->GroupSkor(3, $this->main_id);
    }
    public function getSokonganInstitusi() {
        return $this->GroupSkor(4, $this->main_id);
    }
    public function getPeralatan() {
        return $this->GroupSkor(5, $this->main_id);
    }
    public function getAksesibiliti() {
        return $this->GroupSkor(6, $this->main_id);
    }
    public function getKesaksamaan() {
        return $this->GroupSkor(7, $this->main_id);
    }
    public function getKebebasan() {
        return $this->GroupSkor(8, $this->main_id);
    }
    public function getPencapaian() {
        return $this->GroupSkor(9, $this->main_id);
    }
    public function getKesihatanFizikal() {
        return $this->GroupSkor(10, $this->main_id);
    }
}
