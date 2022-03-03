<?php

define('APPPATH', dirname(__FILE__));

define('COREPATH', APPPATH . DIRECTORY_SEPARATOR . 'core');

define('CONFIGPATH', APPPATH.DIRECTORY_SEPARATOR . 'config');

// // BASE
require COREPATH . DIRECTORY_SEPARATOR . 'base.php';
// // APPLOAD
require COREPATH . DIRECTORY_SEPARATOR . 'appload.php';



