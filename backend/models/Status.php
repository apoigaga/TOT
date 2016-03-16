<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $status_id
 * @property string $status_pass
 * @property string $status_fail
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_pass', 'status_fail'], 'required'],
            [['status_pass', 'status_fail'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'status_pass' => 'Status Pass',
            'status_fail' => 'Status Fail',
        ];
    }

    public function getTrainer()
    {
        return $this->hasOne(Trainer::classname(),['status_id'=> 'status_id']);
    }

   


}
