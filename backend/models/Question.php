<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property integer $question_id
 * @property string $question
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question', 'code'], 'required'],
            [['question'], 'string', 'max' => 5000],
            [['question', 'section'], 'string'],
            [['question', 'level'], 'string']

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'question_id' => 'Question ID',
            'question' => 'Question',
            'code' => 'Question Code',
            'section' => 'Section',
            'level' => 'Level'
        ];
    }

    public function getTrainer()
    {
        return $this->hasOne(Trainer::classname(),['trainer_id'=> 'trainer_id']);
    }

    public function getcorrectAnswer()
    {
        return $this->hasOne(correctAnswer::classname(),['correctAnswer_id'=> 'correctAnswer_id']);
    }

    public function getwrongAnswer()
    {
        return $this->hasMany(wrongAnswer::classname(),['wrongAnswer_id'=> 'wrongAnswer_id']);
    }

    public function getAnswer()
    {
        return $this->hasMany(Answer::classname(),['answer_id'=> 'answer_id']);
    }



    
}
