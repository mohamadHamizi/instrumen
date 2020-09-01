<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VDataMea;

/**
 * VDataMeaModelsSearch represents the model behind the search form of `app\models\VDataMea`.
 */
class VDataMeaSearch extends VDataMea
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'umur', 'anak_keberapa', 'j1_total_anda_1', 'j1_total_anda_2', 'j2_total_anda_1', 'j2_total_anda_2', 'j3_total_anda_1', 'j3_total_anda_2', 'j4_total_anda_1', 'j4_total_anda_2',
            'j1_total_bos_1', 'j1_total_bos_2', 'j2_total_bos_1', 'j2_total_bos_2', 'j3_total_bos_1', 'j3_total_bos_2', 'j4_total_bos_1', 'j4_total_bos_2'], 'integer'],
            [['tarikh_isi', 'icno', 'tret_anda', 'tret_bos', 'nama_penuh', 'nama_kj', 'jantina', 'jawatan', 'organisasi', 'tarikh_lahir', 'warna', 'bangsa', 'darah', 'j1_pil_anda', 'j1_pil_bos', 'j2_pil_anda', 'j2_pil_bos', 'j3_pil_anda', 'j3_pil_bos', 'j4_pil_anda', 'j4_pil_bos'], 'safe'],
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
        $query = VDataMea::find();

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
            'tarikh_isi' => $this->tarikh_isi,
            'umur' => $this->umur,
            'tarikh_lahir' => $this->tarikh_lahir,
            'anak_keberapa' => $this->anak_keberapa,
            'j1_total_anda_1' => $this->j1_total_anda_1,
            'j1_total_anda_2' => $this->j1_total_anda_2,
            'j2_total_anda_1' => $this->j2_total_anda_1,
            'j2_total_anda_2' => $this->j2_total_anda_2,
            'j3_total_anda_1' => $this->j3_total_anda_1,
            'j3_total_anda_2' => $this->j3_total_anda_2,
            'j4_total_anda_1' => $this->j4_total_anda_1,
            'j4_total_anda_2' => $this->j4_total_anda_2,
        ]);

        $query->andFilterWhere(['like', 'icno', $this->icno])
            ->andFilterWhere(['like', 'tret_anda', $this->tret_anda])
            ->andFilterWhere(['like', 'tret_bos', $this->tret_bos])
            ->andFilterWhere(['like', 'nama_penuh', $this->nama_penuh])
            ->andFilterWhere(['like', 'nama_kj', $this->nama_kj])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'jawatan', $this->jawatan])
            ->andFilterWhere(['like', 'organisasi', $this->organisasi])
            ->andFilterWhere(['like', 'warna', $this->warna])
            ->andFilterWhere(['like', 'bangsa', $this->bangsa])
            ->andFilterWhere(['like', 'darah', $this->darah])
            ->andFilterWhere(['like', 'j1_pil_anda', $this->j1_pil_anda])
            ->andFilterWhere(['like', 'j1_pil_bos', $this->j1_pil_bos])
            ->andFilterWhere(['like', 'j2_pil_anda', $this->j2_pil_anda])
            ->andFilterWhere(['like', 'j2_pil_bos', $this->j2_pil_bos])
            ->andFilterWhere(['like', 'j3_pil_anda', $this->j3_pil_anda])
            ->andFilterWhere(['like', 'j3_pil_bos', $this->j3_pil_bos])
            ->andFilterWhere(['like', 'j4_pil_anda', $this->j4_pil_anda])
            ->andFilterWhere(['like', 'j4_pil_bos', $this->j4_pil_bos]);

        return $dataProvider;
    }
}
