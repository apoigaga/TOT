<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ExamTime;

/**
 * examTimeSearch represents the model behind the search form about `backend\models\ExamTime`.
 */
class examTimeSearch extends ExamTime
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['examTime_id'], 'integer'],
            [['exam_start', 'exam_end'], 'safe'],
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
        $query = ExamTime::find();

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
            'examTime_id' => $this->examTime_id,
            'exam_start' => $this->exam_start,
            'exam_end' => $this->exam_end,
        ]);

        return $dataProvider;
    }
}
