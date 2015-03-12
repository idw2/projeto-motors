<?php
$controller = new Veiculos();
$model = new Model();

//=========================
// CADASTRO
//=========================
Class Querys extends Model {

    public function insert_fotos(Array $dados) {
        $this->_tabela = "fotos";
        $this->insert($dados);   
    }
    
    public function insert_fotos_rel_produtos(Array $dados) {
        $this->_tabela = "fotos_rel_produtos";
        return $this->insert($dados);
    }

    public function getPrimarykey() {
        return strtoupper(md5(uniqid(rand(), true)));
    }

    public function get_produto($key) {
        $this->_tabela = "produtos";
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->read($where);
    }
    
     public function qnts_fotos($url_amigavel) {
        $query = $this->db->prepare("SELECT * FROM `fotos`
    INNER JOIN `fotos_rel_produtos` ON `fotos_rel_produtos`.CODFOTO=`fotos`.CODFOTO
    INNER JOIN `produtos` ON `fotos_rel_produtos`.CODPRODUTO=`produtos`.CODPRODUTO
    WHERE URL_AMIGAVEL=:URL_AMIGAVEL");
        $query->bindParam(":URL_AMIGAVEL", $url_amigavel, PDO::PARAM_STR, 70);
        $query->execute();
        return $query->rowCount();
    }

}
$preco = $_POST["preco"];
$nome = $_POST["veiculo"];
$categoria = $_POST["categoria"];
$linha_1 = $_POST["cambio"];
$linha_2 = $_POST["linha_2"]; 
$linha_3 = $_POST["linha_3"];

$ano = $_POST["ano"];
$km = $_POST["km"];
$cor = $_POST["cor"];
$combustivel = $_POST["combustivel"];
$portas = $_POST["portas"];
$final_placa = $_POST["placa"];
$carroceria = $_POST["carroceria"];
$especificacoes = $_POST["adicionais"];
$codfotos = $_POST["CODFOTO"];
$url_amigavel = slug($nome);

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

$dados["CODPRODUTO"] = $codproduto;
$dados["NOME"] = utf8_encode($nome);
$dados["URL_AMIGAVEL"] = $url_amigavel;
$dados["CATEGORIA"] = $categoria;
$dados["PRECO"] = $preco;
$dados["LINHA_1"] = utf8_encode($linha_1);
$dados["LINHA_2"] = utf8_encode($linha_2);
$dados["LINHA_3"] = utf8_encode($linha_3);
$dados["DESTAQUE"] = 0;
$dados["STATUS"] = 1;
$dados["ANO"] = utf8_encode($ano);
$dados["KM"] = $km;
$dados["COR"] = utf8_encode($cor);
$dados["COMBUSTIVEL"] = utf8_encode($combustivel);
$dados["PORTAS"] = $portas;
$dados["FINAL_PLACA"] = utf8_encode($final_placa);
$dados["CARROCERIA"] = utf8_encode($carroceria);
$dados["ESPECIFICACOES"] = trim(stripslashes($especificacoes));
$codproduto = $controller->cadastrar_mobile($dados);

foreach($codfotos as $codfoto){
$fotos_rel_produtos["CODPRODUTO"] = $codproduto;
$fotos_rel_produtos["CODFOTO"] = $codfoto;
$model->insert_fotos_rel_produtos($fotos_rel_produtos);
}

if ($codproduto) {
                $data['url_amigavel'] = $url_amigavel;
                echo json_encode($data);
}else{ $data['erro'] = "erro";}