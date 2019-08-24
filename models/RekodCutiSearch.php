<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RekodCuti;

/**
 * RekodCutiSearch represents the model behind the search form of `app\models\RekodCuti`.
 */
class RekodCutiSearch extends RekodCuti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['icno', 'cuti_mula', 'cuti_tamat', 'remark', 'mohon_dt', 'ganti_by', 'ganti_dt', 'ganti_remark', 'app_by', 'app_remark', 'app_dt', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RekodCuti::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cuti_mula' => $this->cuti_mula,
            'cuti_tamat' => $this->cuti_tamat,
            'mohon_dt' => $this->mohon_dt,
            'ganti_dt' => $this->ganti_dt,
            'app_dt' => $this->app_dt,
        ]);

        $query->andFilterWhere(['like', 'icno', $this->icno])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'ganti_by', $this->ganti_by])
            ->andFilterWhere(['like', 'ganti_remark', $this->ganti_remark])
            ->andFilterWhere(['like', 'app_by', $this->app_by])
            ->andFilterWhere(['like', 'app_remark', $this->app_remark])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
