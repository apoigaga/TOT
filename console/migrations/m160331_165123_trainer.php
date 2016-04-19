<?php

use yii\db\Schema;
use yii\db\Migration;

class m160331_165123_trainer extends Migration
{
    public function up()
    {
        $this->createTable('trainer', [
            'trainer_id' => Schema::TYPE_PK,
            'trainer_name' => Schema::TYPE_STRING . '(50) NOT NULL',
            'trainer_icNO' => Schema::TYPE_STRING . '(12) NOT NULL',
            'trainer_address' => Schema::TYPE_STRING . '(100) NOT NULL',
            'trainer_phoneNO' => Schema::TYPE_STRING . '(15) NOT NULL',
            'trainer_email' => Schema::TYPE_STRING . '(50) NOT NULL',
            'trainer_race' => Schema::TYPE_STRING . '(20) NOT NULL',
            'trainer_maritialStatus' => Schema::TYPE_STRING . '(20) NOT NULL',
            'trainer_highestQualification' => Schema::TYPE_STRING . '(20) NOT NULL',
            'trainer_occupation' => Schema::TYPE_STRING . '(50) NOT NULL',
            'trainer_dateOfTraining' => Schema::TYPE_DATE . '(20) NOT NULL',
        ]);

    }

    public function down()
    {
        echo "m160331_165123_trainer cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
