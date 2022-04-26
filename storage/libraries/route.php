<?php
    // echo '<pre>';
    // print_r($_SERVER);
class Route
{
    public static function get($url, $func)
    {
        $uri = $_SERVER['SCRIPT_NAME'].$url;

        if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['PHP_SELF'] == $uri) {
            $func($slug = $_GET);
            die();
        }
    }

    public static function post($url, $func)
    {
        $uri = $_SERVER['SCRIPT_NAME'].$url;
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['PHP_SELF'] == $uri) {
            $func($slug = $_POST);
            die();
        }
    }
}
