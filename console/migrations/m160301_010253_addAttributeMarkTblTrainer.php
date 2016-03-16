<?php

use yii\db\Migration;

class m160301_010253_addAttributeMarkTblTrainer extends Migration
{
    public function up()
    {
        $this->addColumn('trainer','mark_id', 'INT');

    }

    public function down()
    {
        echo "m160301_010253_addAttributeMarkTblTrainer cannot be reverted.\n";

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
