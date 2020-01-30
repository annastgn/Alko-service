<?php

namespace frontend\models;

use yii\base\Model;
use frontend\models\CatalogDrinks;
use yii\data\ActiveDataProvider;

class SearchDrinks extends CatalogDrinks
{
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

    public function search($params)
    {
        $query=CatalogDrinks::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, '');
        if(!$this->validate()){
            print_r($this->errors);
            return $dataProvider;
        }

        $query->andFilterWhere(['name'=>$this->name,]);
    }
}
