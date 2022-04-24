<?php 

Model('User');

class UserController
{
    public function login_user()
    {
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null;
        $password = isset($_POST['txtPassword']) ? md5($_POST['txtPassword']) : null;
        if (UserModel::find_one($email, $password)) {
            $payload = UserModel::get_user($email);
            $jsonWebToken = JWT::encode($payload, '_key');
            echo JsonHelper::getJson("token", $jsonWebToken);
        }
    }
}