<?php

use yii\db\Migration;

class m160301_004206_addAttributeTblTrainer extends Migration
{
    public function up()
    {
        $this->addColumn('trainer', 'trainerAnswer_id', 'INT');

    }

    public function down()
    {
        echo "m160301_004206_addAttributeTblTrainer cannot be reverted.\n";

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
