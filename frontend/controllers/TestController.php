<?php

namespace frontend\controllers;

use common\JsonSerializer;
use common\SerializerInterface;
use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        $foo = [
            'foo' => 'bar',
            'a' => 'b',
            'param' => [
                'param2' => ['a' => 'b'],
                'foo' => 'bar'
            ],
        ];

//        $requestCrawler = Yii::$container->get('requestCrawler')->serializer->encode( $foo);
//
//        echo '<pre>';
//        var_dump($requestCrawler);
//        exit;

//        return $this->render('index', [
//            'encode' => $requestCrawler
//        ]);

//        $container = Yii::$container;
        $requestCrawler = Yii::$container->get('requestCrawler')->serializer->encode($foo);

        var_dump($requestCrawler);
    }
}