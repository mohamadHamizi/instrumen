<?php

namespace app\models\hexaco;

use Yii;

/**
 * This is the model class for table "hexaco_skj".
 *
 * @property int $id
 * @property int $main_id
 * @property int $s1
 * @property int $s2
 * @property int $s3
 * @property int $s4
 * @property int $s5
 * @property int $s6
 */
class Skj extends \yii\db\ActiveRecord
{
    const SCENARIO_S1 = 's1';
    const SCENARIO_S2 = 's2';
    const SCENARIO_S3 = 's3';
    const SCENARIO_S4 = 's4';
    const SCENARIO_S5 = 's5';
    const SCENARIO_S6 = 's6';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_skj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id'], 'integer'],
            [['s1', 's2', 's3', 's4', 's5', 's6'], 'integer', 'min' => 1, 'max' => 5],
            [['s1'], 'required', 'on' => self::SCENARIO_S1],
            [['s2'], 'required', 'on' => self::SCENARIO_S2],
            [['s3'], 'required', 'on' => self::SCENARIO_S3],
            [['s4'], 'required', 'on' => self::SCENARIO_S4],
            [['s5'], 'required', 'on' => self::SCENARIO_S5],
            [['s6'], 'required', 'on' => self::SCENARIO_S6],
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
            's1' => 'S1',
            's2' => 'S2',
            's3' => 'S3',
            's4' => 'S4',
            's5' => 'S5',
            's6' => 'S6',
        ];
    }

    /**
     * Indeks SKJ (Skala Kejujuran Jawapan).
     *
     * Follows the KK-OKU methodology (min-max normalization of a 1-5 Likert sum):
     *   indeks = (SUM(s1..s6) - 6) / (30 - 6) * 100
     *
     * @return float
     */
    public function getSkor()
    {
        $maxSkor = 30;
        $minSkor = 6;
        $jumlahSkor = $this->s1 + $this->s2 + $this->s3 + $this->s4 + $this->s5 + $this->s6;

        $indeks = ($jumlahSkor - $minSkor) / ($maxSkor - $minSkor) * 100;

        return round($indeks, 2);
    }

    /**
     * SKJ category, mirroring KK-OKU OkuDimensi::tahap().
     *
     * @param float $val
     * @return string
     */
    public static function tahap($val)
    {
        $tahap = '';

        if ($val <= 49.99) {
            $tahap = 'RENDAH';
        }

        if ($val >= 50 && $val <= 79.99) {
            $tahap = 'SEDERHANA';
        }

        if ($val >= 80) {
            $tahap = 'TINGGI';
        }

        return $tahap;
    }

    /**
     * Whether all six SKJ responses have been answered.
     *
     * @return bool
     */
    public function isComplete()
    {
        return $this->s1 !== null
            && $this->s2 !== null
            && $this->s3 !== null
            && $this->s4 !== null
            && $this->s5 !== null
            && $this->s6 !== null;
    }
}
