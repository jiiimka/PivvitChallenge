<?php

use yii\db\Migration;

/**
 * Handles the creation of table `offering`.
 */
class m170412_165310_create_offering_table extends Migration
{
    private static $tableName = '{{%Offering}}';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(self::$tableName, [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'price' => $this->double(2),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(self::$tableName);
    }
}
