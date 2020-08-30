<?php

namespace app\models;

use Yii;
use yii\behaviors\AttributeBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "mea_demo".
 *
 * @property int $id
 * @property int $main_id
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
 */
class MeaDemo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mea_demo';
    }

    //  untuk convert date
     public function behaviors() {
        return [
            'tarikh_lahir' => [
                'class' => AttributeBehavior::className(),
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

    public function afterFind()

	{

    	$this->tarikh_lahir = Yii::$app->formatter->asDate($this->tarikh_lahir, 'dd/MM/yyyy');

    	//$this->importo = Yii::$app->formatter->asCurrency($this->importo, 'EUR');

    	parent::afterFind();

    	return true;

	}

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['main_id', 'nama_penuh', 'nama_kj', 'jantina', 'umur', 'jawatan', 'organisasi', 'tarikh_lahir', 'warna', 'bangsa', 'darah', 'anak_keberapa'], 'required'],
            [['main_id', 'umur', 'anak_keberapa'], 'integer'],
            [['tarikh_lahir'], 'safe'],
            [['nama_penuh', 'nama_kj', 'jawatan', 'organisasi'], 'string', 'max' => 255],
            [['jantina'], 'string', 'max' => 1],
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
            'main_id' => 'Main ID',
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
        ];
    }
}
