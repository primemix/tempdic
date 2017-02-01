<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

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