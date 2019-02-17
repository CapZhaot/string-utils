<?php

namespace JarvisFramework\StringUtils;

class StringUtils
{
    public function isBlank($string)
    {

        return empty($string);
    }

    public function isNumber($string)
    {
        return is_numeric($string);
    }
}