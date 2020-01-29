<?php


namespace frontend\controllers;

use common\models\Drink;
use frontend\models\DrinkAPI;
use yii\data\ArrayDataProvider;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\web\Controller;

class DrinksController extends ActiveController
{
    public $modelClass= DrinkAPI::class;

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function checkAccess($action, $model=null, $params=[]){
        return true;
    }

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
}