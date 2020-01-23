<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producer".
 *
 * @property int $id
 * @property string|null $country
 * @property string|null $brand
 *
 * @property Drink[] $drinks
 */
class Producer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'producer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country'], 'string', 'max' => 100],
            [['brand'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'brand' => 'Brand',
        ];
    }

    /**
     * Gets query for [[Drinks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrinks()
    {
        return $this->hasMany(Drink::className(), ['producerId' => 'id']);
    }
}
