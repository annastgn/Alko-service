<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property int $id
 * @property string|null $address
 * @property string|null $name
 * @property int|null $scheduleSince
 * @property int|null $scheduleTill
 * @property string|null $availability
 * @property float|null $priceMin
 * @property float|null $priceMax
 * @property int|null $drink_id
 *
 * @property DrinkShopId[] $drinkShops
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['scheduleSince', 'scheduleTill', 'drink_id'], 'default', 'value' => null],
            [['scheduleSince', 'scheduleTill', 'drink_id'], 'integer'],
            [['priceMin', 'priceMax'], 'number'],
            [['address'], 'string', 'max' => 255],
            [['name', 'availability'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'name' => 'Name',
            'scheduleSince' => 'Schedule Since',
            'scheduleTill' => 'Schedule Till',
            'availability' => 'Availability',
            'priceMin' => 'Price Min',
            'priceMax' => 'Price Max',
            'drink_id' => 'Drink ID',
        ];
    }

    /**
     * Gets query for [[DrinkShops]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrinkShops()
    {
        return $this->hasMany(DrinkShopId::className(), ['shop_id' => 'id']);
    }
}
