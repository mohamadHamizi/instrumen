<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "v_data_mea".
 *
 * @property int $id
 * @property string $tarikh_isi
 * @property string $icno
 * @property string $tret_anda
 * @property string $tret_bos
 * @property string $nama_penuh Nama Penuh Anda
 * @property string $nama_kj Nama Ketua Jabatan
 * @property string $jantina Jantina
 * @property int $umur Umur
 * @property string $jawatan Jawatan
 * @property string $organisasi Nama Organisasi
 * @property string $tarikh_lahir Tarikh Lahir
 * @property string $warna Warna kegemaran
 * @property string $bangsa Bangsa
 * @property string $darah Jenis Darah
 * @property int $anak_keberapa Anak Keberapa dalam keluarga
 * @property int $j1_total_anda_1
 * @property int $j1_total_anda_2
 * @property string $j1_pil_anda E atau I
 * @property string $j1_pil_bos E atau I
 * @property int $j2_total_anda_1
 * @property int $j2_total_anda_2
 * @property string $j2_pil_anda E atau I
 * @property string $j2_pil_bos E atau I
 * @property int $j3_total_anda_1
 * @property int $j3_total_anda_2
 * @property string $j3_pil_anda E atau I
 * @property string $j3_pil_bos E atau I
 * @property int $j4_total_anda_1
 * @property int $j4_total_anda_2
 * @property string $j4_pil_anda E atau I
 * @property string $j4_pil_bos E atau I
 */
class VDataMea extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_data_mea';
    }

    /**
     * @inheritdoc $primaryKey
     */
    public static function primaryKey()
    {
        return ["id"];
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'umur', 'anak_keberapa', 'j1_total_anda_1', 'j1_total_anda_2', 'j2_total_anda_1', 'j2_total_anda_2', 'j3_total_anda_1', 'j3_total_anda_2', 'j4_total_anda_1', 'j4_total_anda_2'], 'integer'],
            [['tarikh_isi', 'tarikh_lahir'], 'safe'],
            [['icno', 'nama_penuh', 'nama_kj', 'jantina', 'umur', 'jawatan', 'organisasi', 'tarikh_lahir', 'warna', 'bangsa', 'darah', 'anak_keberapa'], 'required'],
            [['icno'], 'string', 'max' => 12],
            [['tret_anda', 'tret_bos'], 'string', 'max' => 4],
            [['nama_penuh', 'nama_kj', 'jawatan', 'organisasi'], 'string', 'max' => 255],
            [['jantina', 'j1_pil_anda', 'j1_pil_bos', 'j2_pil_anda', 'j2_pil_bos', 'j3_pil_anda', 'j3_pil_bos', 'j4_pil_anda', 'j4_pil_bos'], 'string', 'max' => 1],
            [['warna', 'bangsa'], 'string', 'max' => 100],
            [['darah'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tarikh_isi' => 'Tarikh Isi',
            'icno' => 'Icno',
            'tret_anda' => 'Tret Anda',
            'tret_bos' => 'Tret Bos',
            'nama_penuh' => 'Nama Penuh Anda',
            'nama_kj' => 'Nama Ketua Jabatan',
            'jantina' => 'Jantina',
            'umur' => 'Umur',
            'jawatan' => 'Jawatan',
            'organisasi' => 'Nama Organisasi',
            'tarikh_lahir' => 'Tarikh Lahir',
            'warna' => 'Warna kegemaran',
            'bangsa' => 'Bangsa',
            'darah' => 'Jenis Darah',
            'anak_keberapa' => 'Anak Keberapa dalam keluarga',
            'j1_total_anda_1' => 'J1 Total Anda 1',
            'j1_total_anda_2' => 'J1 Total Anda 2',
            'j1_pil_anda' => 'E atau I',
            'j1_pil_bos' => 'E atau I',
            'j2_total_anda_1' => 'J2 Total Anda 1',
            'j2_total_anda_2' => 'J2 Total Anda 2',
            'j2_pil_anda' => 'E atau I',
            'j2_pil_bos' => 'E atau I',
            'j3_total_anda_1' => 'J3 Total Anda 1',
            'j3_total_anda_2' => 'J3 Total Anda 2',
            'j3_pil_anda' => 'E atau I',
            'j3_pil_bos' => 'E atau I',
            'j4_total_anda_1' => 'J4 Total Anda 1',
            'j4_total_anda_2' => 'J4 Total Anda 2',
            'j4_pil_anda' => 'E atau I',
            'j4_pil_bos' => 'E atau I',
        ];
    }
}
