<?php
defined('APPPATH') OR exit('Không được quyền truy cập phần này');

// BASE FILE
require APPPATH . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'base.php';

// *********************__LOAD_FILES__*********************

// CONFIG
load_folder(APPPATH . DIRECTORY_SEPARATOR . 'config');

// AUTOLOAD
if (is_array($autoload)) {
    foreach ($autoload as $type => $list_auto) {
        if (!empty($list_auto)) {
            foreach ($list_auto as $name) {
                load_storage($type, $name);
            }
        }
    }
}

// *********************__DEFAULT__*********************

// CONNECT DB
DB::connection(HOST, USER, PASSWORD, NAME);

// START SESSION
session_start();

// *********************__APP__*********************

// VENDOR
require APPPATH . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// ROUTER
require APPPATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'router.php';

// SPA APP
require APPPATH . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'index.php';