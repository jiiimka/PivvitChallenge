<?php
namespace common\models;

use yii\db\ActiveRecord;

/**
 * Offering model
 *
 * @property integer $id
 * @property string $title
 * @property double $price
 */
class Offering extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Offering}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price'], 'required'],
            [['title',], 'string'],
            [['price'], 'number'],
        ];
    }
}
