<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipi_jadual".
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
 * @property string $create_dt
 */
class TipiJadual extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipi_jadual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10'], 'required', 'message'=>'Item adalah wajib dijawab!'],
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10'], 'integer'],
            [['create_dt'], 'safe'],
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
            'item10' => 'Item10',
            'create_dt' => 'Create Dt',
        ];
    }

    public static function FormulaIndeks($itemSkor1, $itemSkor2)
    {

        $maxSkor = 14;
        $minSkor = 2;
        $jumlahSkor = $itemSkor1 + $itemSkor2;

        $indeks = ($jumlahSkor - $minSkor) / ($maxSkor - $minSkor) * 100;

        return round($indeks, 0);
    }

    public static function FormulaPurata($itemSkor1, $itemSkor2)
    {

        $jumlahSkor = $itemSkor1 + $itemSkor2;

        $purata = $jumlahSkor / 2;

        return $purata;
    }

    public static function FormulaSkor($itemSkor1, $itemSkor2)
    {

        $jumlahSkor = $itemSkor1 + $itemSkor2;

        return $jumlahSkor;
    }

    public static function FormulaTahap($indeks)
    {

        $tahap = 'Tiada';

        if ($indeks >= 0 && $indeks <= 24.9) {
            $tahap = 'Sangat Rendah';
        } else if ($indeks >= 25 && $indeks <= 49.9) {
            $tahap = 'Rendah';
        } else if ($indeks >= 50 && $indeks <= 74.9) {
            $tahap = 'Tinggi';
        } else if ($indeks >= 75 && $indeks <= 100) {
            $tahap = 'Sangat Tinggi';
        }

        return $tahap;
    }


    public function getExtraversionIndex()
    {
        return $this->FormulaIndeks($this->item1, $this->rItem6);
    }
    public function getExtraversionPurata()
    {
        return $this->FormulaPurata($this->item1, $this->rItem6);
    }
    public function getExtraversionSkor()
    {
        return $this->FormulaSkor($this->item1, $this->rItem6);
    }
    public function getExtraversionTahap()
    {
        return $this->FormulaTahap($this->extraversionIndex);
    }

    public function getAgreeablenessIndex()
    {
        return $this->FormulaIndeks($this->rItem2, $this->item7);
    }
    public function getAgreeablenessPurata()
    {
        return $this->FormulaPurata($this->rItem2, $this->item7);
    }
    public function getAgreeablenessSkor()
    {
        return $this->FormulaSkor($this->rItem2, $this->item7);
    }
    public function getAgreeablenessTahap()
    {
        return $this->FormulaTahap($this->agreeablenessIndex);
    }

    public function getConscientiousnessIndex()
    {
        return $this->FormulaIndeks($this->item3, $this->rItem8);
    }
    public function getConscientiousnessPurata()
    {
        return $this->FormulaPurata($this->item3, $this->rItem8);
    }
    public function getConscientiousnessSkor()
    {
        return $this->FormulaSkor($this->item3, $this->rItem8);
    }
    public function getConscientiousnessTahap()
    {
        return $this->FormulaTahap($this->conscientiousnessIndex);
    }

    public function getEmotionalIndex()
    {
        return $this->FormulaIndeks($this->rItem4, $this->item9);
    }
    public function getEmotionalPurata()
    {
        return $this->FormulaPurata($this->rItem4, $this->item9);
    }
    public function getEmotionalSkor()
    {
        return $this->FormulaSkor($this->rItem4, $this->item9);
    }
    public function getEmotionalTahap()
    {
        return $this->FormulaTahap($this->emotionalIndex);
    }

    public function getOpennessIndex()
    {
        return $this->FormulaIndeks($this->item5, $this->rItem10);
    }
    public function getOpennessPurata()
    {
        return $this->FormulaPurata($this->item5, $this->rItem10);
    }
    public function getOpennessSkor()
    {
        return $this->FormulaSkor($this->item5, $this->rItem10);
    }
    public function getOpennessTahap()
    {
        return $this->FormulaTahap($this->opennessIndex);
    }

    public function getSkorArray()
    {
        return [$this->extraversionSkor, $this->agreeablenessSkor, $this->conscientiousnessSkor, $this->emotionalSkor, $this->opennessSkor];
    }


    public static function rank($skorArray, $skor)
    {

        $numbers = $skorArray;
        rsort($numbers);

        $arrlength = count($numbers);
        $rank = 1;
        $prev_rank = $rank;

        for ($x = 0; $x < $arrlength; $x++) {

            if ($x == 0) {
                if ($numbers[$x] == $skor) {
                    return $rank;
                }
            } elseif ($numbers[$x] != $numbers[$x - 1]) {
                $rank++;
                $prev_rank = $rank;
                if ($numbers[$x] == $skor) {
                    return $rank;
                }
            } else {
                $rank++;
                if ($numbers[$x] == $skor) {
                    return $prev_rank;
                }
            }
        }
    }

    public function getRItem2()
    {
        return $this->reverseSkor($this->item2);
    }
    public function getRItem4()
    {
        return $this->reverseSkor($this->item4);
    }
    public function getRItem6()
    {
        return $this->reverseSkor($this->item6);
    }
    public function getRItem8()
    {
        return $this->reverseSkor($this->item8);
    }
    public function getRItem10()
    {
        return $this->reverseSkor($this->item10);
    }

    public static function reverseSkor($skorItem)
    {

        switch ($skorItem) {
            case 1:
                $reverse = 7;
                break;
            case 2:
                $reverse = 6;
                break;
            case 3:
                $reverse = 5;
                break;
            case 4:
                $reverse = 4;
                break;
            case 5:
                $reverse = 3;
                break;
            case 6:
                $reverse = 2;
                break;
            case 7:
                $reverse = 1;
                break;
        }

        return $reverse;
    }
}
