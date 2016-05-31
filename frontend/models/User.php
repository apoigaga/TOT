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
    // public $currentPassword;
    // public $newPassword;
    // public $newPasswordConfirm;

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
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'ic_number'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],

            [['newPassword','currentPassword','newPasswordConfirm'], 'required'],
            [['currentPassword'],'validateCurrentPassword'],
            [['newPassword'], StrengthValidator::className(), 'preset'=>'normal', 'userAttribute'=>'username'],

            [['newPassword','newPasswordConfirm'],'string', 'min'=>5],
            [['newPassword','newPasswordConfirm'], 'filter','filter'=>'trim'],
            [['newPasswordConfirm'],'compare','compareAttribute' => 'newPassword', 'message'=>'password do not match'],
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
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'trainer_id' => 'Trainer ID',
            'ic_number' => 'Ic Number',
            'newPassword' => 'New Password',
            'currentPassword' => 'Current Password',
            'newPasswordConfirm' => 'New Password Confirm',

        ];
    }

    public function getLevel(){
        return $this->hasOne(Level::className(), ['level_id' => 'level_id']);
    }

    public function getTrainer(){
        return $this->hasOne(Trainer::className(), ['trainer_id' => '_id']);
    }


    public function validateCurrentPassword()
    {
        if(!$this->verifyPassword($this->currentPassword)){
            $this->addError("currentPassword","Current password incorrect");
        }
    }

    public function verifyPassword($password)
    {
        $dbpassword = static::findOne(['ic_number'=>Yii::$app->user->identity->ic_number, 'status' => self::STATUS_ACTIVE])->password_hash;

        return Yii::$app->security->validatePassword($password,$dbpassword);
    }


}

