<?php

use yii\db\Schema;
use yii\db\Migration;

class m160331_182354_exam_time extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this ->db->driverName === 'mysql') {
            //http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general.
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%examTime}}', [
            'examTime_id' => Schema::TYPE_PK,
            'exam_start' => Schema::TYPE_DATETIME,
            'exam_end' => Schema::TYPE_DATETIME,
        ], $tableOptions);

    }

    public function down()
    {
        echo "m160331_182354_exam_time cannot be reverted.\n";

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
