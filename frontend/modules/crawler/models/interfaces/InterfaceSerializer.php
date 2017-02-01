<?php

namespace frontend\modules\crawler\models\interfaces;

/**
 * Interface InterfaceSerializer
 * @package frontend\modules\crawler\models\interfaces
 */
interface InterfaceSerializer
{
    /**
     * @param $array
     * @return mixed
     */
    public function encode($array);
}