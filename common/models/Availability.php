<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "availability".
 *
 * @property int $idDrink
 * @property int $idShop
 * @property int $idVolume
 * @property float|null $price
 */
class Availability extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'availability';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idDrink', 'idShop', 'idVolume'], 'required'],
            [['idDrink', 'idShop', 'idVolume'], 'default', 'value' => null],
            [['idDrink', 'idShop', 'idVolume'], 'integer'],
            [['price'], 'number'],
            [['idDrink', 'idShop', 'idVolume'], 'unique', 'targetAttribute' => ['idDrink', 'idShop', 'idVolume']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDrink' => 'Id Drink',
            'idShop' => 'Id Shop',
            'idVolume' => 'Id Volume',
            'price' => 'Price',
        ];
    }
}
