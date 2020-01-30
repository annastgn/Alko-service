<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "drink".
 *
 * @property int $id
 * @property string $name
 * @property float|null $minCost
 * @property float|null $maxCost
 * @property string|null $image
 * @property string $taste
 */
class Drink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'drink';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['minCost', 'maxCost'], 'number'],
            [['name', 'image', 'taste'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['taste'], 'required'],
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
            'minCost' => 'Min Cost',
            'maxCost' => 'Max Cost',
            'image' => 'Image',
            'taste' => 'Taste',
        ];
    }
}
