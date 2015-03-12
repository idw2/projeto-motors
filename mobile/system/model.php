<?php

class Model {

    protected $db;
    protected $_tabela;
    protected $host = "mysql.designlab.com.br";
    protected $username = "dlab34";
    protected $password = "q#9ebdc.";
    protected $dbname = "designlab_auto";

    public function __construct() {
        $this->db = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    }

    public function insert(Array $dados) {

        if (sizeof($dados) != 0 && $this->_tabela != "") {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $valores = "'" . implode("','", array_values($dados)) . "'";
            echo "INSERT INTO `{$this->_tabela}` ({$campos}) VALUES ({$valores});";
            $this->db->query("INSERT INTO `{$this->_tabela}` ({$campos}) VALUES ({$valores});");
        } else {
            return false;
        }
    }

    public function read($where = null, $group_by = null, $order_by = null, $limit = null) {
        if ($this->_tabela != "") {
            $where = ( $where != null ? "WHERE {$where}" : "");
            $limit = ( $limit != null ? "{$limit}" : "");
            $order_by = ( $order_by != null ? "{$order_by}" : "");
            $group_by = ( $group_by != null ? "{$group_by}" : "");

            $q = $this->db->query("SELECT * FROM `{$this->_tabela}` {$where} {$group_by} {$order_by} {$limit};");
            if ($q->rowCount()) {
                return $q->fetch(PDO::FETCH_OBJ);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function read_list($where = null, $group_by = null, $order_by = null, $limit = null) {
        if ($this->_tabela != "") {
            $where = ( $where != null ? "WHERE {$where}" : "");
            $limit = ( $limit != null ? "{$limit}" : "");
            $order_by = ( $order_by != null ? "{$order_by}" : "");
            $group_by = ( $group_by != null ? "{$group_by}" : "");
            
            $q = $this->db->query("SELECT *, DATE_FORMAT( {$this->_tabela}.DTA, '%d/%m/%Y - %Hh%i' ) as DTA FROM `{$this->_tabela}` {$where} {$group_by} {$order_by} {$limit};");
            if ($q->rowCount()) {
                return $q;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function update(Array $dados, $where = null) {
        if (sizeof($dados) != 0 && $this->_tabela != "") {
            foreach ($dados as $campo => $valor) {
                $campos[] = "`{$campo}` = '{$valor}'";
            }
            if ($where != null) {

                $where = "WHERE {$where};";
            } else {
                $where = ";";
            }
            $campos = implode(", ", $campos);
            $this->db->query("UPDATE `{$this->_tabela}` SET {$campos} {$where}");
            return true;
        } else {
            return false;
        }
    }

    public function delete($where = null) {
        if ($this->_tabela != "") {
            $this->db->query("DELETE FROM `{$this->_tabela}` WHERE {$where};");
        } else {
            return false;
        }
    }

    public function insert_produto(Array $dados) {
        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `produtos` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODPRODUTO", $dados["CODPRODUTO"], PDO::PARAM_STR, 32);
            $query->bindParam(":NOME", $dados["NOME"], PDO::PARAM_STR, 70);
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

    public function existe_url_amigavel($url_amigavel) {
        $query = $this->db->prepare("SELECT * FROM `produtos` WHERE URL_AMIGAVEL=:URL_AMIGAVEL");
        $query->bindParam(":URL_AMIGAVEL", $url_amigavel, PDO::PARAM_STR, 70);
        $query->execute();
        return $query->rowCount();
    }

    public function add_fotos($fotos) {
        foreach ($fotos as $k => $foto) {
            $codfoto = strtoupper(md5(uniqid(rand(), true)));
            $destaque = '0';
            
            if($k == 0)
                $destaque = '1';
            
            $q = array(
                ':CODFOTO' => $codfoto,
                ':NOME' => $foto['filename'],
                ':ORIGINAL' => $foto['filepath'],
                ':CROP770' => $foto['filepath_920'],
                ':CROP550' => $foto['filepath_640'],
                ':CROP268' => $foto['filepath_320'],
                ':ORDEM' => $k,
                ':DESTAQUE' => $destaque
            );
            
            $query = $this->db->prepare("INSERT INTO `fotos` (CODFOTO, NOME, ORIGINAL, CROP770, CROP550, CROP268, ORDEM, DESTAQUE) VALUES (:CODFOTO, :NOME, :ORIGINAL, :CROP770, :CROP550, :CROP268, :ORDEM, :DESTAQUE)");
            
            foreach($q as $k=>$v){
                $query->bindParam($k, $v, PDO::PARAM_STR);
            }
            
            $query->execute();
            echo 'end';
        }
    }

}
