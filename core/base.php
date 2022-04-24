<?php

function load_folder($path)
{
    if(file_exists($path) && is_dir($path))
        $result = scandir($path);
        $files = array_diff($result, array('.', '..'));
        if(count($files) > 0)
            foreach($files as $file)
                require $path . DIRECTORY_SEPARATOR . $file;
}

function load_storage($type, $name)
{
    $path = APPPATH . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . $type . DIRECTORY_SEPARATOR . "{$name}.php";
    if (file_exists($path))
        require "$path";
}

function Model($name){
    $path = APPPATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . "{$name}Model.php";
    if (file_exists($path))
        require "$path";
}

function Controller($name){
    $path = APPPATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . "{$name}Controller.php";
    if (file_exists($path))
        require "$path";
}

function asset($name, $type = 0){
    $source = '/public/';
    if ($type) {
        $source =  $_SERVER['HTTP_HOST'] . '/public/';
    }
    $path = $source . $name;
    return "$path";
}
