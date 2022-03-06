<?php 

Model('User');

class UserController
{
    public function login_user()
    {
        $email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : null;
        $password = isset($_POST['txtPassword']) ? md5($_POST['txtPassword']) : null;
        if (UserModel::login_auth($email, $password)) {
            print_r($result);
        }
    }
}