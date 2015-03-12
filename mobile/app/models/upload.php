<?php

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

$fotos = rearrange_files($_FILES['myfile']);
foreach ($fotos as $k => $foto) {
$model = new Querys();

$produto = $model->get_produto($_GET["url_amigavel"]);

//$foto = $_FILES["myfile"];
$folder = $model->getPrimarykey();

$path = "../upload/" . $folder;
$raiz = $caminho;


if (!is_dir($path)) {
    mkdir($path, 0777, true);
}

preg_match("/\.(gif|bmp|png|jpg|jpeg|pdf){1}$/i", $fotos[$k]["name"], $ext);
$filename = $model->getPrimarykey() . "." . $ext[1];

$caminho_imagem = $path . "/" . $filename;
$original = str_replace("../", "/web-files/", $caminho_imagem);
$raiz = str_replace("../", "/web-files/", $path) . "/";

$dados["CODFOTO"] = $model->getPrimarykey();
$dados["RAIZ"] = $raiz;
$dados["FORMATO"] = $ext[1];
$dados["TIPO"] = $fotos[$k]["type"];
$dados["NOME"] = $fotos[$k]["name"];
$dados["ORIGINAL"] = $original;
$dados["RAIZ"] = $raiz;
$dados["STATUS"] = 1;

$count = $model->qnts_fotos($_GET["url_amigavel"]);
$dados["ORDEM"] = ($count+1);
$dados["DESTAQUE"] = 0;

$model->insert_fotos($dados);
$res["CODFOTO"][] = $dados["CODFOTO"];

//$fotos_rel_produtos["CODPRODUTO"] = $produto->CODPRODUTO;
//$model->insert_fotos_rel_produtos($fotos_rel_produtos);
//
//move_uploaded_file($foto["tmp_name"], $caminho_imagem);


    
    $id = md5(time() . $foto['tmp_name']);
    $tmp_path = APP . 'tmp' . DS . $id . '.jpg';
    
    $img = new abeautifulsite\SimpleImage($foto['tmp_name']);
    
    $img->save($tmp_path);
    $base64 = $img->adaptive_resize(50, 50)->output_base64();
    $res["FOTO"][$k]['tmp_path'] = $tmp_path;
    $res["FOTO"][$k]['base64'] = $base64;
    $res["FOTO"][$k]['size'] = ($foto['size']/1000) . ' KB';
    $res["FOTO"][$k]['name'] = $fotos[$k]["name"];

}

echo Json::encode($res);
