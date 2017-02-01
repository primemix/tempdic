<?php

namespace common;

use yii\base\Component;

/**
 * Class RequestCrawler
 * @package common
 */
class RequestCrawler extends Component
{
    public $serializer;
    public $pathToSave;

    public function __construct(SerializerInterface $serializer, $config = [])
    {
        $this->serializer = $serializer;
        parent::__construct($config);
    }
}