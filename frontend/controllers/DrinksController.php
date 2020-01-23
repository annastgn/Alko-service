<?php


namespace frontend\controllers;

use frontend\controllers\BaseApiController;
use yii\data\ArrayDataProvider;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\web\Controller;

class DrinksController extends BaseApiController
{
    public $modelClass='common\models\Drink';

    /*public function actionShow(){
        $model = new PostsShow();
        $data = $model->show();

        var_dump($data);
       // return $this->render('show',['model'=>$data]);
    }*/

//    public function actionShowOne(){
//        $data = $model->show();
//
//        return $this->render('index',['model'=>$data]);
//    }
}