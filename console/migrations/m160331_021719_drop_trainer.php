<?php

use yii\db\Migration;

class m160331_021719_drop_trainer extends Migration
{
    public function up()
    {
        $this->dropTable('trainer');
    }

    public function down()
    {
        $this->createTable('trainer', [
            'id' => $this->primaryKey()
        ]);
    }
}
