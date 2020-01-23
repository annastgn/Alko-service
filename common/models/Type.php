<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property int $id
 * @property int|null $exposure
 * @property string|null $class
 * @property string|null $taste
 * @property string|null $aroma
 * @property float|null $temperature
 * @property string|null $grapeSort
 * @property string|null $color
 * @property string|null $sugarAmount
 *
 * @property Drink[] $drinks
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exposure'], 'default', 'value' => null],
            [['exposure'], 'integer'],
            [['temperature'], 'number'],
            [['class', 'taste', 'aroma', 'grapeSort', 'color', 'sugarAmount'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'exposure' => 'Exposure',
            'class' => 'Class',
            'taste' => 'Taste',
            'aroma' => 'Aroma',
            'temperature' => 'Temperature',
            'grapeSort' => 'Grape Sort',
            'color' => 'Color',
            'sugarAmount' => 'Sugar Amount',
        ];
    }

    /**
     * Gets query for [[Drinks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrinks()
    {
        return $this->hasMany(Drink::className(), ['typeId' => 'id']);
    }
}
