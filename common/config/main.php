<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
//        'json' => [
//            'class' => 'common\JsonSrializer',
//            'pathToSave' => 'common/file',
//        ],
//        'requestCrawler' => common\service\RequestCrawlerServiceBuilder::build(
//            [
//                'class' => 'common\JsonSerializer',
//                'pathToSave' => '/tmp/common/file',
//            ],
//            '/tmp/'
//        ),
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
