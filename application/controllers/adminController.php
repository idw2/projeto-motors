<?php

Class Admin extends Controller {

    public function __construct() {

        $useragent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/(android|bb\d+|meego|android|ipad|playbook|silk).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4)))
            $is_mobile = true;

        // MOBILE REDIRECT
        if ($is_mobile && isset($_SESSION['CODCONTA']) && !preg_match('/(admin\/logout)/', $_GET['url'])) {
            header('Location: /mobile');
            die;
        }

        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->dados_relevantes();
    }

    public function index_action() {
        $this->login();
    }

    public function login() {

        $erro = "";
        $sucesso = "FALSE";

        $model = new Conta_Model();

        $login = new Login_Model();

//        if ($model->confere_senha($_SESSION["EMAIL"], $_SESSION["SENHA"])) {
//            echo "<script>window.location='/" . LANGUAGE . "/admin/welcome'</script>";
//            return false;
//        }

        if ($_POST) {


            $email_cpf_id_username = $_POST["email_or_username"];
            $senha = $this->senhaMd5($_POST["senha"]);

            if ($email == "" && $senha == "") {
                $erro = "* Fill out all fields!";

                #!preg_match("/^[a-z0-9_-]{3,15}$/", $dados_usuario["USERNAME"]);
            } /* else if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)) {
              $erro = "E-mail inválido!";
              } else */#{

            $existe_conta_rel_usuario = $login->existe_conta_rel_usuario($email_cpf_id_username);

            if ($existe_conta_rel_usuario) {

                $usuario = $login->get_dados_conta_rel_usuario($email_cpf_id_username);

                if (strlen($usuario->CODUSUARIO) == 32 && $usuario->PASSWORD == "") {
                    foreach ($usuario as $name => $value) {
                        if ($name == "PAPEL") {
                            $_SESSION["N_PAPEL"] = $value;
                            $loop = explode(";", $value);
                            $elimina = (sizeof($loop) - 1 );
                            unset($loop[$elimina]);
                            if (in_array('ADMINISTRADOR', $loop)) {
                                $value = "ADMINISTRADOR";
                            } else if (in_array('CLIENTE', $loop)) {
                                $value = "CLIENTE";
                            } else if (in_array('PUBLICADOR', $loop)) {
                                $value = "PUBLICADOR";
                            }
                        }
                        if ($name == "CPF_CNPJ") {
                            ($conta->TIPO_CONTA == "pf") ? $_SESSION["CPF"] = $this->formataCpf($conta->CPF_CNPJ) : $_SESSION["CNPJ"] = $this->formataCnpj($conta->CPF_CNPJ);
                        }
                        $_SESSION[$name] = $value;
                    }
                    echo "<script>window.location='/" . LANGUAGE . "/admin/primeiro-acesso/'</script>";
                    return false;
                } else if (strlen($usuario->CODUSUARIO) == 32) {

                    if($senha != $usuario->PASSWORD){
                        echo aqui;
                    }
                }
            }

            die();

            if ($model->existe_conta($email)) {

                $conta = $model->get_dados_conta($email);

                if ($conta->SENHA == "") {

                    foreach ($conta as $name => $value) {
                        if ($name == "PAPEL") {
                            $_SESSION["N_PAPEL"] = $value;
                            $loop = explode(";", $value);
                            $elimina = (sizeof($loop) - 1 );
                            unset($loop[$elimina]);
                            if (in_array('ADMINISTRADOR', $loop)) {
                                $value = "ADMINISTRADOR";
                            } else if (in_array('CLIENTE', $loop)) {
                                $value = "CLIENTE";
                            } else if (in_array('PUBLICADOR', $loop)) {
                                $value = "PUBLICADOR";
                            }
                        }
                        if ($name == "CPF_CNPJ") {
                            ($conta->TIPO_CONTA == "pf") ? $_SESSION["CPF"] = $this->formataCpf($conta->CPF_CNPJ) : $_SESSION["CNPJ"] = $this->formataCnpj($conta->CPF_CNPJ);
                        }
                        $_SESSION[$name] = $value;
                    }

                    echo "<script>window.location='/" . LANGUAGE . "/admin/primeiro-acesso/'</script>";
                    return false;
                } else {
                    if ($senha == "") {
                        $erro = "Senha requerida!";
                    } else {

                        $conta = $model->get_dados_conta($email);

                        $senha = $this->senhaMd5($senha);
                        if ($model->confere_senha($email, $senha)) {
                            if ($model->testa_status($email, $senha)) {

                                foreach ($conta as $name => $value) {
                                    if ($name == "PAPEL") {
                                        $_SESSION["N_PAPEL"] = $value;
                                        $loop = explode(";", $value);
                                        $elimina = (sizeof($loop) - 1 );
                                        unset($loop[$elimina]);
                                        if (in_array('ADMINISTRADOR', $loop)) {
                                            $value = "ADMINISTRADOR";
                                        } else if (in_array('CLIENTE', $loop)) {
                                            $value = "CLIENTE";
                                        } else if (in_array('PUBLICADOR', $loop)) {
                                            $value = "PUBLICADOR";
                                        }
                                    }
                                    if ($name == "CPF_CNPJ") {
                                        ($conta->TIPO_CONTA == "pf") ? $_SESSION["CPF"] = $this->formataCpf($conta->CPF_CNPJ) : $_SESSION["CNPJ"] = $this->formataCnpj($conta->CPF_CNPJ);
                                    }
                                    $_SESSION[$name] = $value;
                                }
                                echo "<script>window.location='/" . LANGUAGE . "/admin/welcome'</script>";
                                return false;
                            } else {
                                $erro = "Acesso negado, entre em contato com o administrador!";
                            }
                        } else {
                            $erro = "Senha não confere!";
                        }
                    }
                }
            } else {
                $erro = "E-mail inexistente!";
            }
            #}

            $this->assign("language", LANGUAGE);
            $this->assign("erro", $erro);
            $this->assign("sucesso", $sucesso);
            $this->assign("email", $email);
            $this->assign("title", TITLE . "Painel administrativo");
            $this->view_tpl("index");
        } else {

            $this->assign("language", LANGUAGE);
            $this->assign("erro", $erro);
            $this->assign("sucesso", $sucesso);
            $this->assign("title", TITLE . "Painel administrativo");
            $this->view_tpl("index");
        }
    }

    public function primeiro_acesso() {

        $model = new Conta_Model();
        $model_usuario = new Usuario_Model();
        $arr = $this->array_url();

        if ($_POST) {

            $senha_atual = $_POST["senha_atual"];
            $senha_nova = $_POST["senha_nova"];
            $senha_repetir = $_POST["senha_repetir"];
            $lembrete = $_POST["lembrete"];

            $erro = "";

            if ($senha_nova == "") {
                $erro = "* <strong>Set</strong> password required!";
            } else if ($senha_repetir == "") {
                $erro = "* <strong>Repeat</strong> password required!";
            } else if ($senha_nova != $senha_repetir) {
                $erro = "* Different <strong>passwords</strong> entered!";
            } else if ($lembrete == "") {
                $erro = "* Password <strong>reminder</strong> required!";
            } else {
                if (strlen($_SESSION["CODUSUARIO"]) == 32) {
                    if ($model_usuario->update_senha_primeiro_acesso($_SESSION["CODUSUARIO"], $this->senhaMd5($senha_nova), addslashes($lembrete))) {
                        $_SESSION["PASSWORD"] = $this->senhaMd5($senha_nova);
                        echo "<script>alert('" . utf8_decode("* Password successfully set!") . "')</script>";
                        echo "<script>window.location='/" . LANGUAGE . "/admin/welcome'</script>";
                        exit();
                    }
                } else {
                    if ($model->update_senha_primeiro_acesso($_SESSION["CODCONTA"], $this->senhaMd5($senha_nova), addslashes($lembrete))) {
                        $_SESSION["SENHA"] = $this->senhaMd5($senha_nova);
                        echo "<script>alert('" . utf8_decode("* Password successfully set!") . "')</script>";
                        echo "<script>window.location='/" . LANGUAGE . "/admin/welcome'</script>";
                        exit();
                    }
                }
            }
        }

        $this->assign("erro", $erro);
        $this->assign("language", LANGUAGE);
        $this->assign("email", $email);
        $this->assign("page", "primeiro-acesso");
        $this->assign("dados", $_SESSION);
        $this->assign("title", TITLE . "Primeiro acesso");
        $this->view_tpl("primeiro_acesso");
    }

    public function welcome() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $this->assign("language", LANGUAGE);
            $this->assign("email", $email);
            $this->assign("page", "welcome");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Bem vindo");
            $this->view_tpl("welcome");
        }
    }

    public function logout() {

        session_destroy();

        echo "<script>window.location='/" . LANGUAGE . "/admin'</script>";
        exit();
    }

    public function alterar_senha() {
        if ($this->permitir_acesso($_SESSION["EMAIL"], $_SESSION["SENHA"])) {

            $sucesso = "FALSE";
            $erro = "";

            if ($_POST) {
                $senha_atual = $_POST["senha_atual"];
                $senha_nova = $_POST["senha_nova"];
                $senha_repetir = $_POST["senha_repetir"];

                echo $this->senhaMd5($senha_atual);

                if (strlen($_SESSION["CODUSUARIO"]) == 32) {

                    if ($senha_atual == "") {
                        $erro = "* Current password required!";
                    } else if ($senha_nova == "") {
                        $erro = "* New password required!";
                    } else if ($senha_repetir == "") {
                        $erro = "* Repeat password required!";
                    } else if ($this->senhaMd5($senha_atual) != $_SESSION["PASSWORD"]) {
                        $erro = "* Current password does not match!";
                    } else if ($senha_nova != $senha_repetir) {
                        $erro = "* Passwords typed different!";
                    } else {
                        $model = new Usuario_Model();
                        if ($model->update_senha($_SESSION["CODCONTA"], $this->senhaMd5($senha_nova))) {
                            echo "<script>alert('" . utf8_decode("* Password updated successfully, your session will end!") . "')</script>";
                            $this->logout();
                            return false;
                        }
                    }
                } else {
                    if ($senha_atual == "") {
                        $erro = "* Current password required!";
                    } else if ($senha_nova == "") {
                        $erro = "* New password required!";
                    } else if ($senha_repetir == "") {
                        $erro = "* Repeat password required!";
                    } else if ($this->senhaMd5($senha_atual) != $_SESSION["SENHA"]) {
                        $erro = "* Current password does not match!";
                    } else if ($senha_nova != $senha_repetir) {
                        $erro = "* Passwords typed different!";
                    } else {
                        $model = new Conta_Model();
                        if ($model->update_senha($_SESSION["CODCONTA"], $this->senhaMd5($senha_nova))) {
                            echo "<script>alert('" . utf8_decode("* Password updated successfully, your session will end!") . "')</script>";
                            $this->logout();
                            return false;
                        }
                    }
                }
            }

            $this->assign("language", LANGUAGE);
            $this->assign("erro", $erro);
            $this->assign("sucesso", $sucesso);
            $this->assign("page", "Alterar_senha");
            $this->assign("dados", $_SESSION);
            $this->assign("title", TITLE . "Alterar senha");
            $this->view_tpl("alterar_senha");
        };
    }

    public function meus_dados() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
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
                $dados_conta['TIPO_CONTA'] = $conta->TIPO_CONTA;

                $dados_conta['SITE'] = trim(mb_strtolower($_POST["site"], "UTF-8"));
                $dados_conta['EMAIL'] = trim(mb_strtolower($_POST["email"], "UTF-8"));
                if ($_POST["updatePassword"] == "on") {
                    $dados_conta['SENHA'] = ( $_POST["updatePassword"] == "on") ? $this->senhaMd5($_POST['passwd']) : "";
                    $dados_conta['LEMBRETE'] = ( $_POST["updatePassword"] == "on") ? trim($_POST['lembrete']) : "";
                }
                $dados_conta['NASCIMENTO_FUNDACAO'] = trim($_POST["ano"] . "-" . $_POST["mes"] . "-" . $_POST["dia"]);
                $dados_conta['CPF_CNPJ'] = ($dados_conta['TIPO_CONTA'] == "pf") ? trim($this->limpaCPF_CNPJ($_POST["cpf"])) : trim($this->limpaCPF_CNPJ($_POST["cnpj"]));

                $dados_conta['PAPEL'] = $conta->PAPEL;
                $dados_conta['SEXO'] = ($dados_conta['TIPO_CONTA'] == "pf") ? trim($_POST["sexo"]) : "";
                $dados_conta['STATUS'] = $conta->STATUS;

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

                        echo "<script>window.location='/" . LANGUAGE . "/admin/meus-dados/" . strtolower($arr[0]) . "'</script>";
                        exit();
                    } else {
                        $error = "* Ocorreu um erro inesperado ao tentar realizar este cadastro!";
                    }
                }
            }

            $dia = "<div class='col col-sm-4'>";
            $dia .= "<select name='dia' class='form-control' style='height: 51px;'>";
            $dia .= "<optgroup label='Dia'>";
            for ($i = 1; $i < 32; $i++) {
                (strlen($i) == 1) ? $count = "0{$i}" : $count = $i;
                ($_POST["dia"] == $count || $conta->DIA == $count ) ? $dia .= "<option value='{$count}' selected>{$count}</option>" : $dia .= "<option value='{$count}'>{$count}</option>";
            }
            $dia .= "</optgroup>";
            $dia .= "</select>";
            $dia .= "</div>";


            $mes = "<div class='col col-sm-4'>";
            $mes .= "<select name='mes' class='form-control' style='height: 51px;'>";
            $mes .= "<optgroup label='Mês'>";
            for ($i = 1; $i < 13; $i++) {
                (strlen($i) == 1) ? $count = "0{$i}" : $count = $i;
                ($_POST["mes"] == $count || $conta->MES == $count ) ? $mes .= "<option value='{$count}' selected>{$count}</option>" : $mes .= "<option value='{$count}'>{$count}</option>";
            }
            $mes .= "</optgroup>";
            $mes .= "</select>";
            $mes .= "</div>";

            $ano = "<div class='col col-sm-4'>";
            $ano .= "<select name='ano' class='form-control' style='height: 51px;'>";
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
            $this->assign("page", "meus-dados");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Meus dados");

            $this->view_tpl("meus_dados");
        }
    }

}
