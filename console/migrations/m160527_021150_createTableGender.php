<?php

use yii\db\Schema;
use yii\db\Migration;

class m160527_021150_createTableGender extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%gender}}', [
            'gender_ID' => Schema::TYPE_PK,
            'gender_type' => 'enum("Male", "Female") NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        echo "m160527_021150_createTableGender cannot be reverted.\n";

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
