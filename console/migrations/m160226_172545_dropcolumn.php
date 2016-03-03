<?php

use yii\db\Migration;

class m160226_172545_dropcolumn extends Migration
{
    public function up()
    {
        $this->dropColumn('trainer', 'trainer_training_date');
    
    }

    public function down()
    {
        echo "m160226_172545_dropcolumn cannot be reverted.\n";

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
