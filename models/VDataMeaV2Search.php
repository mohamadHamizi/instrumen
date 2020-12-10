<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VDataMeaV2;

/**
 * VDataMeaV2Search represents the model behind the search form of `app\models\VDataMeaV2`.
 */
class VDataMeaV2Search extends VDataMeaV2
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'umur', 'anak_keberapa', 'j1_total_anda_1', 'j1_total_anda_2', 'j1_total_pen_1_1', 'j1_total_pen_1_2', 'j1_total_pen_2_1', 'j1_total_pen_2_2', 'j2_total_anda_1', 'j2_total_anda_2', 'j2_total_pen_11', 'j2_total_pen_12', 'j2_total_pen_21', 'j2_total_pen_22', 'j3_total_anda_1', 'j3_total_anda_2', 'j3_total_pen_11', 'j3_total_pen_12', 'j3_total_pen_21', 'j3_total_pen_22', 'j4_total_anda_1', 'j4_total_anda_2', 'j4_total_pen_11', 'j4_total_pen_12', 'j4_total_pen_21', 'j4_total_pen_22'], 'integer'],
            [['tarikh_isi', 'icno', 'tret_anda', 'tret_penilai_1', 'tret_penilai_2', 'nama_penuh', 'penilai_1', 'penilai_2', 'jantina', 'jawatan', 'organisasi', 'organisasi_lain', 'tarikh_lahir', 'warna', 'bangsa', 'darah', 'j1_pil_anda', 'j1_pil_pen_1', 'j1_pil_pen_2', 'j2_pil_anda', 'j2_pil_pen_1', 'j2_pil_pen_2', 'j3_pil_anda', 'j3_pil_pen_1', 'j3_pil_pen_2', 'j4_pil_anda', 'j4_pil_pen_1', 'j4_pil_pen_2'], 'safe'],
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
        $query = VDataMeaV2::find();

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
            'j1_total_pen_1_1' => $this->j1_total_pen_1_1,
            'j1_total_pen_1_2' => $this->j1_total_pen_1_2,
            'j1_total_pen_2_1' => $this->j1_total_pen_2_1,
            'j1_total_pen_2_2' => $this->j1_total_pen_2_2,
            'j2_total_anda_1' => $this->j2_total_anda_1,
            'j2_total_anda_2' => $this->j2_total_anda_2,
            'j2_total_pen_11' => $this->j2_total_pen_11,
            'j2_total_pen_12' => $this->j2_total_pen_12,
            'j2_total_pen_21' => $this->j2_total_pen_21,
            'j2_total_pen_22' => $this->j2_total_pen_22,
            'j3_total_anda_1' => $this->j3_total_anda_1,
            'j3_total_anda_2' => $this->j3_total_anda_2,
            'j3_total_pen_11' => $this->j3_total_pen_11,
            'j3_total_pen_12' => $this->j3_total_pen_12,
            'j3_total_pen_21' => $this->j3_total_pen_21,
            'j3_total_pen_22' => $this->j3_total_pen_22,
            'j4_total_anda_1' => $this->j4_total_anda_1,
            'j4_total_anda_2' => $this->j4_total_anda_2,
            'j4_total_pen_11' => $this->j4_total_pen_11,
            'j4_total_pen_12' => $this->j4_total_pen_12,
            'j4_total_pen_21' => $this->j4_total_pen_21,
            'j4_total_pen_22' => $this->j4_total_pen_22,
        ]);

        $query->andFilterWhere(['like', 'icno', $this->icno])
            ->andFilterWhere(['like', 'tret_anda', $this->tret_anda])
            ->andFilterWhere(['like', 'tret_penilai_1', $this->tret_penilai_1])
            ->andFilterWhere(['like', 'tret_penilai_2', $this->tret_penilai_2])
            ->andFilterWhere(['like', 'nama_penuh', $this->nama_penuh])
            ->andFilterWhere(['like', 'penilai_1', $this->penilai_1])
            ->andFilterWhere(['like', 'penilai_2', $this->penilai_2])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'jawatan', $this->jawatan])
            ->andFilterWhere(['like', 'organisasi', $this->organisasi])
            ->andFilterWhere(['like', 'organisasi_lain', $this->organisasi_lain])
            ->andFilterWhere(['like', 'warna', $this->warna])
            ->andFilterWhere(['like', 'bangsa', $this->bangsa])
            ->andFilterWhere(['like', 'darah', $this->darah])
            ->andFilterWhere(['like', 'j1_pil_anda', $this->j1_pil_anda])
            ->andFilterWhere(['like', 'j1_pil_pen_1', $this->j1_pil_pen_1])
            ->andFilterWhere(['like', 'j1_pil_pen_2', $this->j1_pil_pen_2])
            ->andFilterWhere(['like', 'j2_pil_anda', $this->j2_pil_anda])
            ->andFilterWhere(['like', 'j2_pil_pen_1', $this->j2_pil_pen_1])
            ->andFilterWhere(['like', 'j2_pil_pen_2', $this->j2_pil_pen_2])
            ->andFilterWhere(['like', 'j3_pil_anda', $this->j3_pil_anda])
            ->andFilterWhere(['like', 'j3_pil_pen_1', $this->j3_pil_pen_1])
            ->andFilterWhere(['like', 'j3_pil_pen_2', $this->j3_pil_pen_2])
            ->andFilterWhere(['like', 'j4_pil_anda', $this->j4_pil_anda])
            ->andFilterWhere(['like', 'j4_pil_pen_1', $this->j4_pil_pen_1])
            ->andFilterWhere(['like', 'j4_pil_pen_2', $this->j4_pil_pen_2]);

        return $dataProvider;
    }
}
