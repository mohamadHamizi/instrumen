<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mipk_demografi".
 *
 * @property int $id
 * @property string $item1 L dan P
 * @property int $item2
 * @property string $item3
 * @property string $item4
 * @property string $item4_other
 * @property string $item5
 * @property string $item5_other
 * @property string $item6
 * @property string $item6_other
 * @property string $item7
 * @property string $item8
 * @property int $item8_age
 * @property string $item9
 * @property int $item9_age
 * @property string $item10
 * @property string $item11
 * @property string $item12
 * @property string $item12_other
 * @property int $item13
 * @property int $item14
 * @property string $item15
 */
class MipkDemografi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mipk_demografi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item2', 'item8_age', 'item9_age', 'item13', 'item14'], 'integer'],
            [['item1'], 'string', 'max' => 1],
            [['item3', 'item4', 'item4_other', 'item5', 'item5_other', 'item6', 'item6_other', 'item12_other'], 'string', 'max' => 100],
            [['item7'], 'string', 'max' => 150],
            [['item16'], 'string', 'max' => 200],
            [['item8', 'item12'], 'string', 'max' => 10],
            [['item9', 'item10', 'item11'], 'string', 'max' => 5],
            [['item15'], 'string', 'max' => 20],
            // [['item1','item2','item3', 'item4', 'item5', 'item6', 'item7', 'item8', 'item9', 'item10', 'item11', 'item12', 'item13', 'item14', 'item15',  ], 'required'],
            [['item1','item2','item3', 'item4', 'item5', 'item6', 'item8', 'item9', 'item10', 'item11', 'item12','item16',], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item1' => '1. Jantina',
            'item2' => '2. Umur',
            'item3' => '3. Etnik',
            'item4' => '4. Agama',
            'item4_other' => 'Lain-lain',
            'item5' => '5. Tahap Pendidikan',
            'item5_other' => 'Lain-lain',
            'item6' => '6. Status Pekerjaan',
            'item6_other' => 'Lain-lain',
            'item7' => '7. Pekerjaan anda(Jika bekerja, contohnya Guru, Polis, etc)',
            'item8' => '8. Adakah adik-beradik anda berkahwin di bawah umur?',
            'item8_age' => 'Umur',
            'item9' => '9. Adakah saudara-mara terdekat anda berkahwin di bawah umur?',
            'item9_age' => 'Umur',
            'item10' => '10. Adakah anda pernah mengikuti Program Kesedaran Tangani Perkahwinan Kanak-Kanak anjuran JHEWA dan MPWS sebelum ini?',
            'item11' => '11. Pada pendapat anda, adakah kahwin bawah umur tidak menjadi satu kesalahan?',
            'item12' => '12. Status Perkahwinan',
            'item12_other' => 'Lain-lain',
            'item13' => '13. Umur anda ketika mula berkahwin:',
            'item14' => '14. Umur pasangan anda ketika mula berkahwin:',
            'item15' => '15. Adakah anak anda berkahwin di bawah umur?',
            'item16' => 'Nama',
        ];
    }
}
