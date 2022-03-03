<?php

class IndexModel
{
    public static function index()
    {
        echo 'đây là indexModel';
    }

    public static function get_all_products()
    {
        return DB::fetch_array("SELECT * FROM `products`");
    }
}
