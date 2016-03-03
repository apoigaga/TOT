<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Training;

/**
 * TrainingSearch represents the model behind the search form about `backend\models\Training`.
 */
class TrainingSearch extends Training
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['training_id'], 'integer'],
            [['training_name', 'training_date', 'training_venue'], 'safe'],
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
        $query = Training::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'training_id' => $this->training_id,
            'training_date' => $this->training_date,
        ]);

        $query->andFilterWhere(['like', 'training_name', $this->training_name])
            ->andFilterWhere(['like', 'training_venue', $this->training_venue]);

        return $dataProvider;
    }
}
