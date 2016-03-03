<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Trainer;

/**
 * TrainerSearch represents the model behind the search form about `backend\models\Trainer`.
 */
class TrainerSearch extends Trainer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trainer_id', 'question_id', 'status_id', 'trainerAnswer_id', 'mark_id'], 'integer'],
            [['trainer_name', 'trainer_ic', 'trainer_studentID', 'trainer_address', 'trainer_email', 'training_id'], 'safe'],
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
        $query = Trainer::find();

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
            'trainer_id' => $this->trainer_id,
            'question_id' => $this->question_id,
            'status_id' => $this->status_id,
            'trainerAnswer_id' => $this->trainerAnswer_id,
            'mark_id' => $this->mark_id,
        ]);

        $query->andFilterWhere(['like', 'trainer_name', $this->trainer_name])
            ->andFilterWhere(['like', 'trainer_ic', $this->trainer_ic])
            ->andFilterWhere(['like', 'trainer_studentID', $this->trainer_studentID])
            ->andFilterWhere(['like', 'trainer_address', $this->trainer_address])
            ->andFilterWhere(['like', 'trainer_email', $this->trainer_email])
            ->andFilterWhere(['like', 'training_id', $this->training_id]);

        return $dataProvider;
    }
}
