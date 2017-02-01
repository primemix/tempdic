<?php

namespace frontend\modules\crawler\models;

use frontend\modules\crawler\models\interfaces\InterfaceSerializer;

/**
 * Class RequestCrawler
 * @package frontend\modules\crawler\models
 */
class RequestCrawler
{
    /** @var InterfaceSerializer  */
    private $serializerProvider;

    /**
     * RequestCrawler constructor.
     * @param InterfaceSerializer $serializerProvider
     */
    public function __construct(InterfaceSerializer $serializerProvider)
    {
        $this->serializerProvider = $serializerProvider;
    }

    /**
     * @param array $array
     * @return mixed
     */
    public function getSerializer(array $array)
    {
        return $this->serializerProvider->encode($array);
    }
}