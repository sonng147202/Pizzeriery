<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

// // BASE
require COREPATH . DIRECTORY_SEPARATOR . 'base.php';

// // CORE/AVAILABLE
load_folder(COREPATH . DIRECTORY_SEPARATOR . 'available');

// // CONFIG
load_folder(CONFIGPATH);

// // CONTROLLERS
load_folder(FAPPPATH . DIRECTORY_SEPARATOR . 'controllers');

// // MODELS
load_folder(FAPPPATH . DIRECTORY_SEPARATOR . 'models');

// // AUTOLOAD
if (is_array($autoload)) {
    foreach ($autoload as $type => $list_auto) {
        if (!empty($list_auto)) {
            foreach ($list_auto as $name) {
                load_storage($type, $name);
            }
        }
    }
}

// // START SESSION
session_start();

// // API
require ROUTESPATH . DIRECTORY_SEPARATOR . 'api.php';