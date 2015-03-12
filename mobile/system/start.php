<?php

define('DS', DIRECTORY_SEPARATOR);
define('ENV', getenv('APP_ENV'));
define('VERSION', '0.1');

define('PATH', dirname(__FILE__) . DS);
define('APP', PATH . 'app' . DS);
define('SYS', PATH . 'system' . DS);
define('EXT', '.php');

require SYS . 'functions.php';
require SYS . 'model.php';
require SYS . 'seo.php';
require SYS . 'router.php';

#CARREGA AS CLASSES MODELS DA APLICAÇÃO PRINCIPAL
$modelos = array("model", "Conta_Model", "HTML_Model", "Produtos_Model");
__autoloaddir(MODEL, $modelos);
#CARREGA AS CLASSES CONTROLLERS DA APLICAÇÃO PRINCIPAL
$controllers = array("adminController", "ajaxController", "carrosController", "contasController", "htmlController", "indexController", "informacoesController", "veiculosController");
__autoloaddir(CONTROLLER, $controllers);

require APP . 'libraries' . DS . 'json.php';
require APP . 'libraries' . DS . 'image.php';

$route = new Router();
$route->load();

