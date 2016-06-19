<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Mark;

/**
 * MarkSearch represents the model behind the search form about `backend\models\Mark`.
 */
class MarkSearch extends Mark
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mark_id', 'trainer_id', 'trainerAnswer_id'], 'integer'],
            [['mark_total'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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

        $query = Mark::find(); 

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

 
        $dataProvider->setSort([
            'attributes' => [
                    'mark_total',
                    'asc' => ['mark_total' =>SORT_ASC],
                ]
            ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'mark_id' => $this->mark_id,
            'trainer_id' => $this->trainer_id,
            'trainerAnswer_id' => $this->trainerAnswer_id,
        ]);

        $query->andFilterWhere(['like', 'mark_total', $this->mark_total]);

        return $dataProvider;
    }
}
