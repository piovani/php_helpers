<?php

trait Object
{
    function toArray($data)
    {
        if (is_array($data) || is_object($data)) {
            $result = [];

            foreach ($data as $key => $value) {
                $result[$key] = $this->toArray($value);
            }

            return $result;
        }

        return $data;
    }
}
