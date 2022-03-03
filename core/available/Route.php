<?php

// namespace Core\Available;

class Route
{
    public static function get($url, $func)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == $url) {
            $func();
        }
    }

    public static function post($url, $func)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == $url) {
            $func();
        }
    }
}
