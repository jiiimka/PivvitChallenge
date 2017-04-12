<?php
namespace common\models;

use yii\db\ActiveRecord;

/**
 * Purchase model
 *
 * @property integer $id
 * @property string $customerName
 * @property integer $offeringID
 * @property string $quantity
 */
class Purchase extends ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Purchase}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customerName', 'offeringID', 'quantity'], 'required'],
            [['customerName',], 'string'],
            [['offeringID', 'quantity'], 'number'],
        ];
    }
}
