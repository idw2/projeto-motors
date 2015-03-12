<?php 

session_start();

define("LANGUAGE", substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));

if(!isset($_SESSION['CODCONTA'])){
    header('Location: /' . LANGUAGE . '/admin/login');
}

define('DS', DIRECTORY_SEPARATOR);
define('ENV', getenv('APP_ENV'));
define('VERSION', '0.1');


define('PATH', dirname(__FILE__) . DS);
define('PATH_ROOT', str_replace("mobile", "application", dirname(__FILE__)) . DS);
define('MODEL', PATH_ROOT . "models" . DS);
define('CONTROLLER', PATH_ROOT . "controllers" . DS);

define('APP', PATH . 'app' . DS);
define('SYS', PATH . 'system' . DS);
define('EXT', '.php');

require SYS . 'start' . EXT;