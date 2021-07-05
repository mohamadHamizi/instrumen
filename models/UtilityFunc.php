<?php

namespace app\models;

use Yii;

class UtilityFunc
{

    public static function CountryList()
    {

        $api_url = 'https://registrar.ums.edu.my/staff/web/api/staff/country-list';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        return $response_data;
    }

    public static function DepartmentList()
    {

        $api_url = 'https://registrar.ums.edu.my/staff/web/api/staff/dept-list';

        // Read JSON file
        $json_data = file_get_contents($api_url);

        // Decode JSON data into PHP array
        $response_data = json_decode($json_data);

        return $response_data;
    }

    public static function BloodTypeList()
    {
        return [
            'A+' => 'A+',
            'A-' => 'A-',
            'B+' => 'B+',
            'B-' => 'B-',
            'AB+' => 'AB+',
            'AB-' => 'AB-',
            'O+' => 'O+',
            'O-' => 'O-',
            'x' => 'Tidak Tahu',
        ];
    
    }
    public static function WargaList()
    {
        return [
            'Warganegara Malaysia' => 'Warganegara Malaysia',
            // 'Penduduk Tetap' => 'Penduduk Tetap',
            'Bukan Warganegara' => 'Bukan Warganegara',
        ];
    }

    public static function StatusKerja()
    {
        return [
            'Bekerja' => 'Bekerja',
            'Pelajar' => 'Pelajar',
            '99' => 'Lain-lain',
        ];
    }

    public static function ifError($msg)
    {
        return Yii::$app->getSession()->setFlash('danger', [
            'type' => 'danger',
            'duration' => 5000,
            'icon' => 'fa fa-exclamation',
            'message' => $msg,
            'title' => 'Tidak Berjaya',
            'positonY' => 'top',
            'positonX' => 'right'
        ]);
    }

    public static function ifSuccess($msg)
    {
        return Yii::$app->getSession()->setFlash('success', [
            'type' => 'success',
            'duration' => 5000,
            'icon' => 'fa fa-check',
            'message' => $msg,
            'title' => 'Berjaya',
            'positonY' => 'top',
            'positonX' => 'right'
        ]);
    }
}
