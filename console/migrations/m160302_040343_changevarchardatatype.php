<?php

use yii\db\Migration;

class m160302_040343_changevarchardatatype extends Migration
{
    public function up()
    {

        $this->alterColumn('question', 'question', 'TEXT');
        $this->alterColumn('correctAnswer', 'correctAnswer_answer', 'TEXT');
        $this->alterColumn('wrongAnswer', 'wrongAnswer_wrong', 'TEXT');
        $this->alterColumn('trainerAnswer', 'trainerAnswer_answer', 'TEXT');

    }

    public function down()
    {
        echo "m160302_040343_changevarchardatatype cannot be reverted.\n";

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
