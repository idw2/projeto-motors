<?php

class HTML_Model extends Model {

    public function get_page($pagina, $site) {
        $this->_tabela = "html";
        $where = "PAGINA='{$pagina}' AND SITE LIKE '%{$site}%'";
        return $this->read($where);
    }

    public function update_conteudo($pagina, $site, $conteudo) {
        $query = $this->db->prepare("UPDATE `html` SET CONTEUDO='{$conteudo}' WHERE PAGINA='{$pagina}' AND SITE LIKE '%{$site}%'");
        $query->execute();
        return true;
    }
    
    public function existe_pagina_html($pagina, $site) {
        $query = $this->db->prepare("SELECT * FROM html WHERE SITE LIKE '%{$site}%' AND PAGINA='{$pagina}'");
        $query->execute();
        return $query->rowCount();
    }
    
    public function insert_pagina_html($pagina, $site) {
        $query = $this->db->prepare("INSERT INTO `html` (`PAGINA`,`SITE`) VALUES ('{$pagina}','{$site}');");
        $query->execute();

        return true;
    }
    
    public function existe_dados_relevantes($site) {
        $query = $this->db->prepare("SELECT * FROM dados_relevantes WHERE SITE LIKE '%{$site}%'");
        $query->execute();
        return $query->rowCount();
    }

    public function insert_dados_relevantes(Array $dados) {
        $this->_tabela = "dados_relevantes";
        $this->insert($dados);
        return true;
    }
    
    public function update_dados_relevantes($site, Array $dados) {
        $this->_tabela = "dados_relevantes";
        $where = "SITE='{$site}'";
        $this->update($dados, $where);
        return true;
    }
    
    public function get_dados_relevantes($site) {
        $this->_tabela = "dados_relevantes";
        $where = "SITE LIKE '%{$site}%'";
        return $this->read($where);
    }
    
    

}
