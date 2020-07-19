<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaticMatakuliah;

/**
 * StaticMatakuliahSearch represents the model behind the search form of `app\models\StaticMatakuliah`.
 */
class StaticMatakuliahSearch extends StaticMatakuliah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sks', 'total_student'], 'integer'],
            [['code', 'name', 'abbr'], 'safe'],
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
        $query = StaticMatakuliah::find();

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
            'sks' => $this->sks,
            'total_student' => $this->total_student,
        ]);

        $query->andFilterWhere(['like', 'code', $this->code])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'abbr', $this->abbr]);

        return $dataProvider;
    }
}
