<?php

namespace common;

/**
 * Interface SerializerInterface
 * @package common
 */
interface SerializerInterface
{
    /**
     * @param $array
     * @return mixed
     */
    public function encode($array);
}