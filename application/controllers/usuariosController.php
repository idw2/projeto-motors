<?php

Class Usuarios extends Controller {

    public function __construct() {
        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->dados_relevantes();
    }

    public function index() {
        $this->index_action();
    }

    public function index_action() {
        $this->lista_de_usuarios();
    }

    public function lista_de_usuarios() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $model = new Usuario_Model();

            $usuarios = $model->get_usuarios_all($_SESSION["CODCONTA"]);

            $this->assign("usuarios", $usuarios);
            $this->assign("page", "usuarios_lista");
            $this->assign("conteudo", $conteudo);
            $this->assign("title", TITLE . "Lista de Usuários");
            $this->view_tpl("usuarios_lista");
        }
    }

    public function adicionar() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            if ($_POST) {

                $model = new Usuario_Model();


                $dados_usuario['CODUSUARIO'] = $this->getPrimarykey();
                $dados_usuario["USERNAME"] = mb_strtolower($_POST["nome"], 'UTF-8');
                $dados_usuario["SENHA"] = $_POST["passwd"];
                $passwd2 = $_POST["passwd2"];
                $dados_usuario["LEMBRETE"] = $_POST["lembrete"];
                $dados_usuario["STATUS"] = 1;

                $erro = "";

                if (!preg_match("/^[a-z0-9_-]{3,15}$/", $dados_usuario["USERNAME"])) {
                    $erro = "* The user field can not have invalid characters!";
                }/*else if ($dados_usuario["SENHA"] == "") {
                    $erro = "* Password required!";
                } else if ($passwd2 == "") {
                    $erro = "* Repeat password required!";
                }*/ else if ($dados_usuario["SENHA"] != $passwd2) {
                    $erro = "* Different passwords!";
                } else if ($dados_usuario["USERNAME"] == "") {
                    $erro = "* There are fields to be filled!";
                }

                ($dados_usuario["SENHA"] == "") ? "" : $dados_usuario["SENHA"] = $this->senhaMd5($dados_usuario["SENHA"]);

                $conta_rel_usuarios["CODCONTA"] = $_SESSION['CODCONTA'];
                $conta_rel_usuarios["CODUSUARIO"] = $dados_usuario['CODUSUARIO'];

                if ($erro == "") {
                    if (!$model->existe_usuario($dados_usuario["USERNAME"])) {
                        $model->insert_usuario($dados_usuario);
                        $model->insert_conta_rel_usuarios($conta_rel_usuarios);

                        echo "<script>window.location='/" . LANGUAGE . "/usuarios/'</script>";
                        exit();
                    } else {
                        $erro = "* User name already registered!";
                    }
                }
            }

            $this->assign("erro", $erro);
            $this->assign("page", "usuarios_lista");
            $this->assign("title", TITLE . "Create User");

            $this->view_tpl("usuarios_adicionar");
        }
    }

    public function editar() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {

            $model = new Usuario_Model();

            $arr = $this->array_url();
            $codusuario = strtoupper($arr[0]);

            $usuario = $model->get_dados_conta($codusuario);
     
            $this->assign("usuario", $usuario);

            if ($_POST) {

                
                $dados_usuario['CODUSUARIO'] =  $usuario->CODUSUARIO;
                $dados_usuario["USERNAME"] = mb_strtolower($_POST["nome"], 'UTF-8');
                if ($_POST["updatePassword"] == "on") {
                    $dados_usuario['SENHA'] = ( $_POST["updatePassword"] == "on") ? $this->senhaMd5($_POST['passwd']) : "";
                    $dados_usuario['LEMBRETE'] = ( $_POST["updatePassword"] == "on") ? trim($_POST['lembrete']) : "";
                }
                $passwd2 = $_POST["passwd2"];
                $erro = "";

                if (!preg_match("/^[a-z0-9_-]{3,15}$/", $dados_usuario["USERNAME"])) {
                    $erro = "* The user field can not have invalid characters!";
                } else if ($dados_usuario['SENHA'] == "" && $_POST["updatePassword"] == "on") {
                    $erro = "* Password required!";
                } else if ($passwd2 == "" && $_POST["updatePassword"] == "on") {
                    $erro = "* Repeat password required!";
                } else if ($_POST["passwd2"] != $passwd2 && $_POST["updatePassword"] == "on") {
                    $erro = "* Different passwords!";
                } else if ($dados_usuario["USERNAME"] == "") {
                    $erro = "* There are fields to be filled!";
                }

                if ($erro == "") {
                    if ($model->existe_usuario($dados_usuario["USERNAME"]) <= 1) {
                        $model->update_usuario($dados_usuario['CODUSUARIO'], $dados_usuario);

                        echo "<script>window.location='/" . LANGUAGE . "/usuarios/'</script>";
                        exit();
                    } else {
                        $erro = "* User name already registered!";
                    }
                }
            }

            

            $this->assign("erro", $erro);
            $this->assign("page", "usuarios_lista");
            $this->assign("title", TITLE . "Edit User");

            $this->view_tpl("usuarios_editar");
        }
    }

    public function status() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $arr = $this->array_url();
            $key = $arr[1];
            $stt = $arr[0];

            $model = new Usuario_Model();
            $dados['STATUS'] = $stt;
            $model->update_usuario($key, $dados);

            echo "<script>window.location='/" . LANGUAGE . "/usuarios/'</script>";
            exit();
        }
    }

    public function delete() {

        $papeis[] = "ADMINISTRADOR";
        $papeis[] = "CLIENTE";
        if ($this->permitir_acesso($_SESSION["ID"], $_SESSION["SENHA"], $papeis)) {
            $arr = $this->array_url();
            $key = $arr[0];

            $model = new Usuario_Model();
            $model->del_usuario($key);

            echo "<script>window.location='/" . LANGUAGE . "/usuarios/'</script>";
            exit();
        }
    }

}
