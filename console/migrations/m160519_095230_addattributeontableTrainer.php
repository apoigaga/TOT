<?php

use yii\db\Schema;
use yii\db\Migration;

class m160519_095230_addattributeontableTrainer extends Migration
{
    public function up()
    {
        $this->addColumn('trainer', 'gender_ID', 'INT(5) AFTER trainer_dateOfTraining'); 

    }

    public function down()
    {
        echo "m160519_095230_addattributeontableTrainer cannot be reverted.\n";

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
