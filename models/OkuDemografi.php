<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_demografi".
 *
 * @property int $id
 * @property int $main_id
 * @property string $no_oku No Pendaftaran Kad OKU-Fizikal
 * @property string $kategori Kategori OKU-Fizikal
 * @property string $sebab Sebab OKU-Fizikal
 * @property string $sejak Sejak Umur Berapa Anda Disahkan sebagai OKU-Fizikal
 * @property string $jantina Jantina
 * @property string $agama Agama
 * @property string $etnik Etnik/Bangsa
 * @property string $kahwin Status Perkahwinan anda
 * @property string $peralatan Peralatan yang anda guna sekarang(boleh pilih lebih dari 1)
 * @property string $umur Umur
 * @property string $pendidikan Taraf pendidikan anda
 * @property string $bantuan Jenis Bantuan/Elaun
 * @property string $jumlah Jumlah bantuan
 * @property string $kerja_anda Pekerjaan anda
 * @property string $kerja_psgn Pekerjaan pasangan
 * @property string $pendapatan Pendapatan keluarga
 * @property string $alamat Alamat tempat tinggal sekarang
 */
class OkuDemografi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oku_demografi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id'], 'integer'],
            [['no_oku', 'kahwin', 'pendapatan'], 'string', 'max' => 100],
            [['kategori', 'sebab', 'sejak', 'etnik', 'peralatan', 'pendidikan', 'bantuan', 'kerja_anda', 'kerja_psgn'], 'string', 'max' => 150],
            [['jantina', 'agama', 'umur', 'jumlah'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 200],
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
            'no_oku' => 'No Pendaftaran Kad OKU-Fizikal',
            'kategori' => 'Kategori OKU-Fizikal',
            'sebab' => 'Sebab OKU-Fizikal',
            'sejak' => 'Sejak Umur Berapa Anda Disahkan sebagai OKU-Fizikal',
            'jantina' => 'Jantina',
            'agama' => 'Agama',
            'etnik' => 'Etnik/Bangsa',
            'kahwin' => 'Status Perkahwinan anda',
            'peralatan' => 'Peralatan yang anda guna sekarang(boleh pilih lebih dari 1)',
            'umur' => 'Umur',
            'pendidikan' => 'Taraf pendidikan anda',
            'bantuan' => 'Jenis Bantuan/Elaun',
            'jumlah' => 'Jumlah bantuan',
            'kerja_anda' => 'Pekerjaan anda',
            'kerja_psgn' => 'Pekerjaan pasangan',
            'pendapatan' => 'Pendapatan keluarga',
            'alamat' => 'Alamat tempat tinggal sekarang',
        ];
    }
}
