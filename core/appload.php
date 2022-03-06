<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

// // CONFIG
require CONFIGPATH . DIRECTORY_SEPARATOR . 'database.php';

require CONFIGPATH . DIRECTORY_SEPARATOR . 'mail.php';

require CONFIGPATH . DIRECTORY_SEPARATOR . 'path.php';

require CONFIGPATH . DIRECTORY_SEPARATOR . 'autoload.php';

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

// // CORE/AVAILABLE
require AVAILABLEPATH . DIRECTORY_SEPARATOR . 'Database.php';

require AVAILABLEPATH . DIRECTORY_SEPARATOR . 'Route.php';

// // CONNECT DB
DB::connection(HOST, USER, PASSWORD, NAME);

// // START SESSION
session_start();

// // CONTROLLERS
load_folder(FAPPPATH . DIRECTORY_SEPARATOR . 'controllers');

// // API
require ROUTESPATH . DIRECTORY_SEPARATOR . 'api.php';