<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Drink".
 *
 * @property int $id
 * @property string $name
 * @property float $strength
 * @property int|null $rate
 * @property int|null $shelfLife
 * @property float $minCost
 * @property float $maxCost
 * @property int $producerId
 * @property int $typeId
 *
 * @property Comment[] $comments
 * @property Producer $producer
 * @property Type $type
 * @property DrinkShopId[] $drinkShops
 */
class Drink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Drink';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'strength', 'minCost', 'maxCost', 'producerId', 'typeId'], 'required'],
            [['strength', 'minCost', 'maxCost'], 'number'],
            [['rate', 'shelfLife', 'producerId', 'typeId'], 'default', 'value' => null],
            [['rate', 'shelfLife', 'producerId', 'typeId'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['producerId'], 'exist', 'skipOnError' => true, 'targetClass' => Producer::className(), 'targetAttribute' => ['producerId' => 'id']],
            [['typeId'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['typeId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'strength' => 'Strength',
            'rate' => 'Rate',
            'shelfLife' => 'Shelf Life',
            'minCost' => 'Min Cost',
            'maxCost' => 'Max Cost',
            'producerId' => 'Producer ID',
            'typeId' => 'Type ID',
        ];
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['drinkId' => 'id']);
    }

    /**
     * Gets query for [[Producer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducer()
    {
        return $this->hasOne(Producer::className(), ['id' => 'producerId']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'typeId']);
    }

    /**
     * Gets query for [[DrinkShops]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrinkShops()
    {
        return $this->hasMany(DrinkShopId::className(), ['drink_id' => 'id']);
    }
}
