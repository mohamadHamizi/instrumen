<?php

namespace app\models\sdts;

use app\models\UtilityFunc;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "sdts_main".
 *
 * @property int $id
 * @property int $jantina
 * @property string $create_dt
 * @property int $tahap_pengajian
 * @property int $mod_pengajian
 * @property int $tahun_pengajian
 * @property int $umur
 * @property string $agama
 * @property string $darah
 * @property string $universiti_kolej
 * @property string $fakulti
 * @property double $pngs
 * @property double $pngk
 * @property int $status
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sdts_main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jantina', 'create_dt', 'tahap_pengajian', 'mod_pengajian', 'tahun_pengajian', 'umur', 'agama', 'darah', 'universiti_kolej', 'fakulti', 'pngs', 'pngk'], 'required'],
            [['jantina', 'tahap_pengajian', 'mod_pengajian', 'tahun_pengajian', 'umur', 'status'], 'integer'],
            [['create_dt'], 'safe'],
            [['pngs', 'pngk'], 'number'],
            [['agama', 'darah'], 'string', 'max' => 5],
            [['universiti_kolej', 'fakulti'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jantina' => 'Jantina',
            'create_dt' => 'Create Dt',
            'tahap_pengajian' => 'Tahap Pengajian',
            'mod_pengajian' => 'Mod Pengajian',
            'tahun_pengajian' => 'Tahun Pengajian',
            'umur' => 'Umur',
            'agama' => 'Agama',
            'darah' => 'Darah',
            'universiti_kolej' => 'Nama Universiti/Kolej',
            'fakulti' => 'Fakulti',
            'pngs' => 'PNGS',
            'pngk' => 'PNGK',
            'status' => 'Status',
        ];
    }

    public function getItems()
    {
        return $this->hasOne(Items::class, ['main_id' => 'id']);
    }


    public function FormulaIndeks($arrItems)
    {

        $start = 1;
        $end = 5;

        $total_items = count($arrItems);

        $minSkor = $start * $total_items;
        $maxSkor = $end * $total_items;

        $total_skor = array_sum($arrItems);

        $indeks = ($total_skor - $minSkor) / ($maxSkor - $minSkor) * 100;

        return round($indeks, 2);
    }

    //-------------------Indeks Dimensi---------------------------------------//
    public function getAgama()
    {
        return $this->FormulaIndeks([$this->items->a1, $this->items->a2]);
    }
    public function getMasalah()
    {
        return $this->FormulaIndeks([$this->items->b1, $this->items->b2]);
    }
    public function getInteraksi()
    {
        return $this->FormulaIndeks([$this->items->c1, $this->items->c2, $this->items->c3, $this->items->c4]);
    }
    public function getProduktif()
    {
        return $this->FormulaIndeks([$this->items->d1, $this->items->d2, $this->items->d3]);
    }
    public function getRakan()
    {
        return $this->FormulaIndeks([$this->items->e1, $this->items->e2]);
    }
    //-------------------Indeks Dimensi---------------------------------------//

    public function labelDimensi()
    {
        $arr = [
            'Amalan Agama',
            'Penyelesaian Masalah',
            'Interaksi',
            'Tingkah Laku Tidak Produktif',
            'Sokongan Rakan',
        ];

        return $arr;
    }

    public function indeksDimensi()
    {

        $arr = [
            $this->getAgama(),
            $this->getMasalah(),
            $this->getInteraksi(),
            $this->getProduktif(),
            $this->getRakan(),
        ];

        return $arr;
    }

    public function resultItemIndividu()
    {
        $data = $this->allItemArray();

        $arr = [
            'a1' => $this->items->a1,
            'a2' => $this->items->a2,
            'b1' => $this->items->b1,
            'b2' => $this->items->b2,
            'c1' => $this->items->c1,
            'c2' => $this->items->c2,
            'c3' => $this->items->c3,
            'c4' => $this->items->c4,
            'd1' => $this->items->d1,
            'd2' => $this->items->d2,
            'd3' => $this->items->d3,
            'e1' => $this->items->e1,
            'e2' => $this->items->e2,
            'tahap_a1' => $this->tahapQuartile($data['a1'], $this->items->a1),
            'tahap_a2' => $this->tahapQuartile($data['a2'], $this->items->a2),
            'tahap_b1' => $this->tahapQuartile($data['b1'], $this->items->b1),
            'tahap_b2' => $this->tahapQuartile($data['b2'], $this->items->b2),
            'tahap_c1' => $this->tahapQuartile($data['c1'], $this->items->c1),
            'tahap_c2' => $this->tahapQuartile($data['c2'], $this->items->c2),
            'tahap_c3' => $this->tahapQuartile($data['c3'], $this->items->c3),
            'tahap_c4' => $this->tahapQuartile($data['c4'], $this->items->c4),
            'tahap_d1' => $this->tahapQuartile($data['d1'], $this->items->d1),
            'tahap_d2' => $this->tahapQuartile($data['d2'], $this->items->d2),
            'tahap_d3' => $this->tahapQuartile($data['d3'], $this->items->d3),
            'tahap_e1' => $this->tahapQuartile($data['e1'], $this->items->e1),
            'tahap_e2' => $this->tahapQuartile($data['e2'], $this->items->e2),
        ];

        return $arr;
    }

    public function allItemArray()
    {
        $data = self::find()->select(['a1', 'a2', 'b1', 'b2', 'c1', 'c2', 'c3', 'c4', 'd1', 'd2', 'd3', 'e1', 'e2'])->joinWith(['items'])->where(['status' => 1])->asArray()->all();

        $a1 = ArrayHelper::getColumn($data, 'a1');
        $a2 = ArrayHelper::getColumn($data, 'a2');
        $b1 = ArrayHelper::getColumn($data, 'b1');
        $b2 = ArrayHelper::getColumn($data, 'b2');
        $c1 = ArrayHelper::getColumn($data, 'c1');
        $c2 = ArrayHelper::getColumn($data, 'c2');
        $c3 = ArrayHelper::getColumn($data, 'c3');
        $c4 = ArrayHelper::getColumn($data, 'c4');
        $d1 = ArrayHelper::getColumn($data, 'd1');
        $d2 = ArrayHelper::getColumn($data, 'd2');
        $d3 = ArrayHelper::getColumn($data, 'd3');
        $e1 = ArrayHelper::getColumn($data, 'e1');
        $e2 = ArrayHelper::getColumn($data, 'e2');

        return [
            'a1' => $a1,
            'a2' => $a2,
            'b1' => $b1,
            'b2' => $b2,
            'c1' => $c1,
            'c2' => $c2,
            'c3' => $c3,
            'c4' => $c4,
            'd1' => $d1,
            'd2' => $d2,
            'd3' => $d3,
            'e1' => $e1,
            'e2' => $e2,
        ];
    }

    public function tahapQuartile($arr, $val)
    {

        sort($arr);

        if ($val < UtilityFunc::Quartile($arr, 0.50)) {

            return  'bg-red';
        }

        if ($val >= UtilityFunc::Quartile($arr, 0.50) && $val < UtilityFunc::Quartile($arr, 0.75)) {
            return 'bg-orange';
        }

        if ($val >= UtilityFunc::Quartile($arr, 0.75)) {
           

            return  'bg-green';
        }
    }
}
