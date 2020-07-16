<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VDataMipk;

/**
 * VDataMipkSearch represents the model behind the search form of `app\models\VDataMipk`.
 */
class VDataMipkSearch extends VDataMipk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['id', 'skor_a', 'skor_b', 'skor_c', 'skor_d', 'status'], 'integer'],
            [['nama', 'create_datetime','skor'], 'safe'],
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
        $query = VDataMipk::find()->orderBy(['id'=>'DESC']);

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
            // 'id' => $this->id,
            'nama' => $this->nama,
            'create_datetime' => $this->create_datetime,
            'skor' => $this->skor,
        ]);

        $query->andFilterWhere(['like', 'id', $this->id]);

        return $dataProvider;
    }
}
