<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lands;

/**
 * LandsSearch represents the model behind the search form of `app\models\Lands`.
 */
class LandsSearch extends Lands
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['land_id', 'admin_id'], 'integer'],
            [['land_location', 'land_size', 'land_price'], 'safe'],
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
        $query = Lands::find();

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
            'land_id' => $this->land_id,
            'admin_id' => $this->admin_id,
        ]);

        $query->andFilterWhere(['like', 'land_location', $this->land_location])
            ->andFilterWhere(['like', 'land_size', $this->land_size])
            ->andFilterWhere(['like', 'land_price', $this->land_price]);

        return $dataProvider;
    }
}
