<?php


namespace frontend\controllers;

use common\models\Drink;
use frontend\models\SearchDrinks;
use Yii;
use frontend\models\CatalogDrinks;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\web\Controller;

class DrinkController extends ActiveController
{
    public $modelClass= CatalogDrinks::class;

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'drinks',
    ];

    public function behaviors()
    {
        return [
            'contentNegotiator' => [
                'class' => ContentNegotiator::class,
                'formatParam' => 'format',
                'formats' => [
                    'application/json' => Response::FORMAT_JSON,
                    'xml' => Response::FORMAT_XML
                ]
            ]
        ];
    }

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider()
    {
        $searchModel=new SearchDrinks();
        return $searchModel->search(Yii::$app->request->queryParams);
    }

}