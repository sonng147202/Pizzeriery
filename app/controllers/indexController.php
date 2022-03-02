<?php 
namespace App\Controllers;

use App\Models\IndexModel;

class IndexController
{
    public function index()
    {
        view('index');
    }

    public function getData()
    {
        $data = [
            [
                'id' => '001',
                'name' => 'Sơn Nguyễn'
            ],
            [
                'id' => '002',
                'name' => 'Sơn Nguyễn'
            ]
        ];
        echo json_encode($data);
    }
}