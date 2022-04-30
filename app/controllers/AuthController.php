<?php 

Model('User');

class AuthController
{
    public function login()
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $password = isset($_POST['password']) ? md5($_POST['password']) : null;

        if (UserModel::find_one($email, $password)) {
            $payload = UserModel::get_user($email);
            $jsonWebToken = JWT::encode($payload, 'SECRET_KEY');
            echo JsonHelper::getJson("token", $jsonWebToken);
        }
    }

    public function register()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $password = isset($_POST['password']) ? md5($_POST['password']) : null;
        
        if (!UserModel::exist_user($email)) {
            if(UserModel::save_user([
                'username' => $username,
                'email' => $email,
                'password' => $password,
            ])) {
                echo 'OK';
            }
        }
    }

    public function get_profile()
    {
        $headers = apache_request_headers();
        $token = isset($headers['Authorization']) ? $headers['Authorization'] : null;
        if ($token)
            $profile_user = JWT::decode($token, 'SECRET_KEY', true);
            echo json_encode($profile_user);
    }
}