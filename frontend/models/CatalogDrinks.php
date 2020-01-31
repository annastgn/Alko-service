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

    public function applyFilters($filters){

    }

    public function search($params)
    {
        $query=CatalogDrinks::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if(!($this->load($params, '')&&$this->validate())){
            return $dataProvider;
        }

        $query->andFilterWhere(['name'=>$this->name,]);
    }
}
