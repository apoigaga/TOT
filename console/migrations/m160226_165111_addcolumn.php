<?php

use yii\db\Migration;

class m160226_165111_addcolumn extends Migration
{
    public function up()
    {
        $this->addColumn('trainer', 'question_id', 'VARCHAR(150) AFTER `trainer_email` ');
    }

    public function down()
    {
        $this->dropColumn('trainer', 'question_id');
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
