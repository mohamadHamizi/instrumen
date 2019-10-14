<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "v_demo_results".
 *
 * @property int $id
 * @property string $icno
 * @property string $no_oku 1. No Pendaftaran Kad OKU-Fizikal
 * @property int $kategori 2. Kategori OKU-Fizikal
 * @property string $kategori_lain kategori lain
 * @property int $sebab 3. Sebab OKU-Fizikal
 * @property string $sebab_lain sebab lain
 * @property int $sejak 4. Sejak Umur Berapa Anda Disahkan sebagai OKU-Fizikal
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
 * @property double $kp
 * @property double $pn
 * @property double $al
 * @property double $ap
 * @property double $an
 * @property double $kr
 * @property double $pp
 * @property double $hb
 * @property double $sk
 * @property double $sr
 * @property double $si
 * @property double $pr
 * @property double $kb
 * @property double $ks
 * @property double $kn
 * @property double $pc
 * @property double $kf
 * @property double $hi
 * @property double $rk
 * @property double $jn
 * @property double $ka
 * @property double $pm
 * @property double $us
 * @property double $bp
 * @property double $bd
 * @property double $in
 * @property double $as
 * @property double $em
 * @property double $pi
 * @property double $kh
 */
class VDemoResults extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'v_demo_results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['id', 'kategori', 'sebab', 'sejak', 'jantina', 'agama', 'etnik', 'kahwin', 'kerusi_roda', 'kaki_palsu', 'tgn_palsu', 'tongkat', 'pendidikan'], 'integer'],
            [['kp', 'pn', 'al', 'ap', 'an', 'kr', 'pp', 'hb', 'sk', 'sr', 'si', 'pr', 'kb', 'ks', 'kn', 'pc', 'kf', 'hi', 'rk', 'jn', 'ka', 'pm', 'us', 'bp', 'bd', 'in', 'as', 'em', 'pi', 'kh'], 'number'],
            [['icno'], 'string', 'max' => 16],
            [['no_oku', 'kategori_lain', 'sebab_lain', 'sejak_lain', 'peralatan_lain', 'pendidikan_lain', 'bantuan', 'kerja_anda', 'kerja_psgn', 'negeri'], 'string', 'max' => 150],
            [['agama_lain', 'etnik_lain', 'kahwin_lain', 'pendapatan'], 'string', 'max' => 100],
            [['umur', 'jumlah'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'icno' => 'Icno',
            'no_oku' => '1. No Pendaftaran Kad OKU-Fizikal',
            'kategori' => '2. Kategori OKU-Fizikal',
            'kategori_lain' => 'kategori lain',
            'sebab' => '3. Sebab OKU-Fizikal',
            'sebab_lain' => 'sebab lain',
            'sejak' => '4. Sejak Umur Berapa Anda Disahkan sebagai OKU-Fizikal',
            'sejak_lain' => 'sejak lain',
            'jantina' => '5. Jantina',
            'agama' => '6. Agama',
            'agama_lain' => 'agama lain',
            'etnik' => '7. Etnik/Bangsa',
            'etnik_lain' => 'etnik lain',
            'kahwin' => '8. Status Perkahwinan anda',
            'kahwin_lain' => 'kahwin lain',
            'kerusi_roda' => 'Kerusi Roda',
            'kaki_palsu' => 'Kaki Palsu',
            'tgn_palsu' => 'Tangan Palsu',
            'tongkat' => 'Tongkat',
            'peralatan_lain' => 'Peralatan lain',
            'umur' => '10. Umur',
            'pendidikan' => '11. Taraf pendidikan anda',
            'pendidikan_lain' => 'Pendidikan Lain',
            'bantuan' => '12. Jenis Bantuan/Elaun',
            'jumlah' => '13. Jumlah bantuan',
            'kerja_anda' => '14. Pekerjaan anda',
            'kerja_psgn' => '15. Pekerjaan pasangan',
            'pendapatan' => '16. Pendapatan keluarga',
            'alamat' => '17. Alamat tempat tinggal sekarang',
            'negeri' => '18. Negeri Asal',
            'kp' => 'Kp',
            'pn' => 'Pn',
            'al' => 'Al',
            'ap' => 'Ap',
            'an' => 'An',
            'kr' => 'Kr',
            'pp' => 'Pp',
            'hb' => 'Hb',
            'sk' => 'Sk',
            'sr' => 'Sr',
            'si' => 'Si',
            'pr' => 'Pr',
            'kb' => 'Kb',
            'ks' => 'Ks',
            'kn' => 'Kn',
            'pc' => 'Pc',
            'kf' => 'Kf',
            'hi' => 'Hi',
            'rk' => 'Rk',
            'jn' => 'Jn',
            'ka' => 'Ka',
            'pm' => 'Pm',
            'us' => 'Us',
            'bp' => 'Bp',
            'bd' => 'Bd',
            'in' => 'In',
            'as' => 'As',
            'em' => 'Em',
            'pi' => 'Pi',
            'kh' => 'Kh',
        ];
    }

    /**
     * 
     * set 
     * 1 = negeri
     * 2 = jantina
     * 
     * @param type $set
     * @return array
     */
    public static function statistik($set, $val) {

        if ($set == 1) {
            $total = self::find()->where(['negeri' => $val])->count();

            $sql = "SELECT ROUND(SUM(kp)/$total,2) as kp, ROUND(SUM(pn)/$total,2) as pn, ROUND(SUM(al)/$total,2) as al, ROUND(SUM(ap)/$total,2) as ap, ROUND(SUM(an)/$total,2) as an, ROUND(SUM(kr)/$total,2) as kr, ROUND(SUM(pp)/$total,2) as pp FROM v_demo_results WHERE negeri=$val";
            $model = self::findBySql($sql)->asArray()->one();
        }
        
        if ($set == 2) {
            $total = self::find()->where(['jantina' => $val])->count();

            $sql = "SELECT ROUND(SUM(kp)/$total,2) as kp, ROUND(SUM(pn)/$total,2) as pn, ROUND(SUM(al)/$total,2) as al, ROUND(SUM(ap)/$total,2) as ap, ROUND(SUM(an)/$total,2) as an, ROUND(SUM(kr)/$total,2) as kr, ROUND(SUM(pp)/$total,2) as pp FROM v_demo_results WHERE jantina=$val";
            $model = self::findBySql($sql)->asArray()->one();
        }
        
        if ($set == 3) {
            $total = self::find()->where(['negeri' => $val])->count();

            $sql = "SELECT ROUND(SUM(hb)/$total,2) as hb, ROUND(SUM(sk)/$total,2) as sk, ROUND(SUM(sr)/$total,2) as sr, ROUND(SUM(si)/$total,2) as si, ROUND(SUM(pr)/$total,2) as pr, ROUND(SUM(kb)/$total,2) as kb, ROUND(SUM(ks)/$total,2) as ks, ROUND(SUM(kn)/$total,2) as kn, ROUND(SUM(pc)/$total,2) as pc,ROUND(SUM(kf)/$total,2) as kf FROM v_demo_results WHERE negeri=$val";
            $model = self::findBySql($sql)->asArray()->one();
        }
        
        if ($set == 4) {
            $total = self::find()->where(['jantina' => $val])->count();

            $sql = "SELECT ROUND(SUM(hb)/$total,2) as hb, ROUND(SUM(sk)/$total,2) as sk, ROUND(SUM(sr)/$total,2) as sr, ROUND(SUM(si)/$total,2) as si, ROUND(SUM(pr)/$total,2) as pr, ROUND(SUM(kb)/$total,2) as kb, ROUND(SUM(ks)/$total,2) as ks, ROUND(SUM(kn)/$total,2) as kn, ROUND(SUM(pc)/$total,2) as pc,ROUND(SUM(kf)/$total,2) as kf FROM v_demo_results WHERE jantina=$val";
            $model = self::findBySql($sql)->asArray()->one();
        }


        foreach ($model as $k) {
            $data[] = floatval($k);
        }

        return $data;
    }

}
