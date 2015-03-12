<?php

session_start();

$dev = false;
$ip = '177.142.180.77';

if ($dev) {
    if ($_SERVER['REMOTE_ADDR'] != $ip) {
//        echo 'Estamos em manutenção!';
//        die;
    }
}

define("DIR", getcwd());
define("LANGUAGE", substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
define("SITE", "motors.designlab.com.br/");
define("PROTOCOLO", "http://");
define("CONTROLLERS", "application/controllers/");
define("VIEWS", "application/views/");
define("MODELS", "application/models/");
define("LIBRARIES", "libraries/");
define("SYSTEM", "system/");
define("HELPERS", "system/helpers/");
define("TITLE", "DesignLab - Motors | ");

if (!isset($_GET["url"])) {
    echo "<script>window.location='http://" . SITE . LANGUAGE . "/'</script>";
} else if (strlen($_GET["url"]) == 2) {
    echo "<script>window.location='http://" . SITE . LANGUAGE . "/'</script>";
} else if (strtolower($_GET["url"]) == "admin") {
    echo "<script>window.location='http://" . SITE . LANGUAGE . "/admin/'</script>";
}

require_once( SYSTEM . "system.php");
$start = new System();
$controller = $start->controller;
$action = $start->action;

$app = new $controller();

if (method_exists($controller, $action)) {
    $app->$action();
} else {
    if (method_exists($controller, str_replace('-', '_', $action))) {
        $action = str_replace('-', '_', $action);
        $app->$action();
    } else {
        require '404.php';
        exit();
    }
}
    