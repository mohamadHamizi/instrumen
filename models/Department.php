<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string $fullname
 * @property string $shortname
 * @property string $chief
 * @property string $mymohesCd
 * @property int $category_id
 * @property string $pp
 * @property string $bos
 * @property int $isActive 1=Aktif, 0=Tidak Aktif
 * @property string $idMM
 * @property int $cluster 1=Science & Tech, 2=Social Science , 3=Clinical
 * @property int $dept_cat_id rujuk dept_cat | added by miji 1/9/2015
 * @property int $sub_of Kod JFPIU Utama
 * @property string $address Alamat
 * @property string $fax_no No.Faks
 * @property string $tel_no No.Telefon
 * @property string $pa_email Emel PA
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'isActive', 'cluster', 'dept_cat_id', 'sub_of'], 'integer'],
            [['address'], 'string'],
            [['fullname'], 'string', 'max' => 300],
            [['shortname', 'chief'], 'string', 'max' => 60],
            [['mymohesCd'], 'string', 'max' => 4],
            [['pp', 'bos'], 'string', 'max' => 12],
            [['idMM'], 'string', 'max' => 20],
            [['fax_no', 'tel_no', 'pa_email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Fullname',
            'shortname' => 'Shortname',
            'chief' => 'Chief',
            'mymohesCd' => 'Mymohes Cd',
            'category_id' => 'Category ID',
            'pp' => 'Pp',
            'bos' => 'Bos',
            'isActive' => '1=Aktif, 0=Tidak Aktif',
            'idMM' => 'Id Mm',
            'cluster' => '1=Science & Tech, 2=Social Science , 3=Clinical',
            'dept_cat_id' => 'rujuk dept_cat | added by miji 1/9/2015',
            'sub_of' => 'Kod JFPIU Utama',
            'address' => 'Alamat',
            'fax_no' => 'No.Faks',
            'tel_no' => 'No.Telefon',
            'pa_email' => 'Emel PA',
        ];
    }
}
