<?php 

Model('Product');

class ProductController
{
    public function get_products()
    {
        $data['cats'] = ProductModel::fetch_cats();
        foreach ($data['cats'] as $value) {
            $data['products'][$value['id']] = ProductModel::fetch_cat_products($value['id']);
        }
        echo json_encode($data);
    }

    public function get_price_scale($get)
    {
        $data = ProductModel::fetch_price_scale($get['id']);
        if (!empty($data)) {
            echo json_encode($data);
        }
    }
    
    public function order_product($post)
    {
        echo json_encode($post);
    }
}