<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "trainerAnswer".
 *
 * @property integer $trainerAnswer_id
 * @property string $trainerAnswer_answer
 * @property string $trainer_id
 * @property string $question_id
 * @property string $mark_id
 */
class TrainerAnswer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trainerAnswer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trainerAnswer_answer', 'trainer_id', 'question_id', 'mark_id'], 'required'],
            [['trainerAnswer_answer', 'trainer_id', 'question_id', 'mark_id'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trainerAnswer_id' => 'Trainer Answer ID',
            'trainerAnswer_answer' => 'Trainer Answer Answer',
            'trainer_id' => 'Trainer ID',
            'question_id' => 'Question ID',
            'mark_id' => 'Mark ID',
        ];
    }

    public function getTrainer()
    {
        return $this->hasOne(Trainer::classname(),['trainer_id'=> 'trainer_id']);
    }

    public function getMark()
    {
        return $this->hasOne(Mark::classname(),['mark_id'=> 'mark_id']);
    }

    public function getQuestion()
    {
        return $this->hasOne(Question::classname(),['question_id'=> 'question_id']);
    }



}
