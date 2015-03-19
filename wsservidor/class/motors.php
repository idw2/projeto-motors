<?php

class Motors {

    public function __construct() {
        #var_dump($this);
    }

    public function convertReturnWS_base64($resultXMLWS, $typeReturn) {

        if ($typeReturn != "STRING") {

            $xml = base64_decode($resultXMLWS);

            $string = <<<XML
$xml  
XML;
        }

        if ($typeReturn == "XML") {
            return simplexml_load_string($string);
        } else if ($typeReturn == "ARRAY") {
            return $this->xmlstr_to_array($string);
        } else if ($typeReturn == "STRING") {
            return $resultXMLWS;
        } else if ($typeReturn == "OBJECT") {
            $arr = $this->xmlstr_to_array($string);

            $obj = (object) $obj;

            if (is_array($arr)) {
                if (sizeof($arr) > 0) {
                    foreach ($arr as $array) {
                        foreach ($array as $name => $value) {
                            $obj->$name = $value;
                        }
                    }
                    return $obj;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    public function xmlstr_to_array($xmlstr) {
        $doc = new DOMDocument();
        $doc->loadXML($xmlstr);
        return $this->domnode_to_array($doc->documentElement);
    }

    public function domnode_to_array($node) {
        $output = array();
        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;
            case XML_ELEMENT_NODE:
                for ($i = 0, $m = $node->childNodes->length; $i < $m; $i++) {
                    $child = $node->childNodes->item($i);
                    $v = $this->domnode_to_array($child);
                    if (isset($child->tagName)) {
                        $t = $child->tagName;
                        if (!isset($output[$t])) {
                            $output[$t] = array();
                        }
                        $output[$t][] = $v;
                    } elseif ($v) {
                        $output = (string) $v;
                    }
                }
                if (is_array($output)) {
                    if ($node->attributes->length) {
                        $a = array();
                        foreach ($node->attributes as $attrName => $attrNode) {
                            $a[$attrName] = (string) $attrNode->value;
                        }
                        $output['@attributes'] = $a;
                    }
                    foreach ($output as $t => $v) {
                        if (is_array($v) && count($v) == 1 && $t != '@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }
        return $output;
    }

    public function getConta($url) {

        $controller = new Controller();
        $url = $controller->limpaURL($url);

        $model = new Conta_Model();
        $conta = $model->get_conta($url);

        if ($conta) {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<CONTAS>';
            $response .= '<CONTA>';
            $response .= '<CODCONTA><![CDATA[' . $conta->CODCONTA . ']]></CODCONTA>';
            $response .= '<DTA><![CDATA[' . $conta->DTA . ']]></DTA>';
            $response .= '<NOME_RAZAO_SOCIAL><![CDATA[' . $conta->NOME_RAZAO_SOCIAL . ']]></NOME_RAZAO_SOCIAL>';
            $response .= '<TIPO_CONTA><![CDATA[' . $conta->TIPO_CONTA . ']]></TIPO_CONTA>';
            $response .= '<ID><![CDATA[' . $conta->ID . ']]></ID>';
            $response .= '<SITE><![CDATA[' . $conta->SITE . ']]></SITE>';
            $response .= '<EMAIL><![CDATA[' . $conta->EMAIL . ']]></EMAIL>';
            $response .= '<SENHA><![CDATA[' . $conta->SENHA . ']]></SENHA>';
            $response .= '<LEMBRETE><![CDATA[' . $conta->LEMBRETE . ']]></LEMBRETE>';
            $response .= '<NASCIMENTO_FUNDACAO><![CDATA[' . $conta->NASCIMENTO_FUNDACAO . ']]></NASCIMENTO_FUNDACAO>';
            $response .= '<CPF_CNPJ><![CDATA[' . $conta->CPF_CNPJ . ']]></CPF_CNPJ>';
            $response .= '<PAPEL><![CDATA[' . $conta->PAPEL . ']]></PAPEL>';
            $response .= '<SEXO><![CDATA[' . $conta->SEXO . ']]></SEXO>';
            $response .= '<STATUS><![CDATA[' . $conta->STATUS . ']]></STATUS>';
            $response .= '<SUSPENSO><![CDATA[' . $conta->SUSPENSO . ']]></SUSPENSO>';
            $response .= '<BLOQUEADO><![CDATA[' . $conta->BLOQUEADO . ']]></BLOQUEADO>';
            $response .= '<OWNER><![CDATA[' . $conta->OWNER . ']]></OWNER>';
            $response .= '<DIA><![CDATA[' . $conta->DIA . ']]></DIA>';
            $response .= '<MES><![CDATA[' . $conta->MES . ']]></MES>';
            $response .= '<ANO><![CDATA[' . $conta->ANO . ']]></ANO>';
            $response .= '<CNPJ><![CDATA[' . $conta->CNPJ . ']]></CNPJ>';
            $response .= '<CPF><![CDATA[' . $conta->CPF . ']]></CPF>';
            $response .= '</CONTA>';
            $response .= '</CONTAS>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Conta não cadastrada!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        }
    }

    public function getEndereco($url) {

        $controller = new Controller();
        $url = $controller->limpaURL($url);

        $model = new Conta_Model();
        $endereco = $model->get_endereco_conta($url);

        if ($endereco) {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<ENDERECOS>';
            $response .= '<ENDERECO>';
            $response .= '<CODENDERECO><![CDATA[' . $endereco->CODENDERECO . ']]></CODENDERECO>';
            $response .= '<DTA><![CDATA[' . $endereco->DTA . ']]></DTA>';
            $response .= '<CEP><![CDATA[' . $endereco->CEP . ']]></CEP>';
            $response .= '<LOGRADOURO><![CDATA[' . $endereco->LOGRADOURO . ']]></LOGRADOURO>';
            $response .= '<NUMERO><![CDATA[' . $endereco->NUMERO . ']]></NUMERO>';
            $response .= '<COMPLEMENTO><![CDATA[' . $endereco->COMPLEMENTO . ']]></COMPLEMENTO>';
            $response .= '<UF><![CDATA[' . $endereco->UF . ']]></UF>';
            $response .= '<CIDADE><![CDATA[' . $endereco->CIDADE . ']]></CIDADE>';
            $response .= '<BAIRRO><![CDATA[' . $endereco->BAIRRO . ']]></BAIRRO>';
            $response .= '<STATUS><![CDATA[' . $endereco->STATUS . ']]></STATUS>';
            $response .= '</ENDERECO>';
            $response .= '</ENDERECOS>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Endereço não publicado!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        }
    }

    public function getTelefones($url) {

        $controller = new Controller();
        $url = $controller->limpaURL($url);

        $model = new Conta_Model();
        $telefones = $model->get_telefones_conta($url);


        if ($telefones) {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<TELEFONES>';

            $i = 0;
            foreach ($telefones as $telefone) {
                $response .= '<TELEFONE>';
                $response .= '<CODTELEFONE><![CDATA[' . $telefone->CODTELEFONE . ']]></CODTELEFONE>';
                $response .= '<DTA><![CDATA[' . $telefone->DTA . ']]></DTA>';
                $response .= '<DDD><![CDATA[' . $telefone->DDD . ']]></DDD>';
                $response .= '<TEL><![CDATA[' . $controller->formataNTelefone($telefone->TELEFONE) . ']]></TEL>';
                $response .= '<RAMAL><![CDATA[' . $telefone->RAMAL . ']]></RAMAL>';
                $response .= '<STATUS><![CDATA[' . $telefone->STATUS . ']]></STATUS>';
                $response .= '</TELEFONE>';
                $i++;
            }

            $response .= '</TELEFONES>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Telefones não publicados!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        }
    }

    public function getConfiguracao($url) {

        $controller = new Controller();
        $url = $controller->limpaURL($url);

        $model = new HTML_Model();
        $dados_relevantes = $model->get_dados_relevantes($url);

        if ($dados_relevantes) {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<CONFIGURACOES>';
            $response .= '<CONFIGURACAO>';
            $response .= '<CODDADOSRELEVANTES><![CDATA[' . $dados_relevantes->CODDADOSRELEVANTES . ']]></CODDADOSRELEVANTES>';
            $response .= '<DTA><![CDATA[' . $dados_relevantes->DTA . ']]></DTA>';
            $response .= '<SITE><![CDATA[' . $dados_relevantes->SITE . ']]></SITE>';
            $response .= '<TELEFONE><![CDATA[' . $dados_relevantes->TELEFONE . ']]></TELEFONE>';
            $response .= '<FACEBOOK><![CDATA[' . $dados_relevantes->FACEBOOK . ']]></FACEBOOK>';
            $response .= '<OBS_FALECONOSCO><![CDATA[' . $dados_relevantes->OBS_FALECONOSCO . ']]></OBS_FALECONOSCO>';
            $response .= '<COLOR><![CDATA[' . $dados_relevantes->COLOR . ']]></COLOR>';

            $response .= '<SEG_SEX_INICIO><![CDATA[' . $dados_relevantes->SEG_SEX_INICIO . ']]></SEG_SEX_INICIO>';
            $response .= '<SEG_SEX_FIM><![CDATA[' . $dados_relevantes->SEG_SEX_FIM . ']]></SEG_SEX_FIM>';
            $response .= '<SABADO_INICIO><![CDATA[' . $dados_relevantes->SABADO_INICIO . ']]></SABADO_INICIO>';
            $response .= '<SABADO_FIM><![CDATA[' . $dados_relevantes->SABADO_FIM . ']]></SABADO_FIM>';
            $response .= '<DOMINGO_INICIO><![CDATA[' . $dados_relevantes->DOMINGO_INICIO . ']]></DOMINGO_INICIO>';
            $response .= '<DOMINGO_FIM><![CDATA[' . $dados_relevantes->DOMINGO_FIM . ']]></DOMINGO_FIM>';
            $response .= '<FERIADO_INICIO><![CDATA[' . $dados_relevantes->FERIADO_INICIO . ']]></FERIADO_INICIO>';
            $response .= '<FERIADO_FIM><![CDATA[' . $dados_relevantes->FERIADO_FIM . ']]></FERIADO_FIM>';

            $response .= '<LOGOMARCA><![CDATA[' . $dados_relevantes->LOGOMARCA . ']]></LOGOMARCA>';
            $response .= '<LOGOMARCA_NOME><![CDATA[' . $dados_relevantes->LOGOMARCA_NOME . ']]></LOGOMARCA_NOME>';

            $telefone_link = str_replace("(", "", $dados_relevantes->TELEFONE);
            $telefone_link = str_replace(")", "", $telefone_link);
            $telefone_link = str_replace("-", "", $telefone_link);
            $telefone_link = str_replace(".", "", $telefone_link);
            $telefone_link = str_replace(" ", "", $telefone_link);

            $response .= '<TELEFONE_LINK><![CDATA[' . $telefone_link . ']]></TELEFONE_LINK>';
            $response .= '<TWITTER><![CDATA[' . $dados_relevantes->TWITTER . ']]></TWITTER>';
            $response .= '<LINKEDID><![CDATA[' . $dados_relevantes->LINKEDID . ']]></LINKEDID>';
            $response .= '<GOOGLE_PLUS><![CDATA[' . $dados_relevantes->GOOGLE_PLUS . ']]></GOOGLE_PLUS>';
            $response .= '<INSTAGRAM><![CDATA[' . $dados_relevantes->INSTAGRAM . ']]></INSTAGRAM>';
            $response .= '<EMAIL_FALECONOSCO><![CDATA[' . $dados_relevantes->EMAIL_FALECONOSCO . ']]></EMAIL_FALECONOSCO>';
            $response .= '<ALIAS><![CDATA[' . $dados_relevantes->ALIAS . ']]></ALIAS>';
            $response .= '</CONFIGURACAO>';
            $response .= '</CONFIGURACOES>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Parametros de configuração inexistentes!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        }
    }

    public function getOnde_estamos($url) {
        $controller = new Controller();
        $url = $controller->limpaURL($url);
        $pagina = "onde_estamos";

        $model = new HTML_Model();
        $onde_estamos = $model->get_page($pagina, $url);

        if ($onde_estamos) {
            return new soapval('return', 'xsd:string', $onde_estamos->CONTEUDO);
        } else {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Parametros de localização não informado!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        }
    }

    public function getInstitucional($url) {
        $controller = new Controller();
        $url = $controller->limpaURL($url);
        $pagina = "empresa";

        $model = new HTML_Model();
        $institucional = $model->get_page($pagina, $url);

        if ($institucional) {
            return new soapval('return', 'xsd:string', $institucional->CONTEUDO);
        } else {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Institucional não cadastrado!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        }
    }

    public function getList_veiculos($docXML) {

        $model = new Produtos_Model();

        $xml = base64_decode($docXML);

        $string = <<<XML
$xml
XML;

        $xml = simplexml_load_string($string);

        if (count($xml->REQUISICAO) == 0) {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Não foi possivel renderizar a lista de veiculos!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {
            $url = $xml->REQUISICAO->URL;
            $categoria = ($xml->REQUISICAO->CATEGORIA == "") ? NULL : $xml->REQUISICAO->CATEGORIA;
            $limit = ($xml->REQUISICAO->LIMIT == "") ? NULL : $xml->REQUISICAO->LIMIT;
            $url_amigavel = ($xml->REQUISICAO->URL_AMIGAVEL == "") ? NULL : $xml->REQUISICAO->URL_AMIGAVEL;

            $controller = new Controller();
            $url = $controller->limpaURL($url);

            $veiculos = $model->getWs_produtos_lista_categorias($categoria, $limit, $url, $url_amigavel);
            if ($veiculos) {

                #return new soapval('return', 'xsd:string', base64_encode("teste") );

                $response = '<?xml version="1.0" encoding="UTF-8"?>';
                $response .= '<VEICULOS>';

                $i = 0;
                foreach ($veiculos as $veiculo) {
                    $response .= '<VEICULO>';
                    $response .= '<CODVEICULO><![CDATA[' . $veiculo[0] . ']]></CODVEICULO>';
                    $response .= '<NOME><![CDATA[' . $veiculo[1] . ']]></NOME>';
                    $response .= '<URL_AMIGAVEL><![CDATA[' . $veiculo[2] . ']]></URL_AMIGAVEL>';
                    $response .= '<PRECO><![CDATA[' . $veiculo[3] . ']]></PRECO>';
                    $response .= '<DESCRICAO_1><![CDATA[' . $veiculo[4] . ']]></DESCRICAO_1>';
                    $response .= '<DESCRICAO_2><![CDATA[' . $veiculo[5] . ']]></DESCRICAO_2>';
                    $response .= '<DESCRICAO_3><![CDATA[' . $veiculo[6] . ']]></DESCRICAO_3>';
                    $response .= '<DATA><![CDATA[' . $veiculo[7] . ']]></DATA>';
                    $response .= '<FOTO><![CDATA[' . $veiculo[8] . ']]></FOTO>';
                    $response .= '<ORIGINAL><![CDATA[' . $veiculo[9] . ']]></ORIGINAL>';
                    $response .= '<CROP770><![CDATA[' . $veiculo[10] . ']]></CROP770>';
                    $response .= '<CROP550><![CDATA[' . $veiculo[11] . ']]></CROP550>';
                    $response .= '<CROP268><![CDATA[' . $veiculo[12] . ']]></CROP268>';
                    $response .= '<CROP80><![CDATA[' . $veiculo[13] . ']]></CROP80>';
                    $response .= '<CROPH1440><![CDATA[' . $veiculo[14] . ']]></CROPH1440>';
                    $response .= '<CROPH80><![CDATA[' . $veiculo[15] . ']]></CROPH80>';
                    $response .= '<ANO><![CDATA[' . $veiculo[16] . ']]></ANO>';
                    $response .= '<KM><![CDATA[' . $veiculo[17] . ']]></KM>';
                    $response .= '<COR><![CDATA[' . $veiculo[18] . ']]></COR>';
                    $response .= '<CAMBIO><![CDATA[' . $veiculo[19] . ']]></CAMBIO>';
                    $response .= '<PORTAS><![CDATA[' . $veiculo[20] . ']]></PORTAS>';
                    $response .= '<ESPECIFICACOES><![CDATA[' . $veiculo[21] . ']]></ESPECIFICACOES>';
                    $response .= '</VEICULO>';
                    $i++;
                }
                $response .= '</VEICULOS>';

                return new soapval('return', 'xsd:string', base64_encode($response));
            } else {
                $response = '<?xml version="1.0" encoding="UTF-8"?>';
                $response .= '<error>';
                $response .= '<erro><![CDATA[' . htmlentities("* Não foi possivel renderizar a lista de veiculos!") . ']]></erro>';
                $response .= '</error>';
                return new soapval('return', 'xsd:string', base64_encode($response));
            }
        }
    }

    public function getList_veiculos_fotos($docXML) {

        $model = new Produtos_Model();

        $xml = base64_decode($docXML);

        $string = <<<XML
$xml
XML;

        $xml = simplexml_load_string($string);

        if (count($xml->REQUISICAO) == 0) {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Não foi possivel renderizar a lista de veiculos!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {
            $url = $xml->REQUISICAO->URL;
            $url_amigavel = ($xml->REQUISICAO->URL_AMIGAVEL == "") ? NULL : $xml->REQUISICAO->URL_AMIGAVEL;

            $controller = new Controller();
            $url = $controller->limpaURL($url);

            $fotos = $model->getWs_produtos_fotos($url, $url_amigavel);

            if ($fotos) {

                #return new soapval('return', 'xsd:string', base64_encode("teste") );

                $response = '<?xml version="1.0" encoding="UTF-8"?>';
                $response .= '<FOTOS>';

                $i = 0;
                foreach ($fotos as $foto) {
                    $response .= '<FOTO>';
                    $response .= '<CODVEICULO><![CDATA[' . $foto[0] . ']]></CODVEICULO>';
                    $response .= '<CODFOTO><![CDATA[' . $foto[1] . ']]></CODFOTO>';
                    $response .= '<DTA><![CDATA[' . $foto[2] . ']]></DTA>';
                    $response .= '<RAIZ><![CDATA[' . $foto[3] . ']]></RAIZ>';
                    $response .= '<FORMATO><![CDATA[' . $foto[4] . ']]></FORMATO>';
                    $response .= '<NOME><![CDATA[' . $foto[5] . ']]></NOME>';
                    $response .= '<TIPO><![CDATA[' . $foto[6] . ']]></TIPO>';
                    $response .= '<FOTO><![CDATA[' . $foto[7] . ']]></FOTO>';
                    $response .= '<ORIGINAL><![CDATA[' . $foto[8] . ']]></ORIGINAL>';
                    $response .= '<CROP770><![CDATA[' . $foto[9] . ']]></CROP770>';
                    $response .= '<CROP550><![CDATA[' . $foto[10] . ']]></CROP550>';
                    $response .= '<CROP268><![CDATA[' . $foto[11] . ']]></CROP268>';
                    $response .= '<CROP80><![CDATA[' . $foto[12] . ']]></CROP80>';
                    $response .= '<CROPH1440><![CDATA[' . $foto[13] . ']]></CROPH1440>';
                    $response .= '<CROPH80><![CDATA[' . $foto[14] . ']]></CROPH80>';
                    $response .= '<STATUS><![CDATA[' . $foto[15] . ']]></STATUS>';
                    $response .= '<ORDEM><![CDATA[' . $foto[16] . ']]></ORDEM>';
                    $response .= '<DESTAQUE><![CDATA[' . $foto[17] . ']]></DESTAQUE>';
                    $response .= '</FOTO>';
                    $i++;
                }
                $response .= '</FOTOS>';
                return new soapval('return', 'xsd:string', base64_encode($response));
            } else {
                $response = '<?xml version="1.0" encoding="UTF-8"?>';
                $response .= '<error>';
                $response .= '<erro><![CDATA[' . htmlentities("* Não foi possivel renderizar a lista de veiculos!") . ']]></erro>';
                $response .= '</error>';
                return new soapval('return', 'xsd:string', base64_encode($response));
            }
        }
    }

    public function getList_fabricantes() {

        $model = new Produtos_Model();

        $fabricantes = $model->getWs_get_fabricantes();
        if ($fabricantes) {

            #return new soapval('return', 'xsd:string', base64_encode("teste") );

            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<FABRICANTES>';

            $i = 0;
            foreach ($fabricantes as $fabricante) {
                $response .= '<FABRICANTE>';
                $response .= '<NOME><![CDATA[' . $fabricante[2] . ']]></NOME>';
                $response .= '</FABRICANTE>';
                $i++;
            }
            $response .= '</FABRICANTES>';

            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Não foi possivel renderizar a lista de fabricantes!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        }
    }

    public function getList_fabricantes_vender() {

        $model = new Produtos_Model();

        $fabricantes = $model->getWs_get_fabricantes_vender();
        if ($fabricantes) {

            #return new soapval('return', 'xsd:string', base64_encode("teste") );

            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<FABRICANTES_VENDER>';

            $i = 0;
            foreach ($fabricantes as $fabricante) {
                $response .= '<FABRICANTE>';
                $response .= '<NOME><![CDATA[' . $fabricante[2] . ']]></NOME>';
                $response .= '</FABRICANTE>';
                $i++;
            }
            $response .= '</FABRICANTES_VENDER>';

            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Não foi possivel renderizar a lista de fabricantes!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        }
    }

    public function getList_veiculos_filtro($docXML) {

        $model = new Produtos_Model();

        $xml = base64_decode($docXML);

        $string = <<<XML
$xml
XML;

        $xml = simplexml_load_string($string);

        if (count($xml->REQUISICAO) == 0) {
            $response = '<?xml version="1.0" encoding="UTF-8"?>';
            $response .= '<error>';
            $response .= '<erro><![CDATA[' . htmlentities("* Não foi possivel renderizar a lista de veiculos!") . ']]></erro>';
            $response .= '</error>';
            return new soapval('return', 'xsd:string', base64_encode($response));
        } else {

            $url = $xml->REQUISICAO->URL;
            $categoria = ($xml->REQUISICAO->CATEGORIA == "") ? NULL : $xml->REQUISICAO->CATEGORIA;
            $fabricante = ($xml->REQUISICAO->FABRICANTE == "") ? NULL : $xml->REQUISICAO->FABRICANTE;
            $modelo = ($xml->REQUISICAO->MODELO == "") ? NULL : $xml->REQUISICAO->MODELO;
            $anoinicial = ($xml->REQUISICAO->ANOINICIAL == "") ? NULL : $xml->REQUISICAO->ANOINICIAL;
            $anofinal = ($xml->REQUISICAO->ANOFINAL == "") ? NULL : $xml->REQUISICAO->ANOFINAL;
            $precoinicial = ($xml->REQUISICAO->PRECOINICIAL == "") ? NULL : $xml->REQUISICAO->PRECOINICIAL;
            $precofinal = ($xml->REQUISICAO->PRECOFINAL == "") ? NULL : $xml->REQUISICAO->PRECOFINAL;
            $controller = new Controller();
            $url = $controller->limpaURL($url);
            $veiculos = $model->getWs_produtos_lista_filtro($categoria, $fabricante, $modelo, $anoinicial, $anofinal, $precoinicial, $precofinal);
            if ($veiculos) {

                #return new soapval('return', 'xsd:string', base64_encode("teste") );

                $response = '<?xml version="1.0" encoding="UTF-8"?>';
                $response .= '<VEICULOS>';

                $i = 0;
                foreach ($veiculos as $veiculo) {
                    $response .= '<VEICULO>';
                    $response .= '<CODVEICULO><![CDATA[' . $veiculo[0] . ']]></CODVEICULO>';
                    $response .= '<NOME><![CDATA[' . $veiculo[1] . ']]></NOME>';
                    $response .= '<FABRICANTE><![CDATA[' . $veiculo[2] . ']]></FABRICANTE>';
                    $response .= '<URL_AMIGAVEL><![CDATA[' . $veiculo[3] . ']]></URL_AMIGAVEL>';
                    $response .= '<PRECO><![CDATA[' . $veiculo[4] . ']]></PRECO>';
                    $response .= '<DESCRICAO_1><![CDATA[' . $veiculo[5] . ']]></DESCRICAO_1>';
                    $response .= '<DESCRICAO_2><![CDATA[' . $veiculo[6] . ']]></DESCRICAO_2>';
                    $response .= '<DESCRICAO_3><![CDATA[' . $veiculo[7] . ']]></DESCRICAO_3>';
                    $response .= '<DATA><![CDATA[' . $veiculo[8] . ']]></DATA>';
                    $response .= '<FOTO><![CDATA[' . $veiculo[9] . ']]></FOTO>';
                    $response .= '<ORIGINAL><![CDATA[' . $veiculo[10] . ']]></ORIGINAL>';
                    $response .= '<CROP770><![CDATA[' . $veiculo[11] . ']]></CROP770>';
                    $response .= '<CROP550><![CDATA[' . $veiculo[12] . ']]></CROP550>';
                    $response .= '<CROP268><![CDATA[' . $veiculo[13] . ']]></CROP268>';
                    $response .= '<CROP80><![CDATA[' . $veiculo[14] . ']]></CROP80>';
                    $response .= '<CROPH1440><![CDATA[' . $veiculo[15] . ']]></CROPH1440>';
                    $response .= '<CROPH80><![CDATA[' . $veiculo[16] . ']]></CROPH80>';
                    $response .= '<ANO><![CDATA[' . $veiculo[17] . ']]></ANO>';
                    $response .= '<KM><![CDATA[' . $veiculo[18] . ']]></KM>';
                    $response .= '<COR><![CDATA[' . $veiculo[19] . ']]></COR>';
                    $response .= '<CAMBIO><![CDATA[' . $veiculo[20] . ']]></CAMBIO>';
                    $response .= '<PORTAS><![CDATA[' . $veiculo[21] . ']]></PORTAS>';
                    $response .= '<CARROCERIA><![CDATA[' . $veiculo[22] . ']]></CARROCERIA>';
                    $response .= '<ESPECIFICACOES><![CDATA[' . $veiculo[23] . ']]></ESPECIFICACOES>';
                    $response .= '</VEICULO>';
                    $i++;
                }
                $response .= '</VEICULOS>';

                return new soapval('return', 'xsd:string', base64_encode($response));
            } else {
                $response = '<?xml version="1.0" encoding="UTF-8"?>';
                $response .= '<error>';
                $response .= '<erro><![CDATA[' . htmlentities("* Não foi possivel renderizar a lista de veiculos!") . ']]></erro>';
                $response .= '</error>';
                return new soapval('return', 'xsd:string', base64_encode($response));
            }
        }
    }

}
