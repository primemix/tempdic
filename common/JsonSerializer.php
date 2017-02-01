<?php

namespace common;

class JsonSerializer implements SerializerInterface
{
    public function encode($array)
    {
        return json_encode($array);
    }
}