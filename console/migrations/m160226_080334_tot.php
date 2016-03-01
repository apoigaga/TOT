<?php

use yii\db\Schema;
use yii\db\Migration;

class m160226_080334_tot extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this ->db->driverName === 'mysql') {
            //http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general.
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%trainer}}', [
            'trainer_id' => Schema::TYPE_PK,
            'trainer_name' => Schema::TYPE_STRING . '(50) NOT NULL',
            'trainer_ic' => Schema::TYPE_STRING . '(50) NOT NULL',
            'trainer_studentID' => Schema::TYPE_STRING . '(50) NOT NULL',
            'trainer_address' => Schema::TYPE_STRING . '(50) NOT NULL',
            'trainer_email' => Schema::TYPE_STRING . '(50) NOT NULL',
            'trainer_training_date' => Schema::TYPE_STRING . '(50) NOT NULL',
        ], $tableOptions);


        $this->createTable('{{%trainerAnswer}}',[
        'trainerAnswer_id' =>Schema::TYPE_PK,
        'trainerAnswer_answer' => Schema::TYPE_STRING . '(50) NOT NULL',
        'trainer_id' => Schema::TYPE_STRING . '(50) NOT NULL',
        'question_id' => Schema::TYPE_STRING . '(50) NOT NULL',
        'mark_id' => Schema::TYPE_STRING . '(50) NOT NULL',
        ], $tableOptions);


        $this->createTable('{{%mark}}', [
        'mark_id' =>Schema::TYPE_PK,
        'mark_total' =>Schema::TYPE_STRING . '(50) NOT NULL',
        'trainer_id' =>Schema::TYPE_STRING . '(50) NOT NULL',
        'trainerAnswer_id' =>Schema::TYPE_STRING . '(50) NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%question}}',[
        'question_id' => Schema::TYPE_PK,
        'question' => Schema::TYPE_STRING . '(50) NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%correctAnswer}}',[
        'correctAnswer_id' => Schema::TYPE_PK,
        'correctAnswer_answer' => Schema::TYPE_STRING . '(50) NOT NULL',
        'question_id' => Schema::TYPE_STRING . '(50) NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%wrongAnswer}}',[
        'wrongAnswer_id' => Schema::TYPE_PK,
        'wrongAnswer_wrong' => Schema::TYPE_STRING . '(50) NOT NULL',
        'question_id' => Schema::TYPE_STRING . '(50) NOT NULL',
        ], $tableOptions);


        $this->createTable('{{%status}}',[
        'status_id' => Schema::TYPE_PK,
        'status_pass' => Schema::TYPE_STRING . '(50) NOT NULL',
        'status_fail' => Schema::TYPE_STRING . '(50) NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        echo "m160226_080334_tot cannot be reverted.\n";

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
