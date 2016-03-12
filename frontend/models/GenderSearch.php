<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Gender;

/**
 * GenderSearch represents the model behind the search form about `frontend\models\Gender`.
 */
class GenderSearch extends Gender
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender_id'], 'integer'],
            [['gender_type'], 'safe'],
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
        $query = Gender::find();

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
            'gender_id' => $this->gender_id,
        ]);

        $query->andFilterWhere(['like', 'gender_type', $this->gender_type]);

        return $dataProvider;
    }
}
