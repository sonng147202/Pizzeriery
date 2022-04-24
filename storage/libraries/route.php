<?php

class Route
{
    public static function get($url, $func)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == $url) {
            $func();
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
