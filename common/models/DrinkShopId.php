<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "drinkShopId".
 *
 * @property int $id
 * @property int $shop_id
 * @property int $drink_id
 *
 * @property Drink $drink
 * @property Shop $shop
 */
class DrinkShopId extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drinkShopId';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shop_id', 'drink_id'], 'required'],
            [['shop_id', 'drink_id'], 'default', 'value' => null],
            [['shop_id', 'drink_id'], 'integer'],
            [['drink_id'], 'exist', 'skipOnError' => true, 'targetClass' => Drink::className(), 'targetAttribute' => ['drink_id' => 'id']],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shop::className(), 'targetAttribute' => ['shop_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'shop_id' => 'Shop ID',
            'drink_id' => 'Drink ID',
        ];
    }

    /**
     * Gets query for [[Drink]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrink()
    {
        return $this->hasOne(Drink::className(), ['id' => 'drink_id']);
    }

    /**
     * Gets query for [[Shop]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(Shop::className(), ['id' => 'shop_id']);
    }
}
