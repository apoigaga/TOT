<?php

use yii\db\Migration;

class m160619_200111_addColumnUsersRole extends Migration
{
    public function up()
    {
	$this->addColumn('user', 'role', $this->integer());
	
    }

    public function down()
    {
        echo "m160619_200111_addColumnUsersRole cannot be reverted.\n";

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
