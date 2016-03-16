<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mark".
 *
 * @property integer $mark_id
 * @property string $mark_total
 * @property string $trainer_id
 * @property string $trainerAnswer_id
 */
class Mark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mark_total', 'trainer_id', 'trainerAnswer_id'], 'required'],
            [['mark_total', 'trainer_id', 'trainerAnswer_id'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mark_id' => 'Mark ID',
            'mark_total' => 'Mark Total',
            'trainer_id' => 'Trainer ID',
            'trainerAnswer_id' => 'Trainer Answer ID',
        ];
    }

    public function getTrainer()
    {
        return $this->hasOne(Trainer::classname(),['trainer_id'=> 'trainer_id']);
    }

    public function gettrainerAnswer()
    {
        return $this->hasOne(trainerAnswer::classname(),['trainerAnswer_id'=> 'trainerAnswer_id']);
    }

    


}
