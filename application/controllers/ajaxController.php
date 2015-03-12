<?php

Class Ajax extends Controller {

    public function __construct() {

        $this->get_smarty();
        $this->run();
    }

    public function index() {
        return false;
    }

    public function index_action() {

        return false;
    }

    public function consultar_cep() {
        header('Content-Type: application/json');
        echo json_encode($this->getEndereco($_POST["cep"]));
    }

}
