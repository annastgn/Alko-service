<?php

namespace frontend\models;

use common\models\Drink;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class CatalogDrinks extends Drink
{
    public function fields()
    {
        return ['name', 'image'=>function(){
            return ("source/".$this->image);
        }, 'taste', 'averageCost' => function(){
            return (round(($this->minCost+$this->maxCost)/2, 2));
        }];
    }

    public function rules()
    {
        return[
            [['name'], 'string'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function filtration(&$searchModel, $params) // поиск
    {
        $searchModel = $searchModel->find();

        if(count($params) == 0){
            return $searchModel;
        }

        foreach ($params as $nameParams => $userValue) {
            if(!is_array($userValue)) {
                $searchModel = $searchModel->orWhere(['ilike', $nameParams, $userValue]);
            } else {
                foreach ($userValue as $value) {
                    $searchModel = $searchModel->orWhere(['ilike', $nameParams, $value]);
                }
            }
        }

        return $searchModel;
    }
}
