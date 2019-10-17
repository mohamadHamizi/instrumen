<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkuMain;

/**
 * OkuMainSearch represents the model behind the search form of `app\models\OkuMain`.
 */
class OkuMainSearch extends OkuMain
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'skor_a', 'skor_b', 'skor_c', 'skor_d', 'status'], 'integer'],
            [['icno', 'created_dt'], 'safe'],
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
        $query = OkuMain::find();

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
            'skor_a' => $this->skor_a,
            'skor_b' => $this->skor_b,
            'skor_c' => $this->skor_c,
            'skor_d' => $this->skor_d,
            'status' => $this->status,
            'created_dt' => $this->created_dt,
        ]);

        $query->andFilterWhere(['like', 'icno', $this->icno]);

        return $dataProvider;
    }
}
