<?php

use yii\db\Schema;
use yii\db\Migration;

class m160229_011618_training extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this ->db->driverName === 'mysql') {
            //http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general.
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%training}}', [
            'training_id' => Schema::TYPE_PK,
            'training_name' => Schema::TYPE_STRING . '(50) NOT NULL',
            'training_date' => Schema::TYPE_DATE,
            'training_venue' => Schema::TYPE_STRING . '(50) NOT NULL',
            ], $tableOptions);

    }

    public function down()
    {
        echo "m160229_011618_training cannot be reverted.\n";

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
