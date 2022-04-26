<?php 

Model('index');
use Lcobucci\JWT\Signer\Key\InMemory;

class IndexController
{
    public function index()
    {
        View('index');
    }
    
    public function get_token()
    {
        $key = InMemory::plainText('my-key-as-plaintext');
        print_r($key);
    }
}