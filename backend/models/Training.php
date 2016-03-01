<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "training".
 *
 * @property integer $training_id
 * @property string $training_name
 * @property string $training_date
 * @property string $training_venue
 */
class Training extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'training';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['training_name', 'training_venue'], 'required'],
            [['training_date'], 'safe'],
            [['training_name', 'training_venue'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'training_id' => 'Training ID',
            'training_name' => 'Training Name',
            'training_date' => 'Training Date',
            'training_venue' => 'Training Venue',
        ];
    }

    public function getTrainer()
    {
        return $this->hasOne(Trainer::classname(),['trainer_id'=> 'trainer_id']);
    }

}
