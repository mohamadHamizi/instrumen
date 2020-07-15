<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mipk_pengetahuan".
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
 * @property int $item11
 * @property int $item12
 * @property int $cadangan
 * @property int $skor
 */
class MipkPengetahuan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mipk_pengetahuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id'], 'required'],
            [['main_id', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11', 'item12', 'skor'], 'integer'],
            [['item1','item2','item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11', 'item12'], 'required', 'message'=>'Sila jawab!'],
        ];
    }

    public static function getItemSkor($item_no, $value)
    {

        /*(i)	Sila berikan markah bagi penyataan 1, 2, 3, 6, 7, dan 11
            Beri 1 markah pada setiap petak pada ruangan ‘Betul’
            Beri 0 markah pada setiap petak pada ruangan ‘Salah’ atau ‘Tidak Tahu’*/
        if ($item_no == 1 || $item_no == 2 || $item_no == 3 || $item_no == 6 || $item_no == 7 || $item_no == 11) {
            if ($value == 1) {
                return 1;
            } else {
                return 0;
            }
        }

        /* (ii)	Sila berikan markah bagi penyataan 4, 5, 8, 9, 10, dan 12
            Beri 1 markah  pada setiap petak pada ruangan ‘Salah’
            Beri 0 markah pada setiap petak pada ruangan ‘Betul’ atau ‘Tidak Tahu’*/
        if ($item_no == 4 || $item_no == 5 || $item_no == 8 || $item_no == 9 || $item_no == 10 || $item_no == 12) {
            if ($value == 2) {
                return 1;
            } else {
                return 0;
            }
        }
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
            'item11' => 'Item11',
            'item12' => 'Item12',
            'cadangan' => 'Cadangan dan pandangan anda berkaitan isu perkahwinan kanak-kanak ',
            'skor' => 'Skor',
        ];
    }
}
