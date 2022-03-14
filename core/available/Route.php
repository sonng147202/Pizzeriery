<?php

// namespace Core\Available;

class Route
{
    public static function get($url, $func)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == $url) {
            $func();
            die();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && strlen(strstr($url, $_SERVER['PATH_INFO'].'?')) > 0 && isset($_SERVER['QUERY_STRING'])) {
            parse_str($_SERVER['QUERY_STRING'], $r);
            $func($r);
            die();
        }
    }

    public static function post($url, $func)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == $url) {
            $func($_POST);
            die();
        }
    }
}
