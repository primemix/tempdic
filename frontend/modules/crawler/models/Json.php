<?php

namespace frontend\modules\crawler\models;

use frontend\modules\crawler\models\interfaces\InterfaceSerializer;

/**
 * Class Json
 * @package frontend\modules\crawler\models
 */
class Json implements InterfaceSerializer
{
    /**
     * @param $array
     * @return mixed
     */
    public function encode($array)
    {
        return json_encode($array);
    }
}