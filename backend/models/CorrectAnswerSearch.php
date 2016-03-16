<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CorrectAnswer;

/**
 * CorrectAnswerSearch represents the model behind the search form about `backend\models\CorrectAnswer`.
 */
class CorrectAnswerSearch extends CorrectAnswer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['correctAnswer_id', 'question_id'], 'integer'],
            [['correctAnswer_answer'], 'safe'],
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
        $query = CorrectAnswer::find();

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
            'correctAnswer_id' => $this->correctAnswer_id,
            'question_id' => $this->question_id,
        ]);

        $query->andFilterWhere(['like', 'correctAnswer_answer', $this->correctAnswer_answer]);

        return $dataProvider;
    }
}
