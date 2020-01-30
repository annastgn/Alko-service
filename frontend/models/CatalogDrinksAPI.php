<?php

namespace frontend\models;

use common\models\Drink;

class CatalogDrinksAPI extends Drink
{
    public function fields()
    {
        return ['name', 'image'=>function(){
            return ("source/".$this->image);
        }, 'taste', 'averageCost' => function(){
            return (round(($this->minCost+$this->maxCost)/2, 2));
        }];
    }

    public function extraFields()
    {
        return [
            ''
        ];
    }
}
