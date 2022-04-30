<?php

class UserModel
{
    //Check xem user này có tồn tại không
    public static function find_one($email, $password)
    {
        return DB::db_num_rows("SELECT `id` FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    }
    //lấy ra thông tin cơ bản của 1 user
    public static function get_user($email)
    {
        return DB::fetch_array("SELECT `id`, `username`, `email` FROM `users` WHERE `email` = '$email'");
    }

    public static function exist_user($email)
    {
        return DB::db_num_rows("SELECT `id` FROM `users` WHERE `email` = '$email'");
    }

    public static function save_user($data)
    {
        return DB::insert('users', $data);
    }
}
