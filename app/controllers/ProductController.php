<?php 

Model('Product');

class ProductController
{
    public function get_products()
    {
        $data['cats'] = ProductModel::fetch_cats();
        foreach ($data['cats'] as $value) {
            $data['products'][$value['cat_id']] = ProductModel::fetch_cat_products($value['cat_id']);
        }
        echo json_encode($data);
    }
}