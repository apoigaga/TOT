<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WrongAnswer;

/**
 * WrongAnswerSearch represents the model behind the search form about `backend\models\WrongAnswer`.
 */
class WrongAnswerSearch extends WrongAnswer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wrongAnswer_id', 'question_id'], 'integer'],
            [['wrongAnswer_wrong'], 'safe'],
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
        $query = WrongAnswer::find();

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
            'wrongAnswer_id' => $this->wrongAnswer_id,
            'question_id' => $this->question_id,
        ]);

        $query->andFilterWhere(['like', 'wrongAnswer_wrong', $this->wrongAnswer_wrong]);

        return $dataProvider;
    }
}
