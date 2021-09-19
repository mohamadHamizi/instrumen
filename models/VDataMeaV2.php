<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "v_data_mea_v2".
 *
 * @property int $id
 * @property string $tarikh_isi
 * @property string $icno
 * @property string $tret_anda
 * @property string $tret_penilai_1
 * @property string $tret_penilai_2
 * @property string $nama_penuh Nama Penuh Anda
 * @property string $penilai_1 Nama Penilai 1
 * @property string $penilai_2 Nama Penilai 2
 * @property string $jantina Jantina
 * @property int $umur Umur
 * @property string $jawatan Jawatan
 * @property string $organisasi Nama Organisasi
 * @property string $organisasi_lain Nama Organisasi lain-lain
 * @property string $tarikh_lahir Tarikh Lahir
 * @property string $warna Warna kegemaran
 * @property string $bangsa Bangsa
 * @property string $darah Jenis Darah
 * @property int $anak_keberapa Anak Keberapa dalam keluarga
 * @property int $j1_total_anda_1
 * @property int $j1_total_anda_2
 * @property int $j1_total_pen_1_1
 * @property int $j1_total_pen_1_2
 * @property int $j1_total_pen_2_1
 * @property int $j1_total_pen_2_2
 * @property string $j1_pil_anda E atau I
 * @property string $j1_pil_pen_1 E atau I
 * @property string $j1_pil_pen_2 E atau I
 * @property int $j2_total_anda_1
 * @property int $j2_total_anda_2
 * @property int $j2_total_pen_11
 * @property int $j2_total_pen_12
 * @property int $j2_total_pen_21
 * @property int $j2_total_pen_22
 * @property string $j2_pil_anda E atau I
 * @property string $j2_pil_pen_1 E atau I
 * @property string $j2_pil_pen_2 E atau I
 * @property int $j3_total_anda_1
 * @property int $j3_total_anda_2
 * @property int $j3_total_pen_11
 * @property int $j3_total_pen_12
 * @property int $j3_total_pen_21
 * @property int $j3_total_pen_22
 * @property string $j3_pil_anda E atau I
 * @property string $j3_pil_pen_1 E atau I
 * @property string $j3_pil_pen_2 E atau I
 * @property int $j4_total_anda_1
 * @property int $j4_total_anda_2
 * @property int $j4_total_pen_11
 * @property int $j4_total_pen_12
 * @property int $j4_total_pen_21
 * @property int $j4_total_pen_22
 * @property string $j4_pil_anda E atau I
 * @property string $j4_pil_pen_1 E atau I
 * @property string $j4_pil_pen_2 E atau I
 */
class VDataMeaV2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'v_data_mea_v2';
    }

    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'umur', 'anak_keberapa', 'j1_total_anda_1', 'j1_total_anda_2', 'j1_total_pen_1_1', 'j1_total_pen_1_2', 'j1_total_pen_2_1', 'j1_total_pen_2_2', 'j2_total_anda_1', 'j2_total_anda_2', 'j2_total_pen_11', 'j2_total_pen_12', 'j2_total_pen_21', 'j2_total_pen_22', 'j3_total_anda_1', 'j3_total_anda_2', 'j3_total_pen_11', 'j3_total_pen_12', 'j3_total_pen_21', 'j3_total_pen_22', 'j4_total_anda_1', 'j4_total_anda_2', 'j4_total_pen_11', 'j4_total_pen_12', 'j4_total_pen_21', 'j4_total_pen_22'], 'integer'],
            [['tarikh_isi', 'tarikh_lahir'], 'safe'],
            [['icno', 'nama_penuh', 'penilai_1', 'penilai_2', 'jantina', 'umur', 'jawatan', 'tarikh_lahir', 'warna', 'bangsa', 'darah', 'anak_keberapa'], 'required'],
            [['icno'], 'string', 'max' => 12],
            [['tret_anda', 'tret_penilai_1', 'tret_penilai_2'], 'string', 'max' => 4],
            [['nama_penuh', 'penilai_1', 'penilai_2', 'jawatan', 'organisasi'], 'string', 'max' => 255],
            [['jantina', 'j1_pil_anda', 'j1_pil_pen_1', 'j1_pil_pen_2', 'j2_pil_anda', 'j2_pil_pen_1', 'j2_pil_pen_2', 'j3_pil_anda', 'j3_pil_pen_1', 'j3_pil_pen_2', 'j4_pil_anda', 'j4_pil_pen_1', 'j4_pil_pen_2'], 'string', 'max' => 1],
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
            'tret_penilai_1' => 'Tret Penilai 1',
            'tret_penilai_2' => 'Tret Penilai 2',
            'nama_penuh' => 'Nama Penuh',
            'penilai_1' => 'Penilai 1',
            'penilai_2' => 'Penilai 2',
            'jantina' => 'Jantina',
            'umur' => 'Umur',
            'jawatan' => 'Jawatan',
            'organisasi' => 'Organisasi',
            'organisasi_lain' => 'Nama Organisasi Lain-lain',
            'tarikh_lahir' => 'Tarikh Lahir',
            'warna' => 'Warna',
            'bangsa' => 'Bangsa',
            'darah' => 'Darah',
            'anak_keberapa' => 'Anak Keberapa',
            'j1_total_anda_1' => 'J1 Total Anda 1',
            'j1_total_anda_2' => 'J1 Total Anda 2',
            'j1_total_pen_1_1' => 'J1 Total Pen 1 1',
            'j1_total_pen_1_2' => 'J1 Total Pen 1 2',
            'j1_total_pen_2_1' => 'J1 Total Pen 2 1',
            'j1_total_pen_2_2' => 'J1 Total Pen 2 2',
            'j1_pil_anda' => 'J1 Pil Anda',
            'j1_pil_pen_1' => 'J1 Pil Pen 1',
            'j1_pil_pen_2' => 'J1 Pil Pen 2',
            'j2_total_anda_1' => 'J2 Total Anda 1',
            'j2_total_anda_2' => 'J2 Total Anda 2',
            'j2_total_pen_11' => 'J2 Total Pen 11',
            'j2_total_pen_12' => 'J2 Total Pen 12',
            'j2_total_pen_21' => 'J2 Total Pen 21',
            'j2_total_pen_22' => 'J2 Total Pen 22',
            'j2_pil_anda' => 'J2 Pil Anda',
            'j2_pil_pen_1' => 'J2 Pil Pen 1',
            'j2_pil_pen_2' => 'J2 Pil Pen 2',
            'j3_total_anda_1' => 'J3 Total Anda 1',
            'j3_total_anda_2' => 'J3 Total Anda 2',
            'j3_total_pen_11' => 'J3 Total Pen 11',
            'j3_total_pen_12' => 'J3 Total Pen 12',
            'j3_total_pen_21' => 'J3 Total Pen 21',
            'j3_total_pen_22' => 'J3 Total Pen 22',
            'j3_pil_anda' => 'J3 Pil Anda',
            'j3_pil_pen_1' => 'J3 Pil Pen 1',
            'j3_pil_pen_2' => 'J3 Pil Pen 2',
            'j4_total_anda_1' => 'J4 Total Anda 1',
            'j4_total_anda_2' => 'J4 Total Anda 2',
            'j4_total_pen_11' => 'J4 Total Pen 11',
            'j4_total_pen_12' => 'J4 Total Pen 12',
            'j4_total_pen_21' => 'J4 Total Pen 21',
            'j4_total_pen_22' => 'J4 Total Pen 22',
            'j4_pil_anda' => 'J4 Pil Anda',
            'j4_pil_pen_1' => 'J4 Pil Pen 1',
            'j4_pil_pen_2' => 'J4 Pil Pen 2',
            'btnView' => 'Perincian',
        ];
    }
    public function getBtnView()
    {
        if ($this->j4_pil_pen_2) {
            return  Html::a('<i class="fa fa-eye"></i>', ['mea-two/view-result', 'id' => $this->id], ['target' => '_blank']);
        }

        return null;
    }
}
