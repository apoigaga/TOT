<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "trainer".
 *
 * @property integer $trainer_id
 * @property string $trainer_name
 * @property string $trainer_ic
 * @property string $trainer_studentID
 * @property string $trainer_address
 * @property string $trainer_email
 * @property string $trainer_training_date
 */
class Trainer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trainer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['trainer_name', 'trainer_ic', 'trainer_studentID', 'trainer_address', 'trainer_email', 'trainer_training_date'], 'required'],
            [['trainer_name', 'trainer_ic', 'trainer_studentID', 'trainer_address', 'trainer_email', 'trainer_training_date'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trainer_id' => 'Trainer ID',
            'trainer_name' => 'Trainer Name',
            'trainer_ic' => 'Trainer Ic',
            'trainer_studentID' => 'Trainer Student ID',
            'trainer_address' => 'Trainer Address',
            'trainer_email' => 'Trainer Email',
            'trainer_training_date' => 'Trainer Training Date',
        ];
    }
}
