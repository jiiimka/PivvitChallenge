<?php

use yii\db\Migration;

class m170412_172609_alter_offering_table_insert_items extends Migration
{
    private static $tableName = '{{%Offering}}';

    public function up()
    {
        $this->insert(self::$tableName, ['title' => 'Laptop','price' => 1000.00]);
        $this->insert(self::$tableName, ['title' => 'Iphone','price' => 900.00]);
    }

    public function down()
    {
        $this->truncateTable(self::$tableName);
    }
}
