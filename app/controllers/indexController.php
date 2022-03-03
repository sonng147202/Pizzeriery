<?php 

Model('index');

class IndexController
{
    public function index()
    {
        view('index');
    }

    public function get_products()
    {
        $data_products = IndexModel::get_all_products();
        echo json_encode($data_products);
    }
}