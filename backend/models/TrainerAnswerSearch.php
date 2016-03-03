<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TrainerAnswer;

/**
 * TrainerAnswerSearch represents the model behind the search form about `backend\models\TrainerAnswer`.
 */
class TrainerAnswerSearch extends TrainerAnswer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trainerAnswer_id', 'trainer_id', 'question_id', 'mark_id'], 'integer'],
            [['trainerAnswer_answer'], 'safe'],
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
        $query = TrainerAnswer::find();

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
            'trainerAnswer_id' => $this->trainerAnswer_id,
            'trainer_id' => $this->trainer_id,
            'question_id' => $this->question_id,
            'mark_id' => $this->mark_id,
        ]);

        $query->andFilterWhere(['like', 'trainerAnswer_answer', $this->trainerAnswer_answer]);

        return $dataProvider;
    }
}
