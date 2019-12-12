<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oku_demografi".
 *
 * @property int $id
 * @property int $main_id
 * @property string $nama nama
 * @property string $no_oku 1. No Pendaftaran Kad OKU-Fizikal
 * @property int $kategori 2. Kategori OKU-Fizikal
 * @property string $kategori_lain kategori lain
 * @property int $sebab 3. Sebab OKU-Fizikal
 * @property string $sebab_lain sebab lain
 * @property int $sejak 4. Sejak Umur Berapa Anda Disahkan sebagai OKU-Fizikal
 * @property string $sejak_umur sejak umur
 * @property string $sejak_lain sejak lain
 * @property int $jantina 5. Jantina
 * @property int $agama 6. Agama
 * @property string $agama_lain agama lain
 * @property int $etnik 7. Etnik/Bangsa
 * @property string $etnik_lain etnik lain
 * @property int $kahwin 8. Status Perkahwinan anda
 * @property string $kahwin_lain kahwin lain
 * @property int $kerusi_roda Kerusi Roda
 * @property int $kaki_palsu Kaki Palsu
 * @property int $tgn_palsu Tangan Palsu
 * @property int $tongkat Tongkat
 * @property string $peralatan_lain Peralatan lain
 * @property string $umur 10. Umur
 * @property int $pendidikan 11. Taraf pendidikan anda
 * @property string $pendidikan_lain
 * @property string $bantuan 12. Jenis Bantuan/Elaun
 * @property string $jumlah 13. Jumlah bantuan
 * @property string $kerja_anda 14. Pekerjaan anda
 * @property string $kerja_psgn 15. Pekerjaan pasangan
 * @property string $pendapatan 16. Pendapatan keluarga
 * @property string $alamat 17. Alamat tempat tinggal sekarang
 * @property string $negeri 18. Negeri Asal
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
            [['main_id', 'kategori', 'sebab', 'sejak', 'jantina', 'agama', 'etnik', 'kahwin', 'kerusi_roda', 'kaki_palsu', 'tgn_palsu', 'tongkat', 'pendidikan'], 'integer'],
            [['nama','no_oku', 'kategori_lain', 'sebab_lain', 'sejak_umur','sejak_lain', 'peralatan_lain', 'pendidikan_lain', 'bantuan', 'kerja_anda', 'kerja_psgn', 'negeri'], 'string', 'max' => 150],
            [['agama_lain', 'etnik_lain', 'kahwin_lain', 'pendapatan'], 'string', 'max' => 100],
            [['umur', 'jumlah'], 'string', 'max' => 50],
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
            'nama' => 'Nama',
            'no_oku' => 'No Pendaftaran Kad OKU-Fizikal',
            'kategori' => 'Kategori OKU-Fizikal',
            'kategori_lain' => 'kategori lain',
            'sebab' => 'Sebab OKU-Fizikal',
            'sebab_lain' => 'sebab lain',
            'sejak' => 'Sejak Umur Berapa Anda Disahkan sebagai OKU-Fizikal',
            'sejak_umur' => 'Sejak Umur',
            'sejak_lain' => 'sejak lain',
            'jantina' => 'Jantina',
            'agama' => 'Agama',
            'agama_lain' => 'agama lain',
            'etnik' => 'Etnik/Bangsa',
            'etnik_lain' => 'etnik lain',
            'kahwin' => 'Status Perkahwinan anda',
            'kahwin_lain' => 'kahwin lain',
            'kerusi_roda' => 'Kerusi Roda',
            'kaki_palsu' => 'Kaki Palsu',
            'tgn_palsu' => 'Tangan Palsu',
            'tongkat' => 'Tongkat',
            'peralatan_lain' => 'Peralatan lain',
            'umur' => 'Umur',
            'pendidikan' => 'Taraf pendidikan anda',
            'pendidikan_lain' => 'Pendidikan Lain',
            'bantuan' => 'Jenis Bantuan/Elaun',
            'jumlah' => 'Jumlah bantuan',
            'kerja_anda' => 'Pekerjaan anda',
            'kerja_psgn' => 'Pekerjaan pasangan',
            'pendapatan' => 'Pendapatan keluarga',
            'alamat' => 'Alamat tempat tinggal sekarang',
            'negeri' => 'Negeri Asal',
        ];
    }
}
