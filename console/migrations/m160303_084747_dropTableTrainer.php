<?php

use yii\db\Schema;
use yii\db\Migration;

class m160303_084747_dropTableTrainer extends Migration
{
    public function up()
    {


    }

    public function down()
    {
        $this->dropTable('trainer');
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
