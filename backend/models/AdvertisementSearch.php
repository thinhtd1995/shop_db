<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Advertisement;

/**
 * AdvertisementSearch represents the model behind the search form of `backend\models\Advertisement`.
 */
class AdvertisementSearch extends Advertisement
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'orders_sort', 'type', 'status'], 'integer'],
            [['images', 'link', 'created_at', 'updated_at'], 'safe'],
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
        $query = Advertisement::find();

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
            'orders_sort' => $this->orders_sort,
            'type' => $this->type,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'link', $this->link]);

        return $dataProvider;
    }
}
