<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "v_data_mipk".
 *
 * @property int $id
 * @property string $jantina L dan P
 * @property int $umur
 * @property string $etnik
 * @property string $agama
 * @property string $pendidikan
 * @property string $status_kerja
 * @property string $kerja_anda
 * @property string $adik_beradik
 * @property string $saudara
 * @property string $kesedaran
 * @property string $kesalahan
 * @property string $status_kahwin
 * @property int $umur_anda
 * @property int $umur_psgn
 * @property string $anak
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
 * @property string $cadangan
 * @property int $skor
 */
class VDataMipk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_data_mipk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'umur', 'umur_anda', 'umur_psgn', 'item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11', 'item12', 'skor'], 'integer'],
            [['jantina'], 'string', 'max' => 1],
            [['etnik', 'agama', 'pendidikan', 'status_kerja'], 'string', 'max' => 100],
            [['kerja_anda'], 'string', 'max' => 150],
            [['adik_beradik', 'status_kahwin'], 'string', 'max' => 10],
            [['saudara', 'kesedaran', 'kesalahan'], 'string', 'max' => 5],
            [['anak'], 'string', 'max' => 20],
            [['cadangan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'create_datetime' => 'Tarikh/Masa',
            'nama' => 'Nama',
            'jantina' => 'Jantina',
            'umur' => 'Umur',
            'etnik' => 'Etnik',
            'agama' => 'Agama',
            'pendidikan' => 'Pendidikan',
            'status_kerja' => 'Status Kerja',
            'kerja_anda' => 'Kerja Anda',
            'adik_beradik' => 'Adik Beradik',
            'saudara' => 'Saudara',
            'kesedaran' => 'Kesedaran',
            'kesalahan' => 'Kesalahan',
            'status_kahwin' => 'Status Kahwin',
            'umur_anda' => 'Umur Anda',
            'umur_psgn' => 'Umur Psgn',
            'anak' => 'Anak',
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
            'cadangan' => 'Cadangan',
            'skor' => 'Skor',
        ];
    }
}
