<?php

use yii\db\Schema;
use yii\db\Migration;

class m160314_012216_createTableLevel extends Migration
{
    public function up()
    {

        $tableOptions = null;
        if ($this ->db->driverName === 'mysql') {
            //http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general.
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%level}}', [
            'level_id' => Schema::TYPE_PK,
            'level_name' => Schema::TYPE_STRING . '(50) NOT NULL',
        ], $tableOptions);

    }

    public function down()
    {
        echo "m160314_012216_createTableLevel cannot be reverted.\n";

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
