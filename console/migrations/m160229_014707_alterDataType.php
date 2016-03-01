<?php

use yii\db\Migration;

class m160229_014707_alterDataType extends Migration
{
    public function up()
    {
        $this->alterColumn('trainer', 'question_id', 'INT');
        

    }

    public function down()
    {
        echo "m160229_014707_alterDataType cannot be reverted.\n";

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
