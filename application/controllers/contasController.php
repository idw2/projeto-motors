<?php

Class Contas extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->dados_relevantes();
    }

    public function index() {
        $this->index_action();
    }

    public function index_action() {
        $this->lista_de_contas();
    }

    public function lista_de_contas() {

        $papeis[] = "ADMINISTRADOR";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            
            $model = new Conta_Model();

            $contas = $model->get_conta_all();

            $this->assign("contas", $contas);
            $this->assign("page", "contas");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Lista de Contas e Usuários");
            $this->view_tpl("contas_lista");
        }
    }

    public function adicionar() {

        $papeis[] = "ADMINISTRADOR";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            if ($_POST) {

                $model = new Conta_Model();

                ( $_POST["updatePassword"] == "on") ? $this->assign("updatePassword", $_POST["updatePassword"]) : $_POST["updatePassword"];
                $this->assign("tipo_pessoa", $_POST["tipo_pessoa"]);

                $numeros = 0;
                $str = "";

                while ($numeros < 51) {
                    $guid_ddd = "ddd_{$numeros}";
                    $guid_tel = "tel_{$numeros}";
                    $guid_ramal = "ramal_{$numeros}";

                    if (strlen($_POST[$guid_ddd]) == 2 && $_POST[$guid_tel] != "") {

                        ($numeros == 0 ) ? $str .= "<div class='row datagrid'>" : $str .= "<div class='row datagrid'><br/>";
                        $str .= "<div class='col col-sm-2'>";
                        $str .= "<input type='text' class='form-control' id='ddd_{$numeros}' name='ddd_{$numeros}' maxlength='4' value='" . $_POST[$guid_ddd] . "' placeholder='DDD' onkeypress='return formataNumDV(event, this, 2);'/>";
                        $str .= "</div>";
                        $str .= "<div class='col col-sm-3'>";
                        $str .= "<input type='text' class='form-control' id='tel_{$numeros}' name='tel_{$numeros}' maxlength='10' value='" . $_POST[$guid_tel] . "' placeholder='Telefone ou celular' onkeypress='return formataNumDV(event, this, 9);'/>";
                        $str .= "</div>";
                        $str .= "<div class='col col-sm-7'>";
                        $str .= "<input type='text' class='form-control' id='ramal_{$numeros}' name='ramal_{$numeros}' maxlength='100' value='" . $_POST[$guid_ramal] . "' placeholder='Informações adicionais'/>    ";
                        $str .= "</div>";
                        $str .= "</div>";
                    }

                    $numeros++;
                }

                $this->assign("datagrid", $str);

                #cadastro
                $dados_conta['CODCONTA'] = $this->getPrimarykey();
                $dados_conta['NOME_RAZAO_SOCIAL'] = trim($this->trata_nome($_POST["nome"]));
                $dados_conta['TIPO_CONTA'] = $_POST["tipo_pessoa"];

                $iniciais = $this->iniciais($_POST["nome"]);
                $check = true;

                $i = 1;
                while ($check) {
                    if ($model->existe_iniciais($iniciais . $i)) {
                        $check = true;
                    } else {
                        $iniciais = $iniciais . $i;
                        $check = false;
                    }
                    $i++;
                }

                $dados_conta['ID'] = trim($iniciais);
                $dados_conta['SITE'] = trim(mb_strtolower($_POST["site"], "UTF-8"));
                $dados_conta['EMAIL'] = trim(mb_strtolower($_POST["email"], "UTF-8"));
                $dados_conta['SENHA'] = ( $_POST["updatePassword"] == "on") ? $this->senhaMd5($_POST['passwd']) : "";
                $dados_conta['LEMBRETE'] = ( $_POST["updatePassword"] == "on") ? trim($_POST['lembrete']) : "";
                $dados_conta['NASCIMENTO_FUNDACAO'] = trim($_POST["ano"] . "-" . $_POST["mes"] . "-" . $_POST["dia"]);
                $dados_conta['CPF_CNPJ'] = ($dados_conta['TIPO_CONTA'] == "pf") ? trim($this->limpaCPF_CNPJ($_POST["cpf"])) : trim($this->limpaCPF_CNPJ($_POST["cnpj"]));

                $dados_conta['PAPEL'] = trim($this->trata_papeis($_POST));
                $dados_conta['SEXO'] = ($dados_conta['TIPO_CONTA'] == "pf") ? trim($_POST["sexo"]) : "";
                $dados_conta['STATUS'] = 1;
                $dados_conta['OWNER'] = $_SESSION["CODCONTA"];


                $site = trim(strtolower($_POST["site"]));
                ( $site == "") ? $validar_site = false : $validar_site = true;

                #endereco
                $dados_endereco['CODENDERECO'] = $this->getPrimarykey();
                $dados_endereco['CEP'] = trim($_POST["cep"]);
                $dados_endereco['LOGRADOURO'] = trim($_POST["logradouro"]);
                $dados_endereco['NUMERO'] = trim($_POST["numero"]);
                $dados_endereco['COMPLEMENTO'] = trim($_POST["complemento"]);
                $dados_endereco['BAIRRO'] = trim($_POST["bairro"]);
                $dados_endereco['CIDADE'] = trim($_POST["cidade"]);
                $dados_endereco['UF'] = trim(mb_strtoupper($_POST["estado"], "UTF-8"));
                $dados_endereco['STATUS'] = 1;

                #endereco relacionado ao cadastro
                $dados_conta_rel_endereco['CODENDERECO'] = $dados_endereco['CODENDERECO'];
                $dados_conta_rel_endereco['CODCONTA'] = $dados_conta['CODCONTA'];

                #echo $dados_conta['CPF_CNPJ'];
                #die();

                if (!$this->validaCPF($dados_conta['CPF_CNPJ']) && $dados_conta['TIPO_CONTA'] == "pf") {
                    $error = "* CPF inválido";
                } else if (!$this->validaCNPJ($dados_conta['CPF_CNPJ']) && $dados_conta['TIPO_CONTA'] == "pj") {
                    $error = "* CNPJ inválido";
                } else if ($dados_conta['NOME_RAZAO_SOCIAL'] == "") {
                    $error = "* Nome ou empresa requerido!";
                } else if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $dados_conta['EMAIL'])) {
                    $error = "E-mail inválido";
                } else if ($model->existe_conta($dados_conta['CPF_CNPJ'])) {
                    $error = "Usuário cadastrado!";
                } else if ($model->existe_conta($dados_conta['EMAIL'])) {
                    $error = "Usuário cadastrado!";
                } else if (strlen($_POST["dia"]) != 2) {
                    $error = "* Dia de nascimento ou fundação requerido ou inválido";
                } else if (strlen($_POST["mes"]) != 2) {
                    $error = "* Mês de nascimento ou fundação requerido ou inválido";
                } else if (strlen($_POST["ano"]) != 4) {
                    $error = "* Ano de nascimento ou fundação requerido ou inválido";
                } else if (strlen($_POST["ddd_0"]) != 2 && $_POST["tel_0"] == "") {
                    $error = "* Telefone requerido";
                } else if (strlen($dados_endereco['CEP']) != 9) {
                    $error = "* CEP requerido ou inválido!";
                } else if ($dados_endereco['LOGRADOURO'] == "") {
                    $error = "* Logradouro requerido!";
                } else if ($dados_endereco['NUMERO'] == "") {
                    $error = "* Número requerido!";
                } else if ($dados_endereco['BAIRRO'] == "") {
                    $error = "* Bairro requerido!";
                } else if ($dados_endereco['CIDADE'] == "") {
                    $error = "* Cidade requerida!";
                } else if (strlen($dados_endereco['UF']) != 2) {
                    $error = "* UF requerida ou inválido!";
                }

                $dados_cadastro['SITE'] = trim($site);
//            if ($validar_site && $error == "") {
//                $dados_cadastro['SITE'] = trim($site);
//                if (!preg_match('/^(https|http)?:\/\/(www\.)?[-a-z0-9+]{2,128}\.[a-z]{2,4}(\.[a-z]{2,4})?(\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*)?$/i', $site)) {
//                    $error = "* Site informado inválido!";
//                }
//            }

                if ($error == "") {
                    if ($model->insert_conta($dados_conta)) {

                        $model->insert_endereco($dados_endereco);
                        $model->insert_conta_rel_endereco($dados_conta_rel_endereco);
                        $numeros = 0;

                        while ($numeros < 51) {

                            $guid_ddd = "ddd_{$numeros}";
                            $guid_tel = "tel_{$numeros}";
                            $guid_ramal = "ramal_{$numeros}";

                            if (strlen($_POST[$guid_ddd]) == 2 && $_POST[$guid_tel] != "") {

                                $dados_conta_rel_telefone['CODTELEFONE'] = strtoupper(md5($this->getPrimarykey() . $numeros));
                                $dados_conta_rel_telefone['CODCONTA'] = $dados_conta['CODCONTA'];

                                $model->insert_conta_rel_telefone($dados_conta_rel_telefone);

                                $dados_telefone['CODTELEFONE'] = $dados_conta_rel_telefone['CODTELEFONE'];
                                $dados_telefone['DDD'] = $_POST[$guid_ddd];

                                $tel = str_replace("-", "", $_POST[$guid_tel]);
                                $tel = str_replace(".", "", $_POST[$guid_tel]);
                                $dados_telefone['TELEFONE'] = $tel;

                                $dados_telefone['RAMAL'] = $_POST[$guid_ramal];
                                $dados_telefone['STATUS'] = 1;

                                $model->insert_telefone($dados_telefone);
                            }
                            $numeros++;
                        }

                        echo "<script>window.location='/" . LANGUAGE . "/contas/'</script>";
                        exit();
                    } else {
                        $error = "* Ocorreu um erro inesperado ao tentar realizar este cadastro!";
                    }
                }
            }

            $dia = "<div class='col col-sm-4'>";
            $dia .= "<select name='dia' class='form-control'>";
            $dia .= "<optgroup label='Dia'>";
            for ($i = 1; $i < 32; $i++) {
                (strlen($i) == 1) ? $count = "0{$i}" : $count = $i;
                ($_POST["dia"] == $count) ? $dia .= "<option value='{$count}' selected>{$count}</option>" : $dia .= "<option value='{$count}'>{$count}</option>";
            }
            $dia .= "</optgroup>";
            $dia .= "</select>";
            $dia .= "</div>";

            $mes = "<div class='col col-sm-4'>";
            $mes .= "<select name='mes' class='form-control'>";
            $mes .= "<optgroup label='Mês'>";
            for ($i = 1; $i < 13; $i++) {
                (strlen($i) == 1) ? $count = "0{$i}" : $count = $i;
                ($_POST["mes"] == $count) ? $mes .= "<option value='{$count}' selected>{$count}</option>" : $mes .= "<option value='{$count}'>{$count}</option>";
            }
            $mes .= "</optgroup>";
            $mes .= "</select>";
            $mes .= "</div>";

            $ano = "<div class='col col-sm-4'>";
            $ano .= "<select name='ano' class='form-control'>";
            $ano .= "<optgroup label='Ano'>";

            $y = (int) date("Y");
            #$y = ($y - 14);
            $ref = 1899;
            while ($y != $ref) {
                ($_POST["ano"] == $y) ? $ano .= "<option value='{$y}' selected>{$y}</option>" : $ano .= "<option value='{$y}'>{$y}</option>";
                $y--;
            }
            $ano .= "</optgroup>";
            $ano .= "</select>";
            $ano .= "</div>";

            $aniversario = "<div class='row'>{$dia}{$mes}{$ano}</div>";

            $this->assign("error", $error);
            $this->assign("aniversario", $aniversario);
            $this->assign("page", "contas");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Adicionar Usuário");

            $this->view_tpl("contas_adicionar");
        }
    }

    public function editar() {

        $papeis[] = "ADMINISTRADOR";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $model = new Conta_Model();

            $arr = $this->array_url();
            $codconta = strtoupper($arr[0]);

            $conta = $model->get_conta($codconta);
            $this->assign("conta", $conta);

            $telefones = $model->get_telefones_conta($codconta);
            $this->assign("telefones", $telefones);

            $endereco = $model->get_endereco_conta($codconta);
            $this->assign("endereco", $endereco);

            if (substr_count($conta->PAPEL, 'ADMINISTRADOR;') == 1)
                $this->assign("administrador", "on");
            if (substr_count($conta->PAPEL, 'CLIENTE;') == 1)
                $this->assign("cliente", "on");
            if (substr_count($conta->PAPEL, 'PUBLICADOR;') == 1)
                $this->assign("publicador", "on");

            if ($_POST) {

                $numeros = 0;
                $str = "";

                while ($numeros < 51) {
                    $guid_ddd = "ddd_{$numeros}";
                    $guid_tel = "tel_{$numeros}";
                    $guid_ramal = "ramal_{$numeros}";

                    if (strlen($_POST[$guid_ddd]) == 2 && $_POST[$guid_tel] != "") {

                        ($numeros == 0 ) ? $str .= "<div class='row datagrid'>" : $str .= "<div class='row datagrid'><br/>";
                        $str .= "<div class='col col-sm-2'>";
                        $str .= "<input type='text' class='form-control' id='ddd_{$numeros}' name='ddd_{$numeros}' maxlength='4' value='" . $_POST[$guid_ddd] . "' placeholder='DDD' onkeypress='return formataNumDV(event, this, 2);'/>";
                        $str .= "</div>";
                        $str .= "<div class='col col-sm-3'>";
                        $str .= "<input type='text' class='form-control' id='tel_{$numeros}' name='tel_{$numeros}' maxlength='10' value='" . $_POST[$guid_tel] . "' placeholder='Telefone ou celular' onkeypress='return formataNumDV(event, this, 9);'/>";
                        $str .= "</div>";
                        $str .= "<div class='col col-sm-7'>";
                        $str .= "<input type='text' class='form-control' id='ramal_{$numeros}' name='ramal_{$numeros}' maxlength='100' value='" . $_POST[$guid_ramal] . "' placeholder='Informações adicionais'/>    ";
                        $str .= "</div>";
                        $str .= "</div>";
                    }

                    $numeros++;
                }

                $this->assign("datagrid", $str);

                $dados_conta['CODCONTA'] = $codconta;
                $dados_conta['NOME_RAZAO_SOCIAL'] = trim($this->trata_nome($_POST["nome"]));

                $dados_conta['SITE'] = trim(mb_strtolower($_POST["site"], "UTF-8"));
                $dados_conta['EMAIL'] = trim(mb_strtolower($_POST["email"], "UTF-8"));
                if ($_POST["updatePassword"] == "on") {
                    $dados_conta['SENHA'] = ( $_POST["updatePassword"] == "on") ? $this->senhaMd5($_POST['passwd']) : "";
                    $dados_conta['LEMBRETE'] = ( $_POST["updatePassword"] == "on") ? trim($_POST['lembrete']) : "";
                }
                $dados_conta['NASCIMENTO_FUNDACAO'] = trim($_POST["ano"] . "-" . $_POST["mes"] . "-" . $_POST["dia"]);
                $dados_conta['CPF_CNPJ'] = ($dados_conta['TIPO_CONTA'] == "pf") ? trim($this->limpaCPF_CNPJ($_POST["cpf"])) : trim($this->limpaCPF_CNPJ($_POST["cnpj"]));

                $dados_conta['PAPEL'] = trim($this->trata_papeis($_POST));
                $dados_conta['SEXO'] = ($dados_conta['TIPO_CONTA'] == "pf") ? trim($_POST["sexo"]) : "";
                $dados_conta['STATUS'] = 1;

                $site = trim(strtolower($_POST["site"]));
                ( $site == "") ? $validar_site = false : $validar_site = true;

                #endereco
                $dados_endereco['CODENDERECO'] = $this->getPrimarykey();
                $dados_endereco['CEP'] = trim($_POST["cep"]);
                $dados_endereco['LOGRADOURO'] = trim($_POST["logradouro"]);
                $dados_endereco['NUMERO'] = trim($_POST["numero"]);
                $dados_endereco['COMPLEMENTO'] = trim($_POST["complemento"]);
                $dados_endereco['BAIRRO'] = trim($_POST["bairro"]);
                $dados_endereco['CIDADE'] = trim($_POST["cidade"]);
                $dados_endereco['UF'] = trim(mb_strtoupper($_POST["estado"], "UTF-8"));
                $dados_endereco['STATUS'] = 1;

                #endereco relacionado ao cadastro
                $dados_conta_rel_endereco['CODENDERECO'] = $dados_endereco['CODENDERECO'];
                $dados_conta_rel_endereco['CODCONTA'] = $dados_conta['CODCONTA'];

                if (!$this->validaCPF($dados_conta['CPF_CNPJ']) && $dados_conta['TIPO_CONTA'] == "pf") {
                    $error = "* CPF inválido";
                } else if (!$this->validaCNPJ($dados_conta['CPF_CNPJ']) && $dados_conta['TIPO_CONTA'] == "pj") {
                    $error = "* CNPJ inválido";
                } else if ($dados_conta['NOME_RAZAO_SOCIAL'] == "") {
                    $error = "* Nome ou empresa requerido!";
                } else if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $dados_conta['EMAIL'])) {
                    $error = "E-mail inválido";
                } else if ((int) $model->existe_conta($dados_conta['CPF_CNPJ']) > 1) {
                    $error = "Usuário cadastrado!";
                } else if (strlen($_POST["dia"]) != 2) {
                    $error = "* Dia de nascimento ou fundação requerido ou inválido";
                } else if (strlen($_POST["mes"]) != 2) {
                    $error = "* Mês de nascimento ou fundação requerido ou inválido";
                } else if (strlen($_POST["ano"]) != 4) {
                    $error = "* Ano de nascimento ou fundação requerido ou inválido";
                } else if (strlen($_POST["ddd_0"]) != 2 && $_POST["tel_0"] == "") {
                    $error = "* Telefone requerido";
                } else if (strlen($dados_endereco['CEP']) != 9) {
                    $error = "* CEP requerido ou inválido!";
                } else if ($dados_endereco['LOGRADOURO'] == "") {
                    $error = "* Logradouro requerido!";
                } else if ($dados_endereco['NUMERO'] == "") {
                    $error = "* Número requerido!";
                } else if ($dados_endereco['BAIRRO'] == "") {
                    $error = "* Bairro requerido!";
                } else if ($dados_endereco['CIDADE'] == "") {
                    $error = "* Cidade requerida!";
                } else if (strlen($dados_endereco['UF']) != 2) {
                    $error = "* UF requerida ou inválido!";
                }

                $dados_cadastro['SITE'] = trim($site);
//            
//            if ($validar_site && $error == "") {
//                $dados_cadastro['SITE'] = trim($site);
//                if (!preg_match('/^(https|http)?:\/\/(www\.)?[-a-z0-9+]{2,128}\.[a-z]{2,4}(\.[a-z]{2,4})?(\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*)?$/i', $site)) {
//                    $error = "* Site informado inválido!";
//                }
//            }

                if ($error == "") {
                    if ($model->update_conta($dados_conta['CODCONTA'], $dados_conta)) {

                        $model->del_telefone_endereco_conta($dados_conta['CODCONTA']);

                        $model->insert_endereco($dados_endereco);
                        $model->insert_conta_rel_endereco($dados_conta_rel_endereco);
                        $numeros = 0;

                        while ($numeros < 51) {

                            $guid_ddd = "ddd_{$numeros}";
                            $guid_tel = "tel_{$numeros}";
                            $guid_ramal = "ramal_{$numeros}";

                            if (strlen($_POST[$guid_ddd]) == 2 && $_POST[$guid_tel] != "") {

                                $dados_conta_rel_telefone['CODTELEFONE'] = strtoupper(md5($this->getPrimarykey() . $numeros));
                                $dados_conta_rel_telefone['CODCONTA'] = $dados_conta['CODCONTA'];

                                $model->insert_conta_rel_telefone($dados_conta_rel_telefone);

                                $dados_telefone['CODTELEFONE'] = $dados_conta_rel_telefone['CODTELEFONE'];
                                $dados_telefone['DDD'] = $_POST[$guid_ddd];

                                $tel = str_replace("-", "", $_POST[$guid_tel]);
                                $tel = str_replace(".", "", $_POST[$guid_tel]);
                                $dados_telefone['TELEFONE'] = $tel;

                                $dados_telefone['RAMAL'] = $_POST[$guid_ramal];
                                $dados_telefone['STATUS'] = 1;

                                $model->insert_telefone($dados_telefone);
                            }
                            $numeros++;
                        }

                        echo "<script>window.location='/" . LANGUAGE . "/contas/'</script>";
                        exit();
                    } else {
                        $error = "* Ocorreu um erro inesperado ao tentar realizar este cadastro!";
                    }
                }
            }

            $dia = "<div class='col col-sm-4'>";
            $dia .= "<select name='dia' class='form-control'>";
            $dia .= "<optgroup label='Dia'>";
            for ($i = 1; $i < 32; $i++) {
                (strlen($i) == 1) ? $count = "0{$i}" : $count = $i;
                ($_POST["dia"] == $count || $conta->DIA == $count ) ? $dia .= "<option value='{$count}' selected>{$count}</option>" : $dia .= "<option value='{$count}'>{$count}</option>";
            }
            $dia .= "</optgroup>";
            $dia .= "</select>";
            $dia .= "</div>";


            $mes = "<div class='col col-sm-4'>";
            $mes .= "<select name='mes' class='form-control'>";
            $mes .= "<optgroup label='Mês'>";
            for ($i = 1; $i < 13; $i++) {
                (strlen($i) == 1) ? $count = "0{$i}" : $count = $i;
                ($_POST["mes"] == $count || $conta->MES == $count ) ? $mes .= "<option value='{$count}' selected>{$count}</option>" : $mes .= "<option value='{$count}'>{$count}</option>";
            }
            $mes .= "</optgroup>";
            $mes .= "</select>";
            $mes .= "</div>";

            $ano = "<div class='col col-sm-4'>";
            $ano .= "<select name='ano' class='form-control'>";
            $ano .= "<optgroup label='Ano'>";

            $y = (int) date("Y");
            #$y = ($y - 14);
            $ref = 1899;
            while ($y != $ref) {
                ($_POST["ano"] == $y || $conta->ANO == $y ) ? $ano .= "<option value='{$y}' selected>{$y}</option>" : $ano .= "<option value='{$y}'>{$y}</option>";
                $y--;
            }
            $ano .= "</optgroup>";
            $ano .= "</select>";
            $ano .= "</div>";

            $aniversario = "<div class='row'>{$dia}{$mes}{$ano}</div>";

            $this->assign("error", $error);
            $this->assign("aniversario", $aniversario);
            $this->assign("page", "contas");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Editar Usuário");

            $this->view_tpl("contas_editar");
        }
    }

    public function status() {

        $papeis[] = "ADMINISTRADOR";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Conta_Model();
            $dados['STATUS'] = $stt;
            $model->update_conta($key, $dados);
            echo "OK";
        }
    }

    public function suspender() {

        $papeis[] = "ADMINISTRADOR";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Conta_Model();
            $dados['SUSPENSO'] = $stt;
            $model->update_conta($key, $dados);
            echo "OK";
        }
    }

    public function bloquear() {

        $papeis[] = "ADMINISTRADOR";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Conta_Model();
            $dados['BLOQUEADO'] = $stt;
            $model->update_conta($key, $dados);
            echo "OK";
        }
    }

    public function delete() {

        $papeis[] = "ADMINISTRADOR";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $arr = $this->array_url();
            $key = $arr[0];

            $model = new Conta_Model();
            $model->del_conta($key);

            echo "OK";
        }
    }

}
