<?php

Class Carros extends Controller {
    
    
    function detalhes() {
            
        $this->get_smarty();
        
        
        $model = new Produtos_Model();
        
        $params = $this->getParameters();
        $slug = $params[0];
        
        $veiculo = $model->get_produto($slug);
        $fotos = (array) $model->get_fotos_all($slug);
//        $similares = $model->get_similares($slug);
        
        // SAÍDA
        setlocale(LC_MONETARY, 'pt_BR.UTF-8');
        $veiculo->PRECO = money_format('%.2n', ($veiculo->PRECO/100));
        $veiculo->KM = number_format($veiculo->KM,0,",",".");
        
        $cambio = array('Manual', 'Automático');
        $veiculo->CAMBIO = ( in_array($veiculo->LINHA_1, $cambio)) ? $veiculo->LINHA_1 : null ;
        
        foreach($veiculo as $k=>$v){
            $veiculo->$k = ($v != '') ? $v : 'N/A';
        }
        
        $this->assign("veiculo", $veiculo);
        $this->assign("fotos", $fotos);
//        $this->assign("similares", $similares);
        
        $this->assign("language", LANGUAGE);
        $this->assign("page", "index");
        $this->assign("abas", "novidades");
        $this->assign("title", TITLE . "Novidades");
        
        $this->view_tpl("detalhes");
    }

    
    function novidades() {
            
        $this->get_smarty();
        
        
        $model = new Produtos_Model();
        $categoria = "novidades";
        $limit = "LIMIT 0,4";
        $lista_de_produtos_1 = $model->produtos_lista_categorias($categoria, $limit);
        
        $limit = "LIMIT 5,4";
        $lista_de_produtos_2 = $model->produtos_lista_categorias($categoria, $limit);
        
        $limit = "LIMIT 9,4";
        $lista_de_produtos_3 = $model->produtos_lista_categorias($categoria, $limit);
        
        if(sizeof($lista_de_produtos_1)>0){
            $this->assign("lista_de_produtos_1", $lista_de_produtos_1);
        }
        
        if(sizeof($lista_de_produtos_2)>0){
            $this->assign("lista_de_produtos_2", $lista_de_produtos_2);
        }
        
        if(sizeof($lista_de_produtos_3)>0){
            $this->assign("lista_de_produtos_3", $lista_de_produtos_3);
        }
        
        
        $this->assign("language", LANGUAGE);
        $this->assign("page", "index");
        $this->assign("abas", "novidades");
        $this->assign("title", TITLE . "Novidades");
        
        $this->view_tpl("index");
    }

    function zero_km() {

        $this->get_smarty();
        
        $model = new Produtos_Model();
        $categoria = "zero_km";
        $limit = "LIMIT 0,4";
        $lista_de_produtos_1 = $model->produtos_lista_categorias($categoria, $limit);
        
        $limit = "LIMIT 5,4";
        $lista_de_produtos_2 = $model->produtos_lista_categorias($categoria, $limit);
        
        $limit = "LIMIT 9,4";
        $lista_de_produtos_3 = $model->produtos_lista_categorias($categoria, $limit);
        
        if(sizeof($lista_de_produtos_1)>0){
            $this->assign("lista_de_produtos_1", $lista_de_produtos_1);
        }
        
        if(sizeof($lista_de_produtos_2)>0){
            $this->assign("lista_de_produtos_2", $lista_de_produtos_2);
        }
        
        if(sizeof($lista_de_produtos_3)>0){
            $this->assign("lista_de_produtos_3", $lista_de_produtos_3);
        }
        
        $this->assign("language", LANGUAGE);
        $this->assign("page", "index");
        $this->assign("abas", "zero_km");
        $this->assign("title", TITLE . "Zero KM");
        $this->view_tpl("index");
    }

    function seminovos() {

        $this->get_smarty();
        
        $model = new Produtos_Model();
        $categoria = "seminovos";
        $limit = "LIMIT 0,4";
        $lista_de_produtos_1 = $model->produtos_lista_categorias($categoria, $limit);
        
        $limit = "LIMIT 5,4";
        $lista_de_produtos_2 = $model->produtos_lista_categorias($categoria, $limit);
        
        $limit = "LIMIT 9,4";
        $lista_de_produtos_3 = $model->produtos_lista_categorias($categoria, $limit);
        
        if(sizeof($lista_de_produtos_1)>0){
            $this->assign("lista_de_produtos_1", $lista_de_produtos_1);
        }
        
        if(sizeof($lista_de_produtos_2)>0){
            $this->assign("lista_de_produtos_2", $lista_de_produtos_2);
        }
        
        if(sizeof($lista_de_produtos_3)>0){
            $this->assign("lista_de_produtos_3", $lista_de_produtos_3);
        }
        
        $this->assign("language", LANGUAGE);
        $this->assign("page", "index");
        $this->assign("abas", "seminovos");
        $this->assign("title", TITLE . "Seminovos");
        $this->view_tpl("seminovos");
    }

}
