<?php

use yii\db\Migration;

class m160229_020100_alterDataType1 extends Migration
{
    public function up()
    {
        $this->alterColumn('trainer', 'status_id', 'INT');
        $this->alterColumn('trainerAnswer', 'trainer_id', 'INT');
        $this->alterColumn('trainerAnswer', 'question_id', 'INT');
        $this->alterColumn('trainerAnswer', 'mark_id', 'INT');
        $this->alterColumn('status', 'trainer_id', 'INT');
        $this->alterColumn('mark', 'trainer_id', 'INT');
        $this->alterColumn('mark', 'trainerAnswer_id', 'INT');
        $this->alterColumn('correctAnswer', 'question_id', 'INT');
        $this->alterColumn('trainer', 'status_id', 'INT');
        $this->alterColumn('user', 'trainer_id', 'INT');
        $this->alterColumn('wrongAnswer', 'question_id', 'INT');



    }

    public function down()
    {
        echo "m160229_020100_alterDataType1 cannot be reverted.\n";

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
