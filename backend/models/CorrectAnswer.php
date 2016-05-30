<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "correctAnswer".
 *
 * @property integer $correctAnswer_id
 * @property string $correctAnswer_answer
 * @property string $question_id
 */
class CorrectAnswer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'correctAnswer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['correctAnswer_answer', 'question_id'], 'required'],
            [['correctAnswer_answer', 'question_id'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'correctAnswer_id' => 'Correct Answer ID',
            'correctAnswer_answer' => 'Correct Answer Answer',
            'question_id' => 'Question ID',
        ];
    }

    public function getQuestion()
    {
        return $this->hasOne(Question::classname(),['question_id'=> 'question_id']);
    }

}
