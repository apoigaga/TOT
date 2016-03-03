<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "wrongAnswer".
 *
 * @property integer $wrongAnswer_id
 * @property string $wrongAnswer_wrong
 * @property string $question_id
 */
class WrongAnswer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wrongAnswer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wrongAnswer_wrong', 'question_id'], 'required'],
            [['wrongAnswer_wrong', 'question_id'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wrongAnswer_id' => 'Wrong Answer ID',
            'wrongAnswer_wrong' => 'Wrong Answer Wrong',
            'question_id' => 'Question ID',
        ];
    }

    public function getQuestion()
    {
        return $this->hasOne(Question::classname(),['question_id'=> 'question_id']);
    }

}
