<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mea_jadual1".
 *
 * @property int $id
 * @property int $main_id
 * @property int $no1_p1_anda
 * @property int $no1_p1_bos
 * @property int $no1_p2_anda
 * @property int $no1_p2_bos
 * @property int $no2_p1_anda
 * @property int $no2_p1_bos
 * @property int $no2_p2_anda
 * @property int $no2_p2_bos
 * @property int $no3_p1_anda
 * @property int $no3_p1_bos
 * @property int $no3_p2_anda
 * @property int $no3_p2_bos
 * @property int $no4_p1_anda
 * @property int $no4_p1_bos
 * @property int $no4_p2_anda
 * @property int $no4_p2_bos
 * @property int $no5_p1_anda
 * @property int $no5_p1_bos
 * @property int $no5_p2_anda
 * @property int $no5_p2_bos
 * @property int $no6_p1_anda
 * @property int $no6_p1_bos
 * @property int $no6_p2_anda
 * @property int $no6_p2_bos
 * @property int $no7_p1_anda
 * @property int $no7_p1_bos
 * @property int $no7_p2_anda
 * @property int $no7_p2_bos
 * @property int $total_anda
 * @property int $total_ketua
 */
class Jadual1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mea_jadual1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'no1_p1_anda', 'no1_p1_bos', 'no1_p2_anda', 'no1_p2_bos', 'no2_p1_anda', 'no2_p1_bos', 'no2_p2_anda', 'no2_p2_bos', 'no3_p1_anda', 'no3_p1_bos', 'no3_p2_anda', 'no3_p2_bos', 'no4_p1_anda', 'no4_p1_bos', 'no4_p2_anda', 'no4_p2_bos', 'no5_p1_anda', 'no5_p1_bos', 'no5_p2_anda', 'no5_p2_bos', 'no6_p1_anda', 'no6_p1_bos', 'no6_p2_anda', 'no6_p2_bos', 'no7_p1_anda', 'no7_p1_bos', 'no7_p2_anda', 'no7_p2_bos', 'total_anda', 'total_ketua'], 'integer'],
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
            'no1_p1_anda' => 'No1 P1 Anda',
            'no1_p1_bos' => 'No1 P1 Bos',
            'no1_p2_anda' => 'No1 P2 Anda',
            'no1_p2_bos' => 'No1 P2 Bos',
            'no2_p1_anda' => 'No2 P1 Anda',
            'no2_p1_bos' => 'No2 P1 Bos',
            'no2_p2_anda' => 'No2 P2 Anda',
            'no2_p2_bos' => 'No2 P2 Bos',
            'no3_p1_anda' => 'No3 P1 Anda',
            'no3_p1_bos' => 'No3 P1 Bos',
            'no3_p2_anda' => 'No3 P2 Anda',
            'no3_p2_bos' => 'No3 P2 Bos',
            'no4_p1_anda' => 'No4 P1 Anda',
            'no4_p1_bos' => 'No4 P1 Bos',
            'no4_p2_anda' => 'No4 P2 Anda',
            'no4_p2_bos' => 'No4 P2 Bos',
            'no5_p1_anda' => 'No5 P1 Anda',
            'no5_p1_bos' => 'No5 P1 Bos',
            'no5_p2_anda' => 'No5 P2 Anda',
            'no5_p2_bos' => 'No5 P2 Bos',
            'no6_p1_anda' => 'No6 P1 Anda',
            'no6_p1_bos' => 'No6 P1 Bos',
            'no6_p2_anda' => 'No6 P2 Anda',
            'no6_p2_bos' => 'No6 P2 Bos',
            'no7_p1_anda' => 'No7 P1 Anda',
            'no7_p1_bos' => 'No7 P1 Bos',
            'no7_p2_anda' => 'No7 P2 Anda',
            'no7_p2_bos' => 'No7 P2 Bos',
            'total_anda' => 'Total Anda',
            'total_ketua' => 'Total Ketua',
        ];
    }
}
