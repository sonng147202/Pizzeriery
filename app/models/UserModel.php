<?php

class UserModel
{
    public static function login_auth($email, $password)
    {
        return DB::db_num_rows("SELECT `user_id`, `user_email`, `role_id`, `created_at`, `updated_at` FROM `users` WHERE `user_email` = '$email' AND `user_password` = '$password'");
    }
}
