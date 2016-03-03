<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Status;

/**
 * StatusSearch represents the model behind the search form about `backend\models\Status`.
 */
class StatusSearch extends Status
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_id', 'trainer_id'], 'integer'],
            [['status_pass', 'status_fail'], 'safe'],
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
        $query = Status::find();

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
            'status_id' => $this->status_id,
            'trainer_id' => $this->trainer_id,
        ]);

        $query->andFilterWhere(['like', 'status_pass', $this->status_pass])
            ->andFilterWhere(['like', 'status_fail', $this->status_fail]);

        return $dataProvider;
    }
}
