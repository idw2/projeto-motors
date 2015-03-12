<?php

Class Informacoes extends Controller {

    function index() {
        return false;
    }
    
    function index_action() {
       
        $this->contato();
    }

    function empresa() {
        
        $model = new HTML_Model();
        $pagina = "empresa";
        $html = $model->get_page($pagina);
        $conteudo = $html->CONTEUDO;
     
        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "empresa");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Empresa");
        $this->view_tpl("empresa");
    }

    function zero_km() {
        
        $model = new HTML_Model();
        $pagina = "zero_km";
        $html = $model->get_page($pagina);
        $conteudo = $html->CONTEUDO;
        
        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "zero_km");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Zero KM");
        $this->view_tpl("zero_km");
    }

    function seminovos() {
        
        $model = new HTML_Model();
        $pagina = "seminovos";
        $html = $model->get_page($pagina);
        $conteudo = $html->CONTEUDO;
        
        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "seminovos");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Seminovos");
        $this->view_tpl("seminovos");
    }

    function financiamento() {
        
        $model = new HTML_Model();
        $pagina = "financiamento";
        $html = $model->get_page($pagina);
        $conteudo = $html->CONTEUDO;
        
        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "financiamento");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Financiamento");
        $this->view_tpl("financiamento");
    }

    function vender_carro() {
        
        $model = new HTML_Model();
        $pagina = "vender_carro";
        $html = $model->get_page($pagina);
        $conteudo = $html->CONTEUDO;
        
        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "vender_carro");
        $this->assign("conteudo", $conteudo);
        $this->assign("title", TITLE . "Venda seu carro");
        $this->view_tpl("vender_carro");
    }

    function contato() {

        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "contato");
        $this->assign("title", TITLE . "Fale conosco");
        $this->view_tpl("contato");
    }

    function onde_estamos() {

        $this->get_smarty();
        $this->assign("language", LANGUAGE);
        $this->assign("page", "onde_estamos");
        $this->assign("title", TITLE . "Onde Estamos");
        $this->view_tpl("onde_estamos");
    }

}
