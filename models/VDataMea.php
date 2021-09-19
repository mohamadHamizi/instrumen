<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

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
 * @property int $j1_total_bos_1
 * @property int $j1_total_bos_2
 * @property string $j1_pil_anda E atau I
 * @property string $j1_pil_bos E atau I
 * @property int $j2_total_anda_1
 * @property int $j2_total_anda_2
 * @property int $j2_total_bos_1
 * @property int $j2_total_bos_2
 * @property string $j2_pil_anda E atau I
 * @property string $j2_pil_bos E atau I
 * @property int $j3_total_anda_1
 * @property int $j3_total_anda_2
 * @property int $j3_total_bos_1
 * @property int $j3_total_bos_2
 * @property string $j3_pil_anda E atau I
 * @property string $j3_pil_bos E atau I
 * @property int $j4_total_anda_1
 * @property int $j4_total_anda_2
 * @property int $j4_total_bos_1
 * @property int $j4_total_bos_2
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
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'umur', 'anak_keberapa', 'j1_total_anda_1', 'j1_total_anda_2', 'j1_total_bos_1', 'j1_total_bos_2', 'j2_total_anda_1', 'j2_total_anda_2', 'j2_total_bos_1', 'j2_total_bos_2', 'j3_total_anda_1', 'j3_total_anda_2', 'j3_total_bos_1', 'j3_total_bos_2', 'j4_total_anda_1', 'j4_total_anda_2', 'j4_total_bos_1', 'j4_total_bos_2'], 'integer'],
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
            'j1_total_anda_1' => 'E-Anda',
            'j1_total_anda_2' => 'I-Anda',
            'j1_total_bos_1' => 'E-Bos',
            'j1_total_bos_2' => 'I-Bos',
            'j1_pil_anda' => 'E atau I',
            'j1_pil_bos' => 'E atau I',
            'j2_total_anda_1' => 'S-Anda',
            'j2_total_anda_2' => 'N-Anda',
            'j2_total_bos_1' => 'S-Bos',
            'j2_total_bos_2' => 'N-Bos',
            'j2_pil_anda' => 'S atau N',
            'j2_pil_bos' => 'S atau N',
            'j3_total_anda_1' => 'T-Anda',
            'j3_total_anda_2' => 'F-Anda',
            'j3_total_bos_1' => 'T-Bos',
            'j3_total_bos_2' => 'F-Bos',
            'j3_pil_anda' => 'T atau F',
            'j3_pil_bos' => 'T atau F',
            'j4_total_anda_1' => 'J-Anda',
            'j4_total_anda_2' => 'P-Anda',
            'j4_total_bos_1' => 'J-Bos',
            'j4_total_bos_2' => 'P-Bos',
            'j4_pil_anda' => 'J atau P',
            'j4_pil_bos' => 'J atau P',
            'btnView' => 'Perincian',
        ];
    }

    public function getBtnView()
    {
        if ($this->j4_total_bos_2) {
            return  Html::a('<i class="fa fa-eye"></i>', ['mea/view-result', 'id' => $this->id], ['target' => '_blank']);
        }

        return null;
    }
}
