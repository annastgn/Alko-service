<?php


namespace frontend\controllers;

use common\models\Drink;
use Yii;
use frontend\models\CatalogDrinksAPI;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\web\Controller;

class DrinksController extends ActiveController
{
    public $modelClass= CatalogDrinksAPI::class;

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
}