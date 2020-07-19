<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RekapTagihan;

/**
 * RekapTagihanSearch represents the model behind the search form of `app\models\RekapTagihan`.
 */
class RekapTagihanSearch extends RekapTagihan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'idstatus'], 'integer'],
            [['terbayar', 'sisa_tagihan'], 'safe'],
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
        $query = RekapTagihan::find();

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
            'nim' => $this->nim,
            'idstatus' => $this->idstatus,
        ]);

        $query->andFilterWhere(['like', 'terbayar', $this->terbayar])
            ->andFilterWhere(['like', 'sisa_tagihan', $this->sisa_tagihan]);

        return $dataProvider;
    }
}
