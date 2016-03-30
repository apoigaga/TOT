<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $trainer_id
 * @property string $ic_number
 */
class User extends \yii\db\ActiveRecord
{

    public $current_pass,$new_pass,$retype_pass;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'trainer_id'], 'integer'],
            [['current_pass', 'new_pass', 'retype_pass'], 'required','on'=>'change','message'=>''],
            ['current_pass','checkOldPassword','on'=>'change','message'=>'Please enter your correct password'],
            ['retype_pass', 'compare','compareAttribute'=>'new_pass'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'ic_number'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            ['confirm_password', 'compare','compareAttribute'=>'create_password', 'on'=>'firstTime'],
            [['create_password', 'confirm_password'], 'required', 'on'=>'firstTime'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'current_pass' => 'Current Password',
            'new_pass' => 'New Password',
            'retype_pass' => 'Retype Password',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'trainer_id' => 'Trainer ID',
            'ic_number' => 'Ic Number',
            'confirm_password' => 'Confirm Password',
        ];
    }

    /**
     *  @ check old password is correct or wrong.
     */
    public function checkOldPassword($attribute,$params)
    {
        $record = User::find()->where(['password_hash'=>md5($this->current_pass.$this->current_pass)])->one();

        if($record === null) {
            $this->addError($attribute, 'Invalid or Wrong password');
        }
    }
}
