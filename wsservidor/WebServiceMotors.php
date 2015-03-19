<?php

/*
 * PARAMETROS DE INTEGRACAO DO WEBSERVICE A AREA ADMINISTRATIVA MOTORS
 */
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


/*
 * PUBLICACAO DA CLASSE "Motors" RESPONSAVEL PELO CONTROLE DO WEBSERVICE
 */
require_once('class/motors.php');


/*
 * REGISTRO DOS METODOS DO WEBSERVICE
 */
$server = new soap_server();

$server->configureWSDL('WebServiceMotors', 'urn:WebServiceMotors');
$server->wsdl->schemaTargetNamespace = 'urn:WebServiceMotors';

/*
 * REGISTRO DOS METODOS DO WEBSERVICE 
 */
$server->register('Motors.getConta', //Registro do método da classe no formato classe.método
        array('URL' => 'xsd:STRING'), // Array que contém os parametros de entrada
        array('RETORN' => 'xsd:STRING'), // Array com o que será o retorno
        'urn:WebServiceMotors', // namespace
        $server->wsdl->endpoint . '#' . 'Motors.getConta', // soapaction, utilização de formato padrão
        'rpc', // style
        'encoded', // use
        'Este metodo retorna um xml com os dados da conta convertido em base 64 passando como parametro a url da loja' // documentação
);

$server->register('Motors.getEndereco', 
        array('URL' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getEndereco',
        'rpc',
        'encoded',
        'Este metodo retorna um xml com os dados da conta convertido em base 64 passando como parametro a url da loja'
);

$server->register('Motors.getTelefones', 
        array('URL' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getTelefones',
        'rpc',
        'encoded',
        'Este metodo retorna um xml com os dados da conta convertido em base 64 passando como parametro a url da loja'
);

$server->register('Motors.getConfiguracao', 
        array('URL' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getConfiguracao',
        'rpc',
        'encoded',
        'Este metodo retorna um xml com os dados da conta convertido em base 64 passando como parametro a url da loja'
);

$server->register('Motors.getOnde_estamos', 
        array('URL' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getOnde_estamos',
        'rpc',
        'encoded',
        'Este metodo retorna uma string com o link do google maps de localizacao do cliente passando como parametro a url da loja'
);

$server->register('Motors.getInstitucional', 
        array('URL' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getInstitucional',
        'rpc',
        'encoded',
        'Este metodo retorna um texto insitucional html da empresa do cliente passando como parametro a url da loja'
);

$server->register('Motors.getList_fabricantes', 
        array('docXML' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getList_fabricantes',
        'rpc',
        'encoded',
        'Este metodo retorna um xml com os dados dos fabricantes cadastrados'
);
$server->register('Motors.getList_fabricantes_vender', 
        array('docXML' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getList_fabricantes',
        'rpc',
        'encoded',
        'Este metodo retorna um xml com os dados dos fabricantes cadastrados'
);

$server->register('Motors.getList_veiculos', 
        array('docXML' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getList_veiculos',
        'rpc',
        'encoded',
        'Este metodo retorna um xml com os dados dos veiculos cadastrados pela conta em base 64 passando como parametro a categoria, limit e a url da loja. Caso nao seja passado a categoria o parametro deve ser enviado null. Caso nao seja passado o limit o parametro deve ser passado null e o valor default do limit se torna 0,4'
); 
$server->register('Motors.getList_veiculos_filtro', 
        array('docXML' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getList_veiculos_filtro',
        'rpc',
        'encoded',
        'Este metodo retorna um xml com os dados dos veiculos cadastrados pela conta em base 64 passando como parametro os campos do filtro. Caso nao seja passado a categoria o parametro deve ser enviado null. Caso nao seja passado o limit o parametro deve ser passado null e o valor default do limit se torna 0,4'
);

$server->register('Motors.getList_veiculos_fotos', 
        array('docXML' => 'xsd:STRING'),
        array('RETORN' => 'xsd:STRING'),
        'urn:WebServiceMotors',
        $server->wsdl->endpoint . '#' . 'Motors.getList_veiculos_fotos',
        'rpc',
        'encoded',
        'Este metodo retorna um xml com os links e propriedades de cada imegem publicada no veiculo em base 64 passando como parametro a url da loja e a url amigavel do produto'
);

/*
 * INICIA OS SERVICOS DO WEBSERVICE 
 */
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);







//$conn->close();



/*
$servidor = new nusoap_server();
//$servidor->soap_defencoding = 'utf-8';
//$servidor->decode_utf8 = false;
$servidor->configureWSDL("urn:Servidor");
$servidor->wsdl->schemaTargetNamespace = "urn:Servidor";

function examplo($nome, $idade){
    return($nome." -> ".$idade);
}

$servidor->register(
        "examplo",
        array("nome"=>"xsd:string", 
            "idade"=>"xsd:int"),
        array("retorno"=>"xsd:string"),
        "urn:Servidor.examplo",
        "urn:Servidor.examplo",
        "rpc",
        "encoded",
        "Apenas um exemplo utilizado em PHP"
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : "";
$servidor->service($HTTP_RAW_POST_DATA);
*/