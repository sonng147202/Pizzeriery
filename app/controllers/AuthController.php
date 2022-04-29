<?php 

Model('User');

use Lcobucci\JWT\Signer\Key\InMemory;

class AuthController
{
    public function login()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $password = isset($_POST['password']) ? md5($_POST['password']) : null;

        if (UserModel::find_one($email, $password)) {
            $payload = UserModel::get_user($email);
            $jsonWebToken = JWT::encode($payload, '_key');
            echo JsonHelper::getJson("user_token", $jsonWebToken);
        }
    }

    public function register()
    {
        print_r($_POST);
        // $username = isset($_POST['username']) ? $_POST['username'] : null;
        // $email = isset($_POST['email']) ? $_POST['email'] : null;
        // $password = isset($_POST['password']) ? md5($_POST['password']) : null;
        
        // if (!UserModel::exist_user($email)) {
        //     if(UserModel::save_user([
        //         'user_name' => $username,
        //         'user_email' => $email,
        //         'user_password' => $password,
        //     ])) {
        //         echo 'OK';
        //     }
        // }
    }
}