<?php

namespace app\models\eq2;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "eq2_demo".
 *
 * @property int $id
 * @property int $main_id
 * @property string $nama_penuh Nama Penuh Anda
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
 * @property string $warganegara
 * @property string $negara
 * @property string $emel
 * @property string $status_kerja
 * @property string $status_kerja_lain
 */
class Demo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eq2_demo';
    }
    //  untuk convert date
    public function behaviors()
    {
        return [
            'tarikh_lahir' => [
                'class' => AttributeBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['tarikh_lahir'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['tarikh_lahir'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
                ],
                'value' => function ($event) {
                    return date('Y-m-d', strtotime(str_replace("/", "-", $this->tarikh_lahir)));
                },
            ],
        ];
    }

    public function getRelMain()
    {
        return $this->hasOne(Main::class, ['id' => 'main_id']);
    }

    public function afterFind()

    {

        $this->tarikh_lahir = Yii::$app->formatter->asDate($this->tarikh_lahir, 'dd/MM/yyyy');

        parent::afterFind();

        return true;
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'nama_penuh', 'jantina', 'umur', 'jawatan', 'tarikh_lahir', 'warna', 'bangsa', 'darah', 'anak_keberapa', 'status_kerja'], 'required'],
            [['main_id', 'umur', 'anak_keberapa'], 'integer'],
            [['tarikh_lahir'], 'safe'],
            [['nama_penuh', 'jawatan', 'organisasi', 'organisasi_lain'], 'string', 'max' => 255],
            [['jantina'], 'string', 'max' => 1],
            [['warna', 'bangsa'], 'string', 'max' => 100],
            [['darah'], 'string', 'max' => 5],
            [['warganegara'], 'string', 'max' => 40],
            [['negara'], 'string', 'max' => 10],
            [['emel', 'status_kerja_lain'], 'string', 'max' => 150],
            [['status_kerja'], 'string', 'max' => 30],
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
            'nama_penuh' => 'Nama Penuh',
            'jantina' => 'Jantina',
            'umur' => 'Umur',
            'jawatan' => 'Jawatan',
            'organisasi' => 'JFPIU (Bagi kakitangan & pelajar UMS Sahaja)',
            'organisasi_lain' => 'Organisasi Lain',
            'tarikh_lahir' => 'Tarikh Lahir',
            'warna' => 'Warna',
            'bangsa' => 'Bangsa',
            'darah' => 'Darah',
            'anak_keberapa' => 'Anak Keberapa',
            'warganegara' => 'Warganegara',
            'negara' => 'Negara',
            'emel' => 'Emel',
            'status_kerja' => 'Status Kerja',
            'status_kerja_lain' => 'Status Kerja Lain',
        ];
    }
}
