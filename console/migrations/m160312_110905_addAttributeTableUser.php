<?php

use yii\db\Migration;

class m160312_110905_addAttributeTableUser extends Migration
{
    public function up()
    {
        $this->addColumn('user','ic_number',$this->string());

    }

    public function down()
    { 

        echo "m160312_110905_addAttributeTableUser cannot be reverted.\n";

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
