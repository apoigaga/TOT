<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gender".
 *
 * @property integer $gender_id
 * @property string $gender_type
 */
class Gender extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gender';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gender_type'], 'required'],
            [['gender_type'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gender_id' => 'Gender ID',
            'gender_type' => 'Gender Type',
        ];
    }
}
