<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Answer;

/**
 * AnswerSearch represents the model behind the search form about `backend\models\Answer`.
 */
class AnswerSearch extends Answer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['answer_id', 'question_id'], 'integer'],
            [['answer', 'correct'], 'safe'],
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
        $query = Answer::find();

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
            'answer_id' => $this->answer_id,
            'question_id' => $this->question_id,
        ]);

        $query->andFilterWhere(['like', 'answer', $this->answer])
            ->andFilterWhere(['like', 'correct', $this->correct]);

        return $dataProvider;
    }
}
