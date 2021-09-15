<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_bhgn_e".
 *
 * @property int $id
 * @property int $main_id
 * @property int $e1
 * @property int $e2
 * @property int $e3
 * @property int $e4
 * @property int $e5
 */
class OkuBhgnE extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_bhgn_e';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'e1', 'e2', 'e3', 'e4', 'e5'], 'required'],
            [['main_id', 'e1', 'e2', 'e3', 'e4', 'e5'], 'integer'],
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
            'e1' => 'E1',
            'e2' => 'E2',
            'e3' => 'E3',
            'e4' => 'E4',
            'e5' => 'E5',
        ];
    }

    public function getSkor()
    {

        $maxSkor = 25;
        $minSkor = 5;
        $jumlahSkor = $this->e1+$this->e2+$this->e3+$this->e4+$this->e5;

        $indeks = ($jumlahSkor - $minSkor) / ($maxSkor - $minSkor) * 100;

        return round($indeks, 2);
    }
}
