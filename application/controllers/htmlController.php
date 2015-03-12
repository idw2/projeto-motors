<?php

Class HTML extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->dados_relevantes();
    }

    public function a_empresa() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $model = new HTML_Model();
            $site = $arr[1];
            $pagina = "empresa";

            if (!$model->existe_pagina_html($pagina, $site)) {
                $model->insert_pagina_html($pagina, $site);
            }

            if ($_POST) {
                $conteudo = trim(stripslashes($_POST['conteudo']));
                $model->update_conteudo($pagina, $site, $conteudo);
                $this->assign("erro", "* Configuração realizada com sucesso!");
            }

            $html = $model->get_page($pagina, $site);

            $conteudo = $html->CONTEUDO;

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("page", "empresa");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Empresa");
            $this->view_tpl("empresa");
        }
    }

    public function onde_estamos() {

        $papeis[] = "ADMINISTRADOR";
        #ESTA LINHA FOI COMENTADA PARA IMPEDIR QUE O CLIENTE ACESSE DIRETAMENTE
//        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $model = new HTML_Model();
            $model2 = new Conta_Model();
            
            $site = $arr[1];

            $pagina = "onde_estamos";

            if (!$model->existe_pagina_html($pagina, $site)) {
                $model->insert_pagina_html($pagina, $site);
            }

            if ($_POST) {
                $conteudo = trim(stripslashes($_POST['conteudo']));
                $model->update_conteudo($pagina, $site, $conteudo);
            }

            $html = $model->get_page($pagina, $site);

            $conteudo = $html->CONTEUDO;
            $endereco = $model2->get_endereco_conta($_SESSION["CODCONTA"]);

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("page", "onde-estamos");
            $this->assign("endereco", $endereco);
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Onde Estamos");
            $this->view_tpl("onde_estamos");
        }
    }

    public function configuracao() {

        $papeis[] = "ADMINISTRADOR";

        #ESTA LINHA FOI COMENTADA PARA IMPEDIR QUE O CLIENTE ACESSE DIRETAMENTE
//        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $model = new HTML_Model();
            $model2 = new Conta_Model();

            $arr = $this->array_url();

            if (!$model->existe_dados_relevantes(trim($arr[1]))) {
                $dr['CODDADOSRELEVANTES'] = $this->getPrimarykey();
                $dr['SITE'] = $_SESSION["SITE"];
                $model->insert_dados_relevantes($dr);
            }


            if ($_POST) {
                $dados['TELEFONE'] = trim(stripslashes($_POST['telefone']));
                $dados['TWITTER'] = trim(stripslashes($_POST['twitter']));
                $dados['SITE'] = trim(stripslashes($_POST['site']));
                $dados['LINKEDID'] = trim(stripslashes($_POST['linkedid']));
                $dados['GOOGLE_PLUS'] = trim(stripslashes($_POST['google_plus']));
                $dados['FACEBOOK'] = trim(stripslashes($_POST['facebook']));
                $dados['INSTAGRAM'] = trim(stripslashes($_POST['instagram']));
                $dados['OBS_FALECONOSCO'] = trim(stripslashes($_POST['obs_faleconosco']));
                $dados['EMAIL_FALECONOSCO'] = trim(stripslashes($_POST['email']));
                $dados['ALIAS'] = trim(stripslashes($_POST['alias']));
                $dados['COLOR'] = trim(stripslashes($_POST['color']));

                $dados['SEG_SEX_INICIO'] = trim(stripslashes($_POST['seg_sex_inicio']));
                $dados['SEG_SEX_FIM'] = trim(stripslashes($_POST['seg_sex_fim']));
                $dados['SABADO_INICIO'] = trim(stripslashes($_POST['sabado_inicio']));
                $dados['SABADO_FIM'] = trim(stripslashes($_POST['sabado_fim']));
                $dados['DOMINGO_INICIO'] = trim(stripslashes($_POST['domingo_inicio']));
                $dados['DOMINGO_FIM'] = trim(stripslashes($_POST['domingo_fim']));
                $dados['FERIADO_INICIO'] = trim(stripslashes($_POST['feriado_inicio']));
                $dados['FERIADO_FIM'] = trim(stripslashes($_POST['feriado_fim']));

                $model->update_dados_relevantes($arr[1], $dados);
                
                $this->assign("erro", "* Site atualizado com sucesso!");
            }

            $dados_relevantes = $model->get_dados_relevantes($arr[1]);

//            var_dump($dados_relevantes); die();

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("page", "configuracao");

            $this->assign("seg_sex_inicio", $dados_relevantes->SEG_SEX_INICIO);
            $this->assign("seg_sex_fim", $dados_relevantes->SEG_SEX_FIM);
            $this->assign("sabado_inicio", $dados_relevantes->SABADO_INICIO);
            $this->assign("sabado_fim", $dados_relevantes->SABADO_FIM);
            $this->assign("domingo_inicio", $dados_relevantes->DOMINGO_INICIO);
            $this->assign("domingo_fim", $dados_relevantes->DOMINGO_FIM);
            $this->assign("feriado_inicio", $dados_relevantes->FERIADO_INICIO);
            $this->assign("feriado_fim", $dados_relevantes->FERIADO_FIM);

            $this->assign("telefone", $dados_relevantes->TELEFONE);
            $this->assign("twitter", $dados_relevantes->TWITTER);
            $this->assign("linkedid", $dados_relevantes->LINKEDID);
            $this->assign("google_plus", $dados_relevantes->GOOGLE_PLUS);
            $this->assign("color", $dados_relevantes->COLOR);
            $this->assign("facebook", $dados_relevantes->FACEBOOK);
            $this->assign("instagram", $dados_relevantes->INSTAGRAM);
            $this->assign("email", $dados_relevantes->EMAIL_FALECONOSCO);
            $this->assign("obs_faleconosco", $dados_relevantes->OBS_FALECONOSCO);
            $this->assign("alias", $dados_relevantes->ALIAS);

            $this->assign("user_site", $arr[1]);
            $this->assign("title", TITLE . "Configuração");
            $this->view_tpl("configuracao");
        }
    }

    public function zero_km() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $model = new HTML_Model();
            $pagina = "zero_km";

            if ($_POST) {
                $conteudo = trim(stripslashes($_POST['conteudo']));
                $model->update_conteudo($pagina, $conteudo);
            }

            $html = $model->get_page($pagina);
            $conteudo = $html->CONTEUDO;

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("page", "zero_km");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Zero KM");
            $this->view_tpl("zero_km");
        }
    }

    public function seminovos() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $model = new HTML_Model();
            $pagina = "seminovos";

            if ($_POST) {
                $conteudo = trim(stripslashes($_POST['conteudo']));
                $model->update_conteudo($pagina, $conteudo);
            }

            $html = $model->get_page($pagina);
            $conteudo = $html->CONTEUDO;

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("page", "seminovos");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Seminovos");
            $this->view_tpl("seminovos");
        }
    }

    public function financiamento() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $model = new HTML_Model();
            $pagina = "financiamento";

            if ($_POST) {
                $conteudo = trim(stripslashes($_POST['conteudo']));
                $model->update_conteudo($pagina, $conteudo);
            }

            $html = $model->get_page($pagina);
            $conteudo = $html->CONTEUDO;

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("page", "financiamento");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Financiamento");
            $this->view_tpl("financiamento");
        }
    }

    public function vender_carro() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $model = new HTML_Model();
            $pagina = "vender_carro";

            if ($_POST) {
                $conteudo = trim(stripslashes($_POST['conteudo']));
                $model->update_conteudo($pagina, $conteudo);
            }

            $html = $model->get_page($pagina);
            $conteudo = $html->CONTEUDO;

            $this->get_smarty();
            $this->assign("language", LANGUAGE);
            $this->assign("page", "vender_carro");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Venda seu carro");
            $this->view_tpl("vender_carro");
        }
    }

    public function logomarca() {

        $papeis[] = "ADMINISTRADOR";

        #ESTA LINHA FOI COMENTADA PARA IMPEDIR QUE O CLIENTE ACESSE DIRETAMENTE
//        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $model = new HTML_Model();

            $arr = $this->array_url();

            if (!$model->existe_dados_relevantes(trim($arr[1]))) {
                $dr['CODDADOSRELEVANTES'] = $this->getPrimarykey();
                $dr['SITE'] = $_SESSION["SITE"];
                $model->insert_dados_relevantes($dr);
            }

            $dados_relevantes = $model->get_dados_relevantes($arr[1]);
            $this->assign("dr", $dados_relevantes);

            if ($_FILES) {

                header('Content-Type: application/json');

//                $_FILES["logomarca"]["name"];
//                $_FILES["logomarca"]["type"];
//                $_FILES["logomarca"]["tmp_name"];
//                $_FILES["logomarca"]["error"];

                $pasta = "/web-files/logomarcas/";
                $permitidos = array(".jpg", ".jpeg", ".gif", ".png", ".bmp");

                $nome_imagem = $_FILES['logomarca']['name'];
                $tamanho_imagem = $_FILES['logomarca']['size'];

                $ext = strrchr($nome_imagem, ".");

                if (in_array(strtolower($ext), $permitidos)) {

                    $tamanho = round($tamanho_imagem / 1024);
                    if ($tamanho < 1024) {

                        $info = getimagesize($_FILES['logomarca']['tmp_name']);

                        $info[0]; // => int(721) 
                        $info[1]; // => int(480) 
                        $info[2]; // => int(2) 
                        $info[3]; // => string(24) "width="721" height="480"" 
                        $info["bits"]; // => int(8) 
                        $info["channels"]; // => int(3) 
                        $info["mime"]; // => string(10) "image/jpeg"

                        if ((int) $info[0] == 212 && (int) $info[1] == 75) {

                            #echo ; die();

                            $nome_atual = strtoupper(md5(uniqid(time()))) . $ext;
                            $tmp = $_FILES['logomarca']['tmp_name'];
                            if (move_uploaded_file($tmp, getcwd() . $pasta . $nome_atual)) {

                                if (file_exists($dados_relevantes->LOGOMARCA)) {
                                    @link($dados_relevantes->LOGOMARCA);
                                }

                                $dados['LOGOMARCA_NOME'] = $nome_atual;
                                $dados['LOGOMARCA'] = PROTOCOLO . "motors.designlab.com.br" . $pasta . $nome_atual;

                                $model->update_dados_relevantes($_SESSION["SITE"], $dados);

                                $data['erro'] = "<span style='color: #00A9FF; font-weight: bold'>* Logomarca publicada com sucesso!</span>";
                                $data['logo'] = $dados['LOGOMARCA'];
                                echo json_encode($data);
                            } else {
                                $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Falha no envio do arquivo!</span>";
                                $data['logo'] = "";
                                echo json_encode($data);
                            }
                        } else {
                            $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Tamanho inválido da imagem!</span>";
                            $data['logo'] = "";
                            echo json_encode($data);
                        }
                    } else {
                        $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* A imagem deve ser de no máximo 1MB!</span>";
                        $data['logo'] = "";
                        echo json_encode($data);
                    }
                } else {
                    $data['erro'] = "<span style='color: #e25f66; font-weight: bold'>* Somente são aceitos arquivos do tipo Imagem!</span>";
                    $data['logo'] = "";
                    echo json_encode($data);
                }

                die();
            }

            $this->assign("language", LANGUAGE);
            $this->assign("page", "logomarca");
            $this->assign("title", TITLE . "Logomarca");
            $this->view_tpl("logomarca");
        }
    }

}
