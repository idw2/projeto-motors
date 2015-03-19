<?php

class Produtos_Model extends Model {

    public function existe_url_amigavel($url_amigavel) {
        $query = $this->db->prepare("SELECT * FROM `produtos` WHERE URL_AMIGAVEL=:URL_AMIGAVEL");
        $query->bindParam(":URL_AMIGAVEL", $url_amigavel, PDO::PARAM_STR, 70);
        $query->execute();
        return $query->rowCount();
    }

    public function qnts_destaques_produtos($indice) {
        $query = $this->db->prepare("SELECT * FROM `produtos` WHERE DESTAQUE=:DESTAQUE ");
        $query->bindParam(":DESTAQUE", $indice, PDO::PARAM_STR);
        $query->execute();
        return $query->rowCount();
    }

    public function update_destaque_produto(Array $dados, $url_amigavel) {
        $this->_tabela = "produtos";
        $where = "URL_AMIGAVEL='{$url_amigavel}'";
        return $this->update($dados, $where);
    }

    public function insert_produto_short(Array $dados) {
        $this->_tabela = "produtos";
        return $this->insert($dados);
    }

    public function insert_produto(Array $dados) {
        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `produtos` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODPRODUTO", $dados["CODPRODUTO"], PDO::PARAM_STR, 32);
            $query->bindParam(":OWNER", $dados["OWNER"], PDO::PARAM_STR, 32);
            $query->bindParam(":NOME", $dados["NOME"], PDO::PARAM_STR, 70);
            $query->bindParam(":SITE", $dados["SITE"], PDO::PARAM_STR, 255);
            $query->bindParam(":URL_AMIGAVEL", $dados["URL_AMIGAVEL"], PDO::PARAM_STR, 70);
            $query->bindParam(":PRECO", $dados["PRECO"], PDO::PARAM_INT);
            $query->bindParam(":CATEGORIA", $dados["CATEGORIA"], PDO::PARAM_STR, 20);
            $query->bindParam(":LINHA_1", $dados["LINHA_1"], PDO::PARAM_STR, 40);
            $query->bindParam(":LINHA_1", $dados["LINHA_1"], PDO::PARAM_STR, 40);
            $query->bindParam(":LINHA_2", $dados["LINHA_2"], PDO::PARAM_STR, 40);
            $query->bindParam(":LINHA_3", $dados["LINHA_3"], PDO::PARAM_STR, 40);
            $query->bindParam(":DESTAQUE", $dados["DESTAQUE"], PDO::PARAM_STR);
            $query->bindParam(":STATUS", $dados["STATUS"], PDO::PARAM_STR);
            $query->bindParam(":ANO", $dados["ANO"], PDO::PARAM_STR, 9);
            $query->bindParam(":KM", $dados["KM"], PDO::PARAM_INT);
            $query->bindParam(":COR", $dados["COR"], PDO::PARAM_STR, 25);
            $query->bindParam(":FABRICANTE", $dados["FABRICANTE"], PDO::PARAM_STR, 255);
            $query->bindParam(":COMBUSTIVEL", $dados["COMBUSTIVEL"], PDO::PARAM_STR, 25);
            $query->bindParam(":PORTAS", $dados["PORTAS"], PDO::PARAM_INT);
            $query->bindParam(":FINAL_PLACA", $dados["FINAL_PLACA"], PDO::PARAM_STR, 10);
            $query->bindParam(":CARROCERIA", $dados["CARROCERIA"], PDO::PARAM_STR, 25);
            $query->bindParam(":ESPECIFICACOES", $dados["ESPECIFICACOES"], PDO::PARAM_INT | PDO::PARAM_INPUT_OUTPUT);

            $query->execute();

            return true;
        } else {
            return false;
        }
    }

    public function get_produtos_all($param = NULL) {

        $this->_tabela = "produtos";
        if ($param == NULL) {
            $rows = $this->read_list(null, null, "ORDER BY DTA DESC", null);
        } else {
            $rows = $this->read_list($param, null, "ORDER BY DTA DESC", null);
        }

        $c = new Controller();

        if ($rows) {
            while ($row = $rows->fetch(PDO::FETCH_OBJ)) {
                $row->PRECO = $c->formataReais($row->PRECO);
                foreach ($row as $name => $value) {
                    $row->$name = $value;
                }
                $dados[] = $row;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function get_fotos_all($url_amigavel) {
        $q = $this->db->query("SELECT fotos.* , DATE_FORMAT( fotos.`DTA` ,  '%d/%m/%Y - %Hh%i' ) AS DTA
            FROM fotos
            INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.`CODFOTO` = fotos.`CODFOTO` 
            INNER JOIN produtos ON fotos_rel_produtos.`CODPRODUTO` = produtos.`CODPRODUTO` 
            WHERE produtos.`URL_AMIGAVEL`='{$url_amigavel}' ORDER BY (fotos.ORDEM+0) ASC");
        if ($q->rowCount()) {
            while ($row = $q->fetch(PDO::FETCH_OBJ)) {
                foreach ($row as $name => $value) {
                    if ($name == "CODFOTO") {
                        $value = strtolower($value);
                    }
                    $row->$name = utf8_decode($value);
                }
                $dados[] = $row;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function update_status($key, $status) {
        $this->_tabela = "produtos";
        $dados["STATUS"] = $status;
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->update($dados, $where);
    }

    public function update_novidade($key, $status) {
        $this->_tabela = "produtos";
        $dados["IS_NOVIDADE"] = $status;
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->update($dados, $where);
    }

    public function update_status_foto($codfoto, $status) {
        $this->_tabela = "fotos";
        $dados["STATUS"] = $status;
        $where = "CODFOTO='{$codfoto}'";
        return $this->update($dados, $where);
    }

    public function zera_destaque_foto_all($url_amigavel_or_codfoto) {
        $query = $this->db->query("UPDATE fotos 
INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
SET fotos.DESTAQUE=0
WHERE produtos.URL_AMIGAVEL='variante' OR produtos.CODPRODUTO='variante'");
        $query->execute();
    }

    public function get_foto_destaque($url_amigavel) {

        $url_amigavel = addslashes($url_amigavel);

        $query = $this->db->query("
        SELECT 
            fotos.CROP268 AS IMG 
        FROM `fotos` 
        INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
        INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
        WHERE fotos.DESTAQUE=1 AND produtos.URL_AMIGAVEL='{$url_amigavel}'");

        $query->execute();

        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                if (strlen(WEB_FILES) > 0) {
                    //$rows->IMG = WEB_FILES . str_replace("/web-files", "", $rows->IMG);
                }
                return $rows;
            }
        } else {
            return false;
        }
    }

    public function update_destaque_foto($codfoto) {
        $this->_tabela = "fotos";
        $dados["DESTAQUE"] = 1;
        $where = "CODFOTO='{$codfoto}'";
        $this->update($dados, $where);
    }

    public function update_produto(Array $dados, $key) {
        $this->_tabela = "produtos";
        $where = "CODPRODUTO='{$key}' OR URL_AMIGAVEL='{$key}'";
        return $this->update($dados, $where);
    }

    public function update_fabricante(Array $dados, $key) {
        $this->_tabela = "fabricantes";
        $where = "CODFABRICANTE='{$key}'";
        return $this->update($dados, $where);
    }

    public function del_produto($key) {
        $this->_tabela = "produtos";
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->delete($where);
    }

    public function del_foto($codfoto) {
        $this->_tabela = "fotos";
        $where = "CODFOTO='{$codfoto}'";
        return $this->delete($where);
    }

    public function del_rel_foto($codfoto) {
        $this->_tabela = "fotos_rel_produtos";
        $where = "CODFOTO='{$codfoto}'";
        return $this->delete($where);
    }

    public function get_produto($key) {
        $this->_tabela = "produtos";
        $where = "URL_AMIGAVEL='{$key}'";
        return $this->read($where);
    }

    public function get_fabricantes() {

        $q = $this->db->query("SELECT fabricantes.* FROM fabricantes ORDER BY FABRICANTE ASC");

        if ($q->rowCount()) {
            $c = new Controller();
            while ($rows = $q->fetch(PDO::FETCH_OBJ)) {
                $rows->FABRICANTE = $rows->FABRICANTE;
                $rows->PAIS = $rows->PAIS;
                $dados[] = $rows;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function getWs_get_fabricantes() {

        $q = $this->db->query("SELECT fabricantes.* FROM fabricantes INNER JOIN produtos ON fabricantes.FABRICANTE = produtos.FABRICANTE ORDER BY FABRICANTE ASC");

        if ($q->rowCount()) {
            $c = new Controller();
            while ($rows = $q->fetch(PDO::FETCH_OBJ)) {
                unset($d);
                foreach ($rows as $name => $value) {

                    $d[] = $value;
                }
                $dados[] = $d;
            }
            return $dados;
        } else {
            return false;
        }
    }
public function getWs_get_fabricantes_vender() {

        $q = $this->db->query("SELECT fabricantes.* FROM fabricantes ORDER BY FABRICANTE ASC");

        if ($q->rowCount()) {
            $c = new Controller();
            while ($rows = $q->fetch(PDO::FETCH_OBJ)) {
                unset($d);
                foreach ($rows as $name => $value) {

                    $d[] = $value;
                }
                $dados[] = $d;
            }
            return $dados;
        } else {
            return false;
        }
    }
    public function get_foto($codfoto) {
        $this->_tabela = "fotos";
        $where = "CODFOTO='{$codfoto}'";
        return $this->read($where);
    }

    public function produtos_lista_categorias($categoria = null, $limit) {

        if ($categoria == null) {
            $is_novidade = "AND `produtos`.IS_NOVIDADE=1";
            $rand = "(`produtos`.DTA)";
        } else {
            $cat = "AND CATEGORIA='{$categoria}'";
            $rand = "RAND()";
        }
        $q = $this->db->query("SELECT 
                    `produtos`.PRECO,
                    `produtos`.NOME,
                    `produtos`.URL_AMIGAVEL,
                    `produtos`.LINHA_1,
                    `produtos`.LINHA_2,
                    `produtos`.LINHA_3,
                    `fotos`.CROP268
            FROM `produtos`
            INNER JOIN `fotos_rel_produtos`  ON `fotos_rel_produtos`.CODPRODUTO=`produtos`.CODPRODUTO
            INNER JOIN `fotos`   ON `fotos_rel_produtos`.CODFOTO=`fotos`.CODFOTO
            WHERE `produtos`.STATUS=1 {$is_novidade} AND `fotos`.DESTAQUE=1 {$cat} AND `fotos`.CROP268!=''
            GROUP BY `produtos`.CODPRODUTO ORDER BY {$rand} DESC {$limit}");
//
//            echo $q->rowCount();
//            die();

        if ($q->rowCount()) {
            $c = new Controller();
            while ($rows = $q->fetch(PDO::FETCH_OBJ)) {
                unset($d);
                foreach ($rows as $name => $value) {
                    if ($name == "PRECO") {
                        $value = $c->formataReais($value);
                    }

                    $d[] = $value;
                }
                $dados[] = $d;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function getWs_produtos_lista_categorias($categoria = NULL, $limit = NULL, $site, $url_amigavel = NULL) {

        ($limit == NULL) ? $limit = "LIMIT 0,4" : $limit = "LIMIT {$limit}";


        if ($categoria == "" || $categoria == NULL) {
            $is_novidade = "produtos.IS_NOVIDADE=1 AND ";
        } else {
            $cat = "AND produtos.CATEGORIA='{$categoria}'";
        }

        if ($url_amigavel != "" || $url_amigavel != NULL) {
            $url_amigavel = "AND produtos.URL_AMIGAVEL='{$url_amigavel}'";
        }

        $q = $this->db->query("SELECT 
	produtos.CODPRODUTO,
	produtos.NOME,
	produtos.URL_AMIGAVEL,
	produtos.PRECO,
	produtos.LINHA_1,
	produtos.LINHA_2,
	produtos.LINHA_3,
	CONCAT('Publicado em: ', DATE_FORMAT( produtos.`DTA` ,  '%d/%m/%Y - %Hh%i' )) AS DTA,
	CONCAT('http://motors.designlab.com.br', fotos.CROP268) AS FOTO,
        CONCAT('http://motors.designlab.com.br', fotos.ORIGINAL) AS ORIGINAL, 
        CONCAT('http://motors.designlab.com.br', fotos.CROP770) AS CROP770, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROP550) AS CROP550, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROP268) AS CROP268, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROP80) AS CROP80, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROPH1440) AS CROPH1440, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROPH80) AS CROPH80,
        produtos.ANO,
        produtos.KM,
        produtos.COR,
        produtos.CAMBIO,
        produtos.PORTAS,
        produtos.ESPECIFICACOES
FROM
	produtos
INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
WHERE {$is_novidade}
produtos.STATUS=1
AND produtos.SITE LIKE '%{$site}%'
{$cat} {$url_amigavel}    
AND fotos.DESTAQUE=1
GROUP BY produtos.CODPRODUTO
ORDER BY produtos.`DTA` DESC
{$limit}");

        if ($q->rowCount()) {
            $c = new Controller();
            while ($rows = $q->fetch(PDO::FETCH_OBJ)) {
                unset($d);
                foreach ($rows as $name => $value) {
                    if ($name == "PRECO") {
                        $value = $c->formataReais($value);
                    }

                    $d[] = $value;
                }
                $dados[] = $d;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function getWs_produtos_lista_filtro($categoria = NULL, $fabricante = NULL, $modelo = NULL, $anoinicial = NULL, $anofinal = NULL, $precoinicial = NULL, $precofinal = NULL) {

        ($limit == NULL) ? $limit = "LIMIT 0,4" : $limit = "LIMIT {$limit}";

        if ($categoria != "" || $categoria != NULL) {
            $categoria = "AND produtos.CATEGORIA IN({$categoria})";
        }
        if ($fabricante != "" || $fabricante != NULL) {
            $fabricante = "AND produtos.FABRICANTE = '{$fabricante}'";
        }
        if ($modelo != "" || $modelo != NULL) {
            $modelo = "AND produtos.CARROCERIA = '{$modelo}'";
        }
        if ($anoinicial != "" || $anoinicial != NULL) {
            $anoinicial = "AND produtos.ANO >= '{$anoinicial}'";
        }
        if ($anofinal != "" || $anofinal != NULL) {
            $anofinal = "AND produtos.ANO <= '{$anofinal}'";
        }
        if ($precoinicial != "" || $precoinicial != NULL) {
            $precoinicial = "AND produtos.PRECO >= '{$precoinicial}'";
        }
        if ($precofinal != "" || $precofinal != NULL) {
            $precofinal = "AND produtos.PRECO <= '{$precofinal}'";
        }

        $q = $this->db->query("SELECT 
	produtos.CODPRODUTO,
	produtos.NOME,
        produtos.FABRICANTE,
	produtos.URL_AMIGAVEL,
	produtos.PRECO,
	produtos.LINHA_1,
	produtos.LINHA_2,
	produtos.LINHA_3,
	CONCAT('Publicado em: ', DATE_FORMAT( produtos.`DTA` ,  '%d/%m/%Y - %Hh%i' )) AS DTA,
	CONCAT('http://motors.designlab.com.br', fotos.CROP268) AS FOTO,
        CONCAT('http://motors.designlab.com.br', fotos.ORIGINAL) AS ORIGINAL, 
        CONCAT('http://motors.designlab.com.br', fotos.CROP770) AS CROP770, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROP550) AS CROP550, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROP268) AS CROP268, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROP80) AS CROP80, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROPH1440) AS CROPH1440, 	
        CONCAT('http://motors.designlab.com.br', fotos.CROPH80) AS CROPH80,
        produtos.ANO,
        produtos.KM,
        produtos.COR,
        produtos.CAMBIO,
        produtos.PORTAS,
        produtos.CARROCERIA,
        produtos.ESPECIFICACOES
FROM
	produtos
INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
INNER JOIN fotos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
WHERE
produtos.STATUS=1
AND produtos.SITE LIKE '%{$site}%'
{$categoria} {$fabricante} {$modelo} {$anoinicial} {$anofinal} {$precoinicial} {$precofinal}    
AND fotos.DESTAQUE=1
GROUP BY produtos.CODPRODUTO
ORDER BY produtos.`DTA` DESC
{$limit}");

        if ($q->rowCount()) {
            $c = new Controller();
            while ($rows = $q->fetch(PDO::FETCH_OBJ)) {
                unset($d);
                foreach ($rows as $name => $value) {
                    if ($name == "PRECO") {
                        $value = $c->formataReais($value);
                    }

                    $d[] = $value;
                }
                $dados[] = $d;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function getWs_produtos_fotos($site, $url_amigavel) {

        $q = $this->db->query("SELECT 
	produtos.CODPRODUTO as CODVEICULO,
	fotos.CODFOTO,
	DATE_FORMAT( fotos.DTA, '%d/%m/%Y - %Hh%i' ) as DTA ,
	fotos.RAIZ,
	fotos.FORMATO,
	fotos.NOME,
	fotos.TIPO,
	CONCAT('http://motors.designlab.com.br', fotos.CROP268) AS FOTO,
	CONCAT('http://motors.designlab.com.br', fotos.ORIGINAL) AS ORIGINAL, 
	CONCAT('http://motors.designlab.com.br', fotos.CROP770) AS CROP770, 	
	CONCAT('http://motors.designlab.com.br', fotos.CROP550) AS CROP550, 	
	CONCAT('http://motors.designlab.com.br', fotos.CROP268) AS CROP268, 	
	CONCAT('http://motors.designlab.com.br', fotos.CROP80) AS CROP80, 	
	CONCAT('http://motors.designlab.com.br', fotos.CROPH1440) AS CROPH1440, 	
	CONCAT('http://motors.designlab.com.br', fotos.CROPH80) AS CROPH80,
	fotos.STATUS,
	fotos.ORDEM,
	fotos.DESTAQUE	
FROM fotos
INNER JOIN fotos_rel_produtos ON fotos_rel_produtos.CODFOTO=fotos.CODFOTO
INNER JOIN produtos ON fotos_rel_produtos.CODPRODUTO=produtos.CODPRODUTO
WHERE 
	produtos.SITE LIKE '%{$site}%' 
	AND fotos.STATUS=1
	AND produtos.URL_AMIGAVEL='{$url_amigavel}'
GROUP BY fotos.CODFOTO
ORDER BY (fotos.DESTAQUE+0) DESC");

        if ($q->rowCount()) {
            $c = new Controller();
            while ($rows = $q->fetch(PDO::FETCH_OBJ)) {
                unset($d);
                foreach ($rows as $name => $value) {
                    $d[] = $value;
                }
                $dados[] = $d;
            }
            return $dados;
        } else {
            return false;
        }
    }

    public function insert_fotos(Array $dados) {
        $this->_tabela = "fotos";
        return $this->insert($dados);
    }

    public function insert_fotos_rel_produtos(Array $dados) {
        $this->_tabela = "fotos_rel_produtos";
        return $this->insert($dados);
    }

    public function qnts_fotos($codproduto_or_url_amigavel) {
        $query = $this->db->prepare("SELECT * FROM `fotos`
    INNER JOIN `fotos_rel_produtos` ON `fotos_rel_produtos`.CODFOTO=`fotos`.CODFOTO
    INNER JOIN `produtos` ON `fotos_rel_produtos`.CODPRODUTO=`produtos`.CODPRODUTO
    WHERE `produtos`.URL_AMIGAVEL='{$codproduto_or_url_amigavel}' OR `produtos`.CODPRODUTO='{$codproduto_or_url_amigavel}'");
        $query->execute();
        return $query->rowCount();
    }

}
