<?php

namespace backend\models;

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
            'trainer_name' => 'Trainer Name',
            'trainer_icNO' => 'Trainer Ic No',
            'trainer_address' => 'Trainer Address',
            'trainer_phoneNO' => 'Trainer Phone No',
            'trainer_email' => 'Trainer Email',
            'trainer_race' => 'Trainer Race',
            'trainer_maritialStatus' => 'Trainer Maritial Status',
            'trainer_highestQualification' => 'Trainer Highest Qualification',
            'trainer_occupation' => 'Trainer Occupation',
            'trainer_dateOfTraining' => 'Trainer Date Of Training',
        ];
    }
}
