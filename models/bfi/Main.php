<?php

namespace app\models\bfi;

use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;

/**
 * This is the model class for table "tipi_main".
 *
 * @property int $id
 * @property string $icno
 * @property string $create_dt
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bfi_main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icno'], 'required'],
            [['create_dt'], 'safe'],
            [['icno'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icno' => 'ICNO',
            'create_dt' => 'Tarikh/Masa',
            'pdpaStatus' => 'Status PDPA',
            'pdpaTarikh' => 'Tarikh PDPA',
            'btnView' => 'Perician',
        ];
    }

    public function getPdpaStatus()
    {
        return "Setuju";
    }

    public function getPdpaTarikh()
    {
        return Yii::$app->formatter->asDate($this->create_dt, 'php:d/m/Y'); // 2014-10-06;
    }

    public function getBtnView()
    {
        if ($this->jadual->item10) {
            return  Html::a('<i class="fa fa-eye"></i>', ['bfi/view-result', 'id' => $this->id], ['target'=>'_blank']);
        }

        return null;
    }

    public function getJadual()
    {
        return $this->hasOne(Jadual::className(), ['main_id' => 'id']);
    }

    public function getDemo()
    {
        return $this->hasOne(Demo::className(), ['main_id' => 'id']);
    }

    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }
}
