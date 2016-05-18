<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Trainer;

/**
 * TrainerSearch represents the model behind the search form about `frontend\models\Trainer`.
 */
class TrainerSearch extends Trainer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trainer_id'], 'integer'],
            [['trainer_name', 'trainer_icNO', 'trainer_address', 'trainer_phoneNO', 'trainer_email', 'trainer_race', 'trainer_maritialStatus', 'trainer_highestQualification', 'trainer_occupation', 'trainer_dateOfTraining','gender_ID'], 'safe'],
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
            'trainer_dateOfTraining' => $this->trainer_dateOfTraining,
            'gender_ID'=> $this->gender_ID,
        ]);

        $query->andFilterWhere(['like', 'trainer_name', $this->trainer_name])
            ->andFilterWhere(['like', 'trainer_icNO', $this->trainer_icNO])
            ->andFilterWhere(['like', 'trainer_address', $this->trainer_address])
            ->andFilterWhere(['like', 'trainer_phoneNO', $this->trainer_phoneNO])
            ->andFilterWhere(['like', 'trainer_email', $this->trainer_email])
            ->andFilterWhere(['like', 'trainer_race', $this->trainer_race])
            ->andFilterWhere(['like', 'trainer_maritialStatus', $this->trainer_maritialStatus])
            ->andFilterWhere(['like', 'trainer_highestQualification', $this->trainer_highestQualification])
            ->andFilterWhere(['like', 'trainer_occupation', $this->trainer_occupation]);

        return $dataProvider;
    }
}
