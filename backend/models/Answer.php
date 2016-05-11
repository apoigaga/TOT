<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "answer".
 *
 * @property integer $answer_id
 * @property string $answer
 * @property integer $question_id
 * @property string $correct
 */
class Answer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['answer', 'correct'], 'required'],
            [['question_id'], 'integer'],
            [['answer', 'correct'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'answer_id' => 'Answer ID',
            'answer' => 'Answer',
            'question_id' => 'Question ID',
            'correct' => 'Correct',
        ];
    }


    public function getQuestion()
    {
        return $this->hasOne(Question::classname(),['question_id'=> 'question_id']);
    }
}
