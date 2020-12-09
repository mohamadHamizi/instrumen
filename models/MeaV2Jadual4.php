<?php

namespace app\models;

use Yii;
use app\models\MeaV2Main;
/**
 * This is the model class for table "mea_v2_jadual4".
 *
 * @property int $id
 * @property int $main_id
 * @property int $r1_anda
 * @property int $r1_pen_1
 * @property int $r1_pen_2
 * @property int $r2_anda
 * @property int $r2_pen_1
 * @property int $r2_pen_2
 * @property int $r3_anda
 * @property int $r3_pen_1
 * @property int $r3_pen_2
 * @property int $r4_anda
 * @property int $r4_pen_1
 * @property int $r4_pen_2
 * @property int $r5_anda
 * @property int $r5_pen_1
 * @property int $r5_pen_2
 * @property int $r6_anda
 * @property int $r6_pen_1
 * @property int $r6_pen_2
 * @property int $r7_anda
 * @property int $r7_pen_1
 * @property int $r7_pen_2
 * @property int $total_anda1
 * @property int $total_anda2
 * @property int $total_pen_11
 * @property int $total_pen_12
 * @property int $total_pen_21
 * @property int $total_pen_22
 * @property string $pil_anda E atau I
 * @property string $pil_pen_1 E atau I
 * @property string $pil_pen_2 E atau I
 */
class MeaV2Jadual4 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mea_v2_jadual4';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'r1_anda', 'r1_pen_1', 'r1_pen_2', 'r2_anda', 'r2_pen_1', 'r2_pen_2', 'r3_anda', 'r3_pen_1', 'r3_pen_2', 'r4_anda', 'r4_pen_1', 'r4_pen_2', 'r5_anda', 'r5_pen_1', 'r5_pen_2', 'r6_anda', 'r6_pen_1', 'r6_pen_2', 'r7_anda', 'r7_pen_1', 'r7_pen_2', 'total_anda1', 'total_anda2', 'total_pen_11', 'total_pen_12', 'total_pen_21', 'total_pen_22'], 'integer'],
            // [['r1_anda', 'r1_pen_1', 'r1_pen_2', 'r2_anda', 'r2_pen_1', 'r2_pen_2', 'r3_anda', 'r3_pen_1', 'r3_pen_2', 'r4_anda', 'r4_pen_1', 'r4_pen_2', 'r5_anda', 'r5_pen_1', 'r5_pen_2', 'r6_anda', 'r6_pen_1', 'r6_pen_2', 'r7_anda', 'r7_pen_1', 'r7_pen_2'], 'required'],
            [['pil_anda', 'pil_pen_1', 'pil_pen_2'], 'string', 'max' => 1],
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
            'r1_anda' => 'R1 Anda',
            'r1_pen_1' => 'R1 Pen 1',
            'r1_pen_2' => 'R1 Pen 2',
            'r2_anda' => 'R2 Anda',
            'r2_pen_1' => 'R2 Pen 1',
            'r2_pen_2' => 'R2 Pen 2',
            'r3_anda' => 'R3 Anda',
            'r3_pen_1' => 'R3 Pen 1',
            'r3_pen_2' => 'R3 Pen 2',
            'r4_anda' => 'R4 Anda',
            'r4_pen_1' => 'R4 Pen 1',
            'r4_pen_2' => 'R4 Pen 2',
            'r5_anda' => 'R5 Anda',
            'r5_pen_1' => 'R5 Pen 1',
            'r5_pen_2' => 'R5 Pen 2',
            'r6_anda' => 'R6 Anda',
            'r6_pen_1' => 'R6 Pen 1',
            'r6_pen_2' => 'R6 Pen 2',
            'r7_anda' => 'R7 Anda',
            'r7_pen_1' => 'R7 Pen 1',
            'r7_pen_2' => 'R7 Pen 2',
            'total_anda1' => 'Total Anda1',
            'total_anda2' => 'Total Anda2',
            'total_pen_11' => 'Total Pen 11',
            'total_pen_12' => 'Total Pen 12',
            'total_pen_21' => 'Total Pen 21',
            'total_pen_22' => 'Total Pen 22',
            'pil_anda' => 'Pil Anda',
            'pil_pen_1' => 'Pil Pen 1',
            'pil_pen_2' => 'Pil Pen 2',
        ];
    }

    public function getSkorPilihanAnda(){
        return MeaV2Main::highestSkor($this->total_anda1, $this->total_anda2);
    }

    public function getSkorPilihanPenilai1(){
        return MeaV2Main::highestSkor($this->total_pen_11, $this->total_pen_12);
    }

    public function getSkorPilihanPenilai2(){
        return MeaV2Main::highestSkor($this->total_pen_21, $this->total_pen_22);
    }
}
