<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\AttributeBehavior;
use app\models\Users;
use DateTime;

/**
 * This is the model class for table "rekod_cuti".
 *
 * @property int $id
 * @property string $icno
 * @property string $cuti_mula
 * @property string $cuti_tamat
 * @property int $tempoh
 * @property string $remark
 * @property string $mohon_dt
 * @property string $ganti_by
 * @property string $ganti_dt
 * @property string $ganti_remark
 * @property string $ver_by
 * @property string $ver_remark
 * @property string $ver_dt
 * @property string $app_by
 * @property string $app_remark
 * @property string $app_dt
 * @property string $status ENTRY, GANTI, VERIFIED, APPROVED, REJECTED
 */
class RekodCuti extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'rekod_cuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['cuti_mula', 'cuti_tamat', 'mohon_dt', 'ganti_dt', 'ver_dt', 'app_dt'], 'safe'],
            [['tempoh'], 'integer'],
            [['icno', 'ganti_by', 'ver_by', 'app_by'], 'string', 'max' => 16],
            [['icno', 'cuti_mula', 'cuti_tamat', 'ganti_by'], 'required', 'message' => 'Sila Lengkapkan permohonan anda'],
            [['remark', 'ganti_remark', 'ver_remark', 'app_remark'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 15],
        ];
    }

    //untuk convert date
    public function behaviors() {
        return [
            'cuti_mula' => [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['cuti_mula'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
                ],
                'value' => function ($event) {
                    return date('Y-m-d', strtotime(str_replace("/", "-", $this->cuti_mula)));
                },
            ],
            'cuti_tamat' => [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['cuti_tamat'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
                ],
                'value' => function ($event) {
                    return date('Y-m-d', strtotime(str_replace("/", "-", $this->cuti_tamat)));
                },
            ],
            'mohon_dt' => [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['mohon_dt'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
//                    ActiveRecord::EVENT_BEFORE_UPDATE => ['ganti_dt', 'app_dt'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
                ],
                'value' => function ($event) {
                    return date('Y-m-d h:i:s');
                },
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeraku() {
        return $this->hasOne(Users::className(), ['icno' => 'ver_by']);
    }

    public function getGanti() {
        return $this->hasOne(Users::className(), ['icno' => 'ganti_by']);
    }

    public function getPemohon() {
        return $this->hasOne(Users::className(), ['icno' => 'icno']);
    }

    public function getCutiMulaDmy() {

        return date('d/m/Y', strtotime(str_replace("-", "/", $this->cuti_mula)));
    }

    public function getCutiTamatDmy() {

        return date('d/m/Y', strtotime(str_replace("-", "/", $this->cuti_tamat)));
    }

    public function getLogMohon() {

        $date = date_create($this->mohon_dt);

        return date_format($date, 'd/m/Y H:i A');
    }

    public function getLogGanti() {

        $val = '-';

        if ($this->ganti_dt) {
            $date = date_create($this->ganti_dt);
            $val = date_format($date, 'd/m/Y H:i A');
        }

        return $val;
    }

    public function getLogVer() {

        $val = '-';

        if ($this->ver_dt) {
            $date = date_create($this->ver_dt);
            $val = date_format($date, 'd/m/Y H:i A');
        }

        return $val;
    }

    public function getLogApp() {

        $val = '-';

        if ($this->app_dt) {
            $date = date_create($this->app_dt);
            $val = date_format($date, 'd/m/Y H:i A');
        }

        return $val;
    }

    public function getTarikhFull() {
        return $this->getCutiMulaDmy() . ' hingga ' . $this->cutiTamatDmy;
    }

    public function getStat() {
        if ($this->status === 'ENTRY') {
            return "Menunggu tindakan Pengganti";
        }

        if ($this->status === 'GANTI') {
            return "Menunggu Tindakan Perakuan";
        }

        if ($this->status === 'VERIFIED') {
            return "Menunggu tindakan Kelulusan";
        }

        if ($this->status === 'APPROVED') {
            return "Permohonan telah diluluskan";
        }

        if ($this->status === 'REJECTED') {
            return "Permohonan ditolak";
        }
    }

    public static function getTempohCuti($start, $end) {


        $start = date('Y-m-d', strtotime(str_replace("/", "-", $start)));
        $end = date('Y-m-d', strtotime(str_replace("/", "-", $end)));


        $earlier = new DateTime($start);
        $later = new DateTime($end);

        $diff = $later->diff($earlier)->format("%a");

        return $diff;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'icno' => 'Icno',
            'cuti_mula' => 'Cuti Mula',
            'cuti_tamat' => 'Cuti Tamat',
            'tempoh' => 'Tempoh (Hari)',
            'remark' => 'Catatan / Tujuan',
            'mohon_dt' => 'Mohon Dt',
            'ganti_by' => 'Ganti By',
            'ganti_dt' => 'Ganti Dt',
            'ganti_remark' => 'Ganti Remark',
            'ver_by' => 'Ver By',
            'ver_remark' => 'Ver Remark',
            'ver_dt' => 'Ver Dt',
            'app_by' => 'App By',
            'app_remark' => 'App Remark',
            'app_dt' => 'App Dt',
            'status' => 'Status',
            'stat' => 'Status',
            'tarikhFull' => 'Tarikh Cuti',
            'logMohon' => 'Mohon pada',
            'logGanti' => 'Log Tindakan Pengganti',
            'logVer' => 'Log Tindakan Perakuan',
            'logApp' => 'Log Tindakan Kelulusan',
        ];
    }

    public static function noti_ganti() {

        $icno = Yii::$app->user->getId();
        $total = 0;
        $noti = '';

        $model = RekodCuti::find()->where(['ganti_by' => $icno, 'status' => 'ENTRY'])->all();

        if ($model) {
            $total = count($model);
        }

        if ($total > 0) {
            $noti = '<span class="label label-primary pull-right">' . $total . '</span>';
        }

        return $noti;
    }

    public static function noti_peraku() {

        $icno = Yii::$app->user->getId();
        $total = 0;
        $noti = '';

        //type pentadbiran(1)
        $user = Users::find()->where(['type' => 1, 'icno' => $icno])->one();

        if ($user) {
            $model = RekodCuti::find()->where(['status' => 'GANTI'])->all();

            $total = count($model);
        }

        if ($total > 0) {
            $noti = '<span class="label label-primary pull-right">' . $total . '</span>';
        }

        return $noti;
    }

    public static function noti_lulus() {

        $icno = Yii::$app->user->getId();
        $total = 0;
        $noti = '';
        //for pengetua(5) and timbalan pengetua(4)
        $user = Users::find()->where(['icno' => $icno])->andWhere(['in', 'type', ['4', '5']])->one();

        if ($user) {
            $model = RekodCuti::find()->where(['status' => 'VERIFIED'])->all();

            $total = count($model);
        }

        if ($total > 0) {
            $noti = '<span class="label label-primary pull-right">' . $total . '</span>';
        }

        return $noti;
    }

}
