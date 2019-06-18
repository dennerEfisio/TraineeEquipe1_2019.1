<?php

class Request
{
    public static function uri()
    {
        if(strstr($_SERVER['REQUEST_URI'], "?"))
        {
            return trim(substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], "?")), '/');    
        }
        return trim($_SERVER['REQUEST_URI'],'/');

    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}