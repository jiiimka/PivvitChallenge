<?php

use yii\db\Migration;

/**
 * Handles the creation of table `purchase`.
 */
class m170412_165047_create_purchase_table extends Migration
{
    private static $tableName = '{{%Purchase}}';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable(self::$tableName, [
            'id' => $this->primaryKey(),
            'customerName' => $this->string(255),
            'offeringID' => $this->integer(),
            'quantity' => $this->smallInteger(),
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
