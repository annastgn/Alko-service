<?php


namespace frontend\controllers;

use common\models\Drink;
use phpDocumentor\Reflection\Types\This;
use Yii;
use frontend\models\CatalogDrinks;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\filters\ContentNegotiator;
use yii\rest\ActiveController;
use yii\rest\IndexAction;
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
        return[
            'index' => [
                'class' => 'yii\rest\IndexAction',
                'modelClass' => $this->modelClass,
                'checkAccess' => [$this, 'checkAccess'],
                'prepareDataProvider' =>  function(){
                    $requestParams = Yii::$app->request->queryParams;
                    $modelForOutput = new CatalogDrinks();
                    $modelForOutput->filtration($modelForOutput, $requestParams);

                    return new ActiveDataProvider([
                        'query' => $modelForOutput,
                    ]);
                },
            ]
        ];
    }
}