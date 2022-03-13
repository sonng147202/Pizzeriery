<?php

class ProductModel
{
    public static function fetch_cats()
    {
        return DB::fetch_array("SELECT * FROM `category`");
    }

    public static function fetch_cat_products($cat_id)
    {
        return DB::fetch_array("SELECT * FROM `products` WHERE `cat_id` = '$cat_id'");
    }

    public static function fetch_price_scale($prodc_id)
    {
        return DB::fetch_array("SELECT * FROM `price_scale` WHERE `prodc_id` = '$prodc_id'");
    }
}
