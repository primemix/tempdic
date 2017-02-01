<?php

//Yii::$container->set(\common\SerializerInterface::class, [
//    'class' => \common\JsonSerializer::class,
//    'pathToSave' => '/tmp/JsonPath'
//]);
//Yii::$container->set('requestCrawler', [
//    'class' => \common\RequestCrawler::class,
//    'serializer' => [
//        'class' => '\common\JsonSerializer()',
//        ],
//    'pathToSave' => '/file'
//]);

Yii::$container->set(\frontend\modules\crawler\models\interfaces\InterfaceSerializer::class, [
    'class' => \frontend\modules\crawler\models\Json::class,
    'RequestCrawler' => [
        'class' => \frontend\modules\crawler\models\RequestCrawler::class,
    ],
]);

Yii::$container->set('RequestCrawler', [
    'class' => \frontend\modules\crawler\models\RequestCrawler::class,
    'getSerializer' => [
        'class' => \frontend\modules\crawler\models\RequestCrawler::class,
    ],
]);

//-------------------------------------------------------!
//Yii::$container->set('Json', function() {
//    $foo = new \frontend\modules\crawler\models\RequestCrawler(new \frontend\modules\crawler\models\Json);
//    return $foo;
//});