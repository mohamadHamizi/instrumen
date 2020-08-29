<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mea_jadual3".
 *
 * @property int $id
 * @property int $main_id
 * @property int $r1_anda
 * @property int $r1_bos
 * @property int $r2_anda
 * @property int $r2_bos
 * @property int $r3_anda
 * @property int $r3_bos
 * @property int $r4_anda
 * @property int $r4_bos
 * @property int $r5_anda
 * @property int $r5_bos
 * @property int $r6_anda
 * @property int $r6_bos
 * @property int $r7_anda
 * @property int $r7_bos
 * @property int $total_anda1
 * @property int $total_anda2
 * @property int $total_bos1
 * @property int $total_bos2
 * @property string $pil_anda E atau I
 * @property string $pil_bos E atau I
 */
class MeaJadual3 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mea_jadual3';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'r1_anda', 'r1_bos', 'r2_anda', 'r2_bos', 'r3_anda', 'r3_bos', 'r4_anda', 'r4_bos', 'r5_anda', 'r5_bos', 'r6_anda', 'r6_bos', 'r7_anda', 'r7_bos', 'total_anda1', 'total_anda2', 'total_bos1', 'total_bos2'], 'integer'],
            // [['r1_anda', 'r1_bos', 'r2_anda', 'r2_bos', 'r3_anda', 'r3_bos', 'r4_anda', 'r4_bos', 'r5_anda', 'r5_bos', 'r6_anda', 'r6_bos', 'r7_anda', 'r7_bos'], 'required'],
            [['pil_anda', 'pil_bos'], 'string', 'max' => 1],
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
            'r1_bos' => 'R1 Bos',
            'r2_anda' => 'R2 Anda',
            'r2_bos' => 'R2 Bos',
            'r3_anda' => 'R3 Anda',
            'r3_bos' => 'R3 Bos',
            'r4_anda' => 'R4 Anda',
            'r4_bos' => 'R4 Bos',
            'r5_anda' => 'R5 Anda',
            'r5_bos' => 'R5 Bos',
            'r6_anda' => 'R6 Anda',
            'r6_bos' => 'R6 Bos',
            'r7_anda' => 'R7 Anda',
            'r7_bos' => 'R7 Bos',
            'total_anda1' => 'Total Anda1',
            'total_anda2' => 'Total Anda2',
            'total_bos1' => 'Total Bos1',
            'total_bos2' => 'Total Bos2',
            'pil_anda' => 'Pil Anda',
            'pil_bos' => 'Pil Bos',
        ];
    }
}
