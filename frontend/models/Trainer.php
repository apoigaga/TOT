<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "trainer".
 *
 * @property integer $trainer_id
 * @property string $trainer_name
 * @property string $trainer_icNO
 * @property string $trainer_address
 * @property string $trainer_phoneNO
 * @property string $trainer_email
 * @property string $trainer_race
 * @property string $trainer_maritialStatus
 * @property string $trainer_highestQualification
 * @property string $trainer_occupation
 * @property string $trainer_dateOfTraining
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
            [['trainer_name', 'trainer_icNO', 'trainer_address', 'trainer_phoneNO', 'trainer_email', 'trainer_race', 'trainer_maritialStatus', 'trainer_highestQualification', 'trainer_occupation', 'trainer_dateOfTraining'], 'required'],
            [['trainer_dateOfTraining'], 'safe'],
            [['trainer_name', 'trainer_email', 'trainer_occupation'], 'string', 'max' => 50],
            [['trainer_icNO'], 'string', 'max' => 12],
            [['trainer_address'], 'string', 'max' => 100],
            [['trainer_phoneNO'], 'string', 'max' => 15],
            [['trainer_race', 'trainer_maritialStatus', 'trainer_highestQualification'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'trainer_id' => 'Trainer ID',
            'trainer_name' => 'Name',
            'trainer_icNO' => 'Ic No',
            'trainer_address' => 'Address',
            'trainer_phoneNO' => 'Phone No',
            'trainer_email' => 'Email',
            'trainer_race' => 'Race',
            'trainer_maritialStatus' => 'Maritial Status',
            'trainer_highestQualification' => 'Highest Qualification',
            'trainer_occupation' => 'Occupation',
            'trainer_dateOfTraining' => 'Date Of Training',
        ];
    }
}
