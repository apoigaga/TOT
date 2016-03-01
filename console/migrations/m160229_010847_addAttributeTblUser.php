<?php

use yii\db\Migration;

class m160229_010847_addAttributeTblUser extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'trainer_id', 'VARCHAR(150)');

    }

    public function down()
    {
        echo "m160229_010847_addAttributeTblUser cannot be reverted.\n";

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
