<?php

namespace frontend\modules\crawler\controllers;

use Yii;
use yii\web\Controller;
use frontend\modules\crawler\models;
use frontend\modules\crawler\models\Json;
use frontend\modules\crawler\models\RequestCrawler;


/**
 * Default controller for the `crawler` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $array = [
            'foo' => 'bar',
            'a' => 'b',
            'param' => [
                'param2' => ['a' => 'b'],
                'foo' => 'bar'
            ],
        ];

        $result = Yii::$container->get('Json')->getSerializer($array);

        return $this->render('index', [
            'encode' => $result
        ]);
    }
}