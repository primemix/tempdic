<?php

namespace common\service;

use \common\SerializerInterface;

class RequestCrawlerServiceBuilder
{
    /**
     * @param $serializerConfig
     * @param $pathToSave
     * @param param SerializerInterface $serializer
     * @return \Closure
     */
    public static function build($serializer, $pathToSave)
    {
        return function () use ($serializer, $pathToSave) {
            $serializer = \Yii::createObject($serializer);
            $requestCrawler = new \common\RequestCrawler($serializer, ['pathToSave' => $pathToSave]);

            return $requestCrawler;
        };
    }
}