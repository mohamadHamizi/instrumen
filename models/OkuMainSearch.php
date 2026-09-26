<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use app\models\OkuMain;

/**
 * OkuMainSearch represents the model behind the search form of `app\models\OkuMain`.
 */
class OkuMainSearch extends OkuMain
{
    public $nama;
    public $jantina;
    public $umur;
    public $negeri;
    public $tarikh_mula;
    public $tarikh_akhir;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'skor_a', 'skor_b', 'skor_c', 'skor_d', 'status', 'jantina', 'negeri'], 'integer'],
            [['icno', 'created_dt', 'nama', 'umur', 'tarikh_mula', 'tarikh_akhir'], 'safe'],
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
        $query = OkuMain::find()->orderBy(['oku_main.id' => SORT_DESC]);

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

        $query->joinWith('demografi', false);

        $this->applyFilters($query, 'oku_main', 'oku_demografi');

        return $dataProvider;
    }

    /**
     * Applies the common filter conditions to a query.
     *
     * Shared by the grid data provider and the fast CSV export so both
     * always interpret the same filter parameters identically.
     *
     * @param Query $query
     * @param string $mainAlias alias of the oku_main table in $query
     * @param string $demografiAlias alias of the oku_demografi table in $query
     */
    public function applyFilters(Query $query, $mainAlias, $demografiAlias)
    {
        $query->andFilterWhere([
            $mainAlias . '.id' => $this->id,
            $mainAlias . '.skor_a' => $this->skor_a,
            $mainAlias . '.skor_b' => $this->skor_b,
            $mainAlias . '.skor_c' => $this->skor_c,
            $mainAlias . '.skor_d' => $this->skor_d,
            $mainAlias . '.status' => $this->status,
        ]);

        $query->andFilterWhere(['like', $mainAlias . '.icno', $this->icno]);

        $query->andFilterWhere(['like', $demografiAlias . '.nama', $this->nama]);
        $query->andFilterWhere([$demografiAlias . '.jantina' => $this->jantina]);
        $query->andFilterWhere(['like', $demografiAlias . '.umur', $this->umur]);
        $query->andFilterWhere([$demografiAlias . '.negeri' => $this->negeri]);

        if (!empty($this->tarikh_mula)) {
            $query->andWhere(['>=', $mainAlias . '.created_dt', $this->tarikh_mula . ' 00:00:00']);
        }
        if (!empty($this->tarikh_akhir)) {
            $query->andWhere(['<=', $mainAlias . '.created_dt', $this->tarikh_akhir . ' 23:59:59']);
        }
    }
}
