<?php

define("DIR", getcwd());
define("CONTROLLERS", "../application/controllers/");
define("VIEWS", "../application/views/");
define("MODELS", "../system/models/");
define("MODELS_FILES", "../application/models/");
define("LIBRARIES", "../libraries/");
define("SYSTEM", "../system/");
define("HELPERS", "../system/helpers/");

require_once('lib/nusoap.php');
require_once( SYSTEM . "system.php");

$start = new System(TRUE);

require_once('class/motors.php');

$model = new Motors();

$dadosXML = '<?xml version="1.0" encoding="UTF-8"?>';
$dadosXML .= '<REQUISICOES>';
    $dadosXML .= '<REQUISICAO>';
        $dadosXML .= '<CATEGORIA><![CDATA[]]></CATEGORIA>';
        $dadosXML .= '<LIMIT><![CDATA[0,4]]></LIMIT>';
        $dadosXML .= '<URL><![CDATA[http://auto.designlab.com.br]]></URL>';
        $dadosXML .= '<URL_AMIGAVEL><![CDATA[camaro-amarelo]]></URL_AMIGAVEL>';
    $dadosXML .= '</REQUISICAO>';
$dadosXML .= '</REQUISICOES>';

//$dados['url'] = "auto.designlab.com.br";
//$dados['categoria']="";
//$dados['limit'] = "0,4";
//$dados['url_amigavel'] = "carro-4-1";

$veiculos = $model->getList_veiculos(base64_encode($dadosXML));

