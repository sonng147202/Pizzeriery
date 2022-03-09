<?php

class UserModel
{
    //Check xem user này có tồn tại không
    public static function find_one($email, $password)
    {
        return DB::db_num_rows("SELECT `user_id` FROM `users` WHERE `user_email` = '$email' AND `user_password` = '$password'");
    }
    //lấy ra thông tin cơ bản của 1 user
    public static function get_user($email)
    {
        return DB::fetch_array("SELECT `user_id`, `user_email`, `role_id`, `created_at`, `updated_at` FROM `users` WHERE `user_email` = '$email'");
    }
}
