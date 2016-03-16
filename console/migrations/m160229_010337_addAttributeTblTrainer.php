<?php

use yii\db\Migration;

class m160229_010337_addAttributeTblTrainer extends Migration
{
    public function up()
    {
        $this->addColumn('trainer', 'status_id', 'VARCHAR(150) AFTER `question_id` ');
        $this->addColumn('trainer', 'training_id', 'VARCHAR(150) AFTER `status_id` ');

    }

    public function down()
    {
        echo "m160229_010337_addAttributeTblTrainer cannot be reverted.\n";

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
