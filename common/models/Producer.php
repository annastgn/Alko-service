<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "producer".
 *
 * @property int $id
 * @property string $name
 * @property string $country
 *
 * @property Brand[] $brands
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
            [['name', 'country'], 'required'],
            [['name', 'country'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'country' => 'Country',
        ];
    }

    /**
     * Gets query for [[Brands]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrands()
    {
        return $this->hasMany(Brand::className(), ['producerId' => 'id']);
    }
}
