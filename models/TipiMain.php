<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "tipi_main".
 *
 * @property int $id
 * @property string $icno
 * @property string $create_dt
 */
class TipiMain extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipi_main';
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
        ];
    }

    public function getJadual()
    {
        return $this->hasOne(TipiJadual::className(), ['main_id' => 'id']);
    }

    public function getDemo()
    {
        return $this->hasOne(TipiDemo::className(), ['main_id' => 'id']);
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
