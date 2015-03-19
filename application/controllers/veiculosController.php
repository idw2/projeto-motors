<?php

Class Veiculos extends Controller {

    public function __construct() {
        if ($_GET[url] != "add") {
            $this->get_smarty();
            $this->run();
            $this->dados_relevantes();
        }
    }

    public function index_action() {
        $this->veiculos_lista();
    }

    public function veiculos_lista() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $model = new Produtos_Model();

            if ($_SESSION["PAPEL"] == "ADMINISTRADOR") {
                $lista = $model->get_produtos_all();
            } else {
                $param = "produtos.SITE='" . $_SESSION["SITE"] . "'";
                $lista = $model->get_produtos_all($param);
            }

            if ($lista) {
                $this->assign("produtos", $lista);
            }

            $this->assign("language", LANGUAGE);
            $this->assign("email", $email);
            $this->assign("page", "veiculos_lista");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Lista de veículos");
            $this->view_tpl("veiculos_lista");
        }
    }

    public function status() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Produtos_Model();
            $model->update_status($key, $stt);
            echo "OK";
        }
    }

    public function novidade() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Produtos_Model();
            $model->update_novidade($key, $stt);
            echo "OK";
        }
    }

    public function delete() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $arr = $this->array_url();
            $key = $arr[0];

            $model = new Produtos_Model();
            $fotos = $model->get_fotos_all($key);

            if (sizeof($fotos) > 0) {
                foreach ($fotos as $foto) {
                    $foto->CODFOTO = strtoupper($foto->CODFOTO);
                    if (is_dir(getcwd() . $foto->RAIZ)) {
                        if (file_exists(getcwd() . $foto->ORIGINAL)) {
                            @unlink($foto->ORIGINAL);
                        }
                        if (file_exists(getcwd() . $foto->CROP770)) {
                            @unlink($foto->CROP770);
                        }
                        if (file_exists(getcwd() . $foto->CROP550)) {
                            @unlink(getcwd() . $foto->CROP550);
                        }
                        if (file_exists(getcwd() . $foto->CROP268)) {
                            @unlink(getcwd() . $foto->CROP268);
                        }
                        @rmdir(getcwd() . $foto->RAIZ);
                    }
                    $model->del_foto($foto->CODFOTO);
                    $model->del_rel_foto($foto->CODFOTO);
                }
            }

            $model->del_produto($key);
            echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos-lista'</script>";
        }
    }

    public function cadastrar() {

        $model = new Produtos_Model();

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";

        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            /*
             * ESTE BLOCO PEGA OS FABRICANTES 
             * EXISTENTES NO BANCO DE DADOS             
             */

            $fabricantes = $model->get_fabricantes();

            if ($fabricantes) {

                $object = (Object) $object;
                $array = array();
                $letra = "A";
                $object->LETRA = $letra;
                $array[] = $object;
                foreach ($fabricantes as $obj) {

                    if ($letra == strtoupper(substr($obj->FABRICANTE, 0, 1))) {
                        unset($object);
                        $array[] = $obj;
                    } else {
                        $letra = strtoupper(substr($obj->FABRICANTE, 0, 1));
                        $object = (Object) $object;
                        $object->LETRA = $letra;
                        $array[] = $object;
                        unset($object);
                        $array[] = $obj;
                    }
                }

                $this->assign('fabricantes', $array);
                unset($array);
            }


            /*
             * ESTE BLOCO MONTA UMA SEQUENCIAS 
             * DE POSSIBILIDADES DE ANOS PARA OS VEICULOS          
             */

            $anos = array();
            $y = (int) date("Y");
            $y_tmp = null;

            while ($y > 1929) {
                if ($y_tmp == null) {
                    $y_tmp = "{$y}";
                    $anos[] = $y_tmp;
                    $y--;
                } elseif (strlen($y_tmp) == 4) {
                    $y_tmp = "{$y_tmp}/$y";
                    $anos[] = $y_tmp;
                    //$y--;
                } elseif (strlen($y_tmp) == 9) {
                    $y_tmp = "$y";
                    $anos[] = $y_tmp;
                    $y--;
                }
            }

            $this->assign("anos", $anos);

            if ($_POST) {


                foreach ($_POST as $n => $v) {
                    $_POST[$n] = utf8_decode($v);
                    $_POST[$n] = utf8_encode($_POST[$n]);
                    $this->assign($n, $v);
                }

                $preco = $_POST["preco"];
                $nome = $_POST["nome"];
                $categoria = $_POST["categoria"];
                $linha_1 = $_POST["linha_1"];
                $linha_2 = $_POST["linha_2"];
                $linha_3 = $_POST["linha_3"];

                $ano = $_POST["ano"];
                $km = $_POST["quilometragem"];
                $cor = $_POST["cor"];
                $combustivel = $_POST["combustivel"];
                $portas = $_POST["portas"];
                $final_placa = $_POST["placa"];
                $carroceria = $_POST["carroceria"];
                $fabricante = $_POST["fabricante"];
                $especificacoes = $_POST["especificacoes"];

                if ($preco == "") {
                    $erro = "Preço requerido!";
                } else if ($nome == "") {
                    $erro = "Nome requerido!";
                } else {

                    $url_amigavel = $this->url_amigavel($nome);
                    $preco = str_replace(",", "", $preco);
                    $preco = str_replace(".", "", $preco);
                    $km = str_replace(",", "", $km);
                    $km = str_replace(".", "", $km);


                    if ($model->existe_url_amigavel($url_amigavel)) {
                        $check = true;
                        $i = 1;
                        while ($check) {
                            if ($model->existe_url_amigavel($url_amigavel . "-" . $i)) {
                                $check = true;
                            } else {
                                $url_amigavel = $url_amigavel . "-" . $i;
                                $check = false;
                            }
                            $i++;
                        }
                    }

                    $dados["CODPRODUTO"] = $this->getPrimarykey();
                    $dados["NOME"] = $nome;
                    $dados["URL_AMIGAVEL"] = $url_amigavel;
                    $dados["CATEGORIA"] = $categoria;
                    $dados["FABRICANTE"] = $fabricante;
                    $dados["PRECO"] = $preco;
                    $dados["LINHA_1"] = $linha_1;
                    $dados["LINHA_2"] = $linha_2;
                    $dados["LINHA_3"] = $linha_3;
                    $dados["DESTAQUE"] = 0;
                    $dados["STATUS"] = 1;
                    $dados["ANO"] = $ano;
                    $dados["KM"] = $km;
                    $dados["COR"] = $cor;
                    $dados["COMBUSTIVEL"] = $combustivel;
                    $dados["PORTAS"] = $portas;
                    $dados["FINAL_PLACA"] = $final_placa;
                    $dados["CARROCERIA"] = $carroceria;
                    $dados["ESPECIFICACOES"] = trim(stripslashes($especificacoes));
                    $dados["SITE"] = $_SESSION["SITE"];
                    $dados["OWNER"] = $_SESSION["CODCONTA"];

                    if ($model->insert_produto($dados)) {
                        echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos-lista'</script>";
                        die();
                    }
                }
            }



            $this->assign("language", LANGUAGE);
            $this->assign("page", "veiculos_lista");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Cadastro de veículos");
            $this->view_tpl("cadastrar");
        }
    }

    public function cadastrar_mobile(Array $dados) {
        $_POST = $dados;
        $model = new Produtos_Model();

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";

        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            /*
             * ESTE BLOCO PEGA OS FABRICANTES 
             * EXISTENTES NO BANCO DE DADOS             
             */

            $fabricantes = $model->get_fabricantes();

            if ($fabricantes) {

                $object = (Object) $object;
                $array = array();
                $letra = "A";
                $object->LETRA = $letra;
                $array[] = $object;
                foreach ($fabricantes as $obj) {

                    if ($letra == strtoupper(substr($obj->FABRICANTE, 0, 1))) {
                        unset($object);
                        $array[] = $obj;
                    } else {
                        $letra = strtoupper(substr($obj->FABRICANTE, 0, 1));
                        $object = (Object) $object;
                        $object->LETRA = $letra;
                        $array[] = $object;
                        unset($object);
                        $array[] = $obj;
                    }
                }

                $fabricantes = $array;
                unset($array);
            }


            /*
             * ESTE BLOCO MONTA UMA SEQUENCIAS 
             * DE POSSIBILIDADES DE ANOS PARA OS VEICULOS          
             */

            $anos = array();
            $y = (int) date("Y");
            $y_tmp = null;

            while ($y > 1929) {
                if ($y_tmp == null) {
                    $y_tmp = "{$y}";
                    $anos[] = $y_tmp;
                    $y--;
                } elseif (strlen($y_tmp) == 4) {
                    $y_tmp = "{$y_tmp}/$y";
                    $anos[] = $y_tmp;
                    //$y--;
                } elseif (strlen($y_tmp) == 9) {
                    $y_tmp = "$y";
                    $anos[] = $y_tmp;
                    $y--;
                }
            }


            $anos = $anos;

            if ($_POST) {

//                foreach ($_POST as $n => $v) {
//                    $_POST[$n] = utf8_decode($v);
//                    $_POST[$n] = utf8_encode($_POST[$n]);
//                    
//                    $n = $v;
//                }
                $postdata = $_POST;
                foreach ($_POST as $n => $v) {
                    $_POST[$n] = utf8_decode($v);
                    $_POST[$n] = utf8_encode($_POST[$n]);
                    $postdata[$n] = $v;
                    
                }
                $preco = $postdata["PRECO"];
                $nome = $_POST["NOME"];
                $categoria = $_POST["CATEGORIA"];
                $linha_1 = $_POST["linha_1"];
                $linha_2 = $_POST["linha_2"];
                $linha_3 = $_POST["linha_3"];

                $ano = $_POST["ANO"];
                $km = $_POST["QUILOMETRAGEM"];
                $cor = $_POST["COR"];
                $combustivel = $_POST["COMBUSTIVEL"];
                $portas = $_POST["PORTAS"];
                $final_placa = $_POST["PLACA"];
                $carroceria = $_POST["CARROCERIA"];
                $fabricante = $_POST["FABRICANTE"];
                $especificacoes = $_POST["ESPECIFICACOES"];
                if ($preco == "") {
                    $erro = "Preço requerido!";
                } else if ($nome == "") {
                    $erro = "Nome requerido!";
                } else {

                    $url_amigavel = $this->url_amigavel($nome);
                    $preco = str_replace(",", "", $preco);
                    $preco = str_replace(".", "", $preco);
                    $km = str_replace(",", "", $km);
                    $km = str_replace(".", "", $km);


                    if ($model->existe_url_amigavel($url_amigavel)) {
                        $check = true;
                        $i = 1;
                        while ($check) {
                            if ($model->existe_url_amigavel($url_amigavel . "-" . $i)) {
                                $check = true;
                            } else {
                                $url_amigavel = $url_amigavel . "-" . $i;
                                $check = false;
                            }
                            $i++;
                        }
                    }

                    $dados["CODPRODUTO"] = $this->getPrimarykey();
                    $dados["NOME"] = $nome;
                    $dados["URL_AMIGAVEL"] = $url_amigavel;
                    $dados["CATEGORIA"] = $categoria;
                    $dados["FABRICANTE"] = $fabricante;
                    $dados["PRECO"] = $preco;
                    $dados["LINHA_1"] = $linha_1;
                    $dados["LINHA_2"] = $linha_2;
                    $dados["LINHA_3"] = $linha_3;
                    $dados["DESTAQUE"] = 0;
                    $dados["STATUS"] = 1;
                    $dados["ANO"] = $ano;
                    $dados["KM"] = $km;
                    $dados["COR"] = $cor;
                    $dados["COMBUSTIVEL"] = $combustivel;
                    $dados["PORTAS"] = $portas;
                    $dados["FINAL_PLACA"] = $final_placa;
                    $dados["CARROCERIA"] = $carroceria;
                    $dados["ESPECIFICACOES"] = trim(stripslashes($especificacoes));
                    $dados["SITE"] = $_SESSION["SITE"];
                    $dados["OWNER"] = $_SESSION["CODCONTA"];

                    if ($model->insert_produto($dados)) {
                        return $dados["CODPRODUTO"];
                        echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos-lista'</script>";
                        die();
                    }
                }
            }



//            $this->assign("language", LANGUAGE);
//            $this->assign("page", "veiculos_lista");
//            $this->assign("dados", $_SESSION);
//            $this->assign("title", TITLE . "Cadastro de veículos");
//            $this->view_tpl("cadastrar");
        }
    }

    public function upload() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";

        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                /*
                 * PEGA O PARAMETRO GET QUE TEM O CODPRODUTO
                 */
                $arr = $this->array_url();
                $codproduto = strtoupper($arr[0]);

                /*
                 * CARREGA A VARIAVEL GLOBA DO REQUEST
                 */
                $foto = $_FILES["myfile"];

                /*
                 * DA NOME AO DIRETORIO
                 */
                $folder = $this->getPrimarykey();

                /*
                 * DA NOME AO CAMINHO FISICO DO DIRETORIO
                 */
                $path = str_replace("\\", "/", DIR) . "/web-files/upload/" . $folder;

                /*
                 * SE O DIRETORIO NAO EXISTIR CRIAREMOS
                 */
                if (!is_dir($path)) {
                    mkdir($path, 0777, true);
                }

                /*
                 * DEFINE A EXTENSAO A SEU UPADA JUNTAMENTO COM O NOME NOVO DO ARQUIVO
                 */
                $extensao = strtolower(pathinfo($foto["name"], PATHINFO_EXTENSION));
                $filename = $this->getPrimarykey() . "." . $extensao;

                /*
                 * CHAMA A CLASSE COM OS METODOS PARA SALVAR A IMAGEM
                 */
                $model = new Produtos_Model();

                /*
                 * CRIA CHAVE UNICA PARA A FOTO
                 */
                $dados["CODFOTO"] = $this->getPrimarykey();

                /*
                 * CHECA O NUMERO DE IMAGENS LIGADAS AO MESMO PRODUTO
                 */
                $quantas_fotos = $model->qnts_fotos($codproduto);

                /*
                 * SE EXISTE APENAS UMA FOTO ELE DESTACA COMO PRIMEIRO
                 */
                if ((int) $quantas_fotos == 0) {
                    $dados['DESTAQUE'] = 1;
                } else {
                    $dados['DESTAQUE'] = 0;
                }

                /*
                 * CRIA ARRAY COM OS DADOS DA FOTO PARA SALVAR NO BANCO DE DADOS
                 */
                $dados["RAIZ"] = $path;
                $dados["FORMATO"] = $ext[1];
                $dados["TIPO"] = $foto["type"];
                $dados["NOME"] = $foto["name"];
                $dados["ORIGINAL"] = "/web-files/upload/{$folder}/{$filename}";
                $dados["STATUS"] = 1;

                $count = $quantas_fotos;
                $dados["ORDEM"] = ($count + 1);

                /*
                 * SALVANDO A FOTO
                 */
                $model->insert_fotos($dados);

                /*
                 * CRIA UM CHAVEAMENTO 1 POR 1 ENTRE A FOTO E O PRODUTO
                 */
                $fotos_rel_produtos["CODFOTO"] = $dados["CODFOTO"];
                $fotos_rel_produtos["CODPRODUTO"] = $codproduto;

                /*
                 * SALVA O RELACIONAMENTO EM BANCO DE DADOS
                 */
                $model->insert_fotos_rel_produtos($fotos_rel_produtos);

                /*
                 * CARREGA A DATA FORMATADA QUE A FOTO FOI SALVA QUE IRA RETORNAR PELO RESPONSE
                 */
                $dados['DATA'] = $this->getTimestampDateformat();

                /*
                 * MONTA O CAMINHO DO UPLOAD PARA A FUNCAO PHP
                 */
                $caminho_imagem = $path . "\\" . $filename;

                /*
                 * FAZ UPLOAD DA IMAGEM
                 */
                move_uploaded_file($foto["tmp_name"], $caminho_imagem);

                /*
                 * RETORNA PELO RESPONSE AJAX OS DADOS SALVOS NO PADRAO JSON
                 */
                header('Content-Type: application/json');
                echo json_encode($dados);

                /*
                 * REALIZA O CROP DA FOTO
                 */
//                $this->
                die();
            }
        }
    }

//
//    public function crop() {
//        
//    }
//    
    public function editar() {

        $model = new Produtos_Model();

        $fabricantes = $model->get_fabricantes();

        if ($fabricantes) {

            $object = (Object) $object;
            $array = array();
            $letra = "A";
            $object->LETRA = $letra;
            $array[] = $object;
            foreach ($fabricantes as $obj) {

                if ($letra == strtoupper(substr($obj->FABRICANTE, 0, 1))) {
                    unset($object);
                    $array[] = $obj;
                } else {
                    $letra = strtoupper(substr($obj->FABRICANTE, 0, 1));
                    $object = (Object) $object;
                    $object->LETRA = $letra;
                    $array[] = $object;
                    unset($object);
                    $array[] = $obj;
                }
            }

            $this->assign('fabricantes', $array);
            unset($array);
        }

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";

        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $erro = "";
            $sucesso = "FALSE";

            $arr = $this->array_url();
            $key = $arr[0];

            $model = new Produtos_Model();
            $produto = $model->get_produto($key);

//            echo $produto->COMBUSTIVEL;
//            die();

            $foto_destaque = $model->get_foto_destaque($key);
            $this->assign("foto_destaque", $foto_destaque->IMG);


            $anos = array();
            $y = (int) date("Y");
            $y_tmp = null;

            while ($y > 1929) {
                if ($y_tmp == null) {
                    $y_tmp = "{$y}";
                    $anos[] = $y_tmp;
                    $y--;
                } elseif (strlen($y_tmp) == 4) {
                    $y_tmp = "{$y_tmp}/$y";
                    $anos[] = $y_tmp;
                    //$y--;
                } elseif (strlen($y_tmp) == 9) {
                    $y_tmp = "$y";
                    $anos[] = $y_tmp;
                    $y--;
                }
            }

            $this->assign("anos", $anos);

            if ($produto) {
                $produto->PRECO = $this->formataReais($produto->PRECO);
//                $produto->NOME = utf8_decode($produto->NOME);
//                $produto->LINHA_1 = utf8_decode($produto->LINHA_1);
//                $produto->LINHA_2 = utf8_decode($produto->LINHA_2);
//                $produto->LINHA_3 = utf8_decode($produto->LINHA_3);
//                $produto->COR = utf8_decode($produto->COR);
//                $produto->COMBUSTIVEL = utf8_decode($produto->COMBUSTIVEL);
//                $produto->FINAL_PLACA = utf8_decode($produto->FINAL_PLACA);
//                $produto->ESPECIFICACOES = utf8_decode($produto->ESPECIFICACOES);
//                $produto->KM = $produto->KM;

                $this->assign("produto", $produto);
                $this->assign("url_amigavel", $key);
            }

            if ($_POST) {

                foreach ($_POST as $n => $v) {
                    $_POST[$n] = utf8_decode($v);
                    $_POST[$n] = utf8_encode($_POST[$n]);
                }

//                echo $_POST["combustivel"];
//                die();

                $preco = $_POST["preco"];
                $nome = $_POST["nome"];
                $categoria = $_POST["categoria"];
                $linha_1 = $_POST["linha_1"];
                $linha_2 = $_POST["linha_2"];
                $linha_3 = $_POST["linha_3"];

                $ano = $_POST["ano"];
                $km = $_POST["quilometragem"];
                $cor = $_POST["cor"];
                $combustivel = $_POST["combustivel"];
                $portas = $_POST["portas"];
                $final_placa = $_POST["placa"];
                $carroceria = $_POST["carroceria"];
                $fabricante = $_POST["fabricante"];
                $especificacoes = $_POST["especificacoes"];

                if ($preco == "") {
                    $erro = "Preço requerido!";
                } else if ($nome == "") {
                    $erro = "Nome requerido!";
                } else {

                    $url_amigavel = $this->url_amigavel($nome);
                    $preco = str_replace(",", "", $preco);
                    $preco = str_replace(".", "", $preco);
                    $km = str_replace(",", "", $km);
                    $km = str_replace(".", "", $km);

                    if ($model->existe_url_amigavel($url_amigavel) > 1) {
                        $check = true;
                        $i = 1;
                        while ($check) {
                            if ($model->existe_url_amigavel($url_amigavel . "-" . $i)) {
                                $check = true;
                            } else {
                                $url_amigavel = $url_amigavel . "-" . $i;
                                $check = false;
                            }
                            $i++;
                        }
                    }

                    $dados["NOME"] = $nome;
                    $dados["URL_AMIGAVEL"] = $url_amigavel;
                    $dados["CATEGORIA"] = $categoria;
                    $dados["PRECO"] = $preco;
                    $dados["LINHA_1"] = $linha_1;
                    $dados["LINHA_2"] = $linha_2;
                    $dados["LINHA_3"] = $linha_3;
                    $dados["ANO"] = $ano;
                    $dados["KM"] = $km;
                    $dados["COR"] = $cor;
                    $dados["COMBUSTIVEL"] = $combustivel;
                    $dados["FABRICANTE"] = $fabricante;
                    $dados["PORTAS"] = $portas;
                    $dados["FINAL_PLACA"] = $final_placa;
                    $dados["CARROCERIA"] = $carroceria;
                    $dados["ESPECIFICACOES"] = trim(stripslashes($especificacoes));
                    if ($model->update_produto($dados, $produto->CODPRODUTO)) {
                        echo "<script>window.location='/" . LANGUAGE . "/veiculos/veiculos-lista'</script>";
                        die();
                    }
                }
            }

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("email", $email);
            $this->assign("page", "veiculos_lista");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Editar veículo");
            $this->view_tpl("editar");
        }
    }

    public function fotos() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $erro = "";
            $sucesso = "FALSE";

            $arr = $this->array_url();
            $key = $arr[0];

            $model = new Produtos_Model();
            $produto = $model->get_produto($key);

            if ($produto) {

                $produto->PRECO = $this->formataReais($produto->PRECO);
                $produto->NOME = $produto->NOME;
                $produto->LINHA_1 = utf8_decode($produto->LINHA_1);
                $produto->LINHA_2 = utf8_decode($produto->LINHA_2);
                $produto->LINHA_3 = utf8_decode($produto->LINHA_3);

                $this->assign("produto", $produto);
                $this->assign("url_amigavel", $key);
            }

            $fotos = $model->get_fotos_all($key);

            if ($fotos) {
                $this->assign("fotos", $fotos);
            }

            $foto_destaque = $model->get_foto_destaque($key);
            $this->assign("foto_destaque", $foto_destaque->IMG);

            $this->assign("url_amigavel", $key);
            $this->assign("language", LANGUAGE);
            $this->assign("email", $email);
            $this->assign("page", "veiculos_lista");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Lista de fotos");
            $this->view_tpl("fotos");
        }
    }

    public function get_foto_destaque() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $arr = $this->array_url();
            $key = $arr[0];
            $model = new Produtos_Model();
            $foto_destaque = $model->get_foto_destaque($key);
            echo $foto_destaque->IMG;
        }
    }

    public function delete_foto() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $codfoto = strtoupper($this->getParameters("codfoto"));
            $url_amigavel = $this->getParameters("url");
            $model = new Produtos_Model();
            $foto = $model->get_foto($codfoto);

            if ($foto) {

                $rootdir = getcwd();
                $_filename1 = $rootdir . $foto->ORIGINAL;
                $_filename2 = $rootdir . $foto->CROP;
                $_diretorio = $rootdir . $foto->RAIZ;

                if (file_exists($_filename1)) {
                    @unlink($_filename1);
                }

                if (file_exists($_filename2)) {
                    @unlink($_filename2);
                }

                if (is_dir($_diretorio)) {
                    @rmdir($dir);
                }

                $model->del_rel_foto($codfoto);
                $model->del_foto($codfoto);
                echo "<script>window.location='/" . LANGUAGE . "/veiculos/fotos/" . $url_amigavel . "'</script>";
            }
        }
    }

    public function foto_status() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $codfoto = strtoupper($this->getParameters("codfoto"));
            $stt = $this->getParameters("status");
            $url_amigavel = $this->getParameters("url");

            $model = new Produtos_Model();
            $model->update_status_foto($codfoto, $stt);

            echo "OK";
        }
    }

    public function foto_destaque() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $codfoto = strtoupper($this->getParameters("codfoto"));
            $url_amigavel = $this->getParameters("url");

            $model = new Produtos_Model();
            $model->zera_destaque_foto_all($url_amigavel);
            $model->update_destaque_foto($codfoto);

            echo "OK";
        }
    }

    public function destaque() {
        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Produtos_Model();
            $dados["DESTAQUE"] = $stt;
            $model->update_produto($dados, $key);
            echo "OK";
        }
    }

}
