<?php

use yii\db\Schema;
use yii\db\Migration;

class m160523_025449_droptablegender extends Migration
{
    public function up()
    {
        $this->dropTable('gender');

    }

    public function down()
    {
        echo "m160523_025449_droptablegender cannot be reverted.\n";

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
