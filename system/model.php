<?php

class Model {

    protected $db;
    protected $_tabela;
    protected $host = "localhost";
    protected $username = "username";
    protected $dbname = "dbname";
    protected $password = "password";

    public function __construct() {
        $this->db = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    }

    public function insert(Array $dados) {

        if (sizeof($dados) != 0 && $this->_tabela != "") {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $valores = "'" . implode("','", array_values($dados)) . "'";
            $this->db->query("INSERT INTO `{$this->_tabela}` ({$campos}) VALUES ({$valores});");
            return true;
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

    public function getTimestampDateformat() {
        $query = $this->db->query("SELECT DATE_FORMAT( NOW(), '%d/%m/%Y - %Hh%i' ) as DTA");
        $query->execute();
        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                return $rows->DTA;
            }
        } else {
            return false;
        }
    }

    public function getTimestamp() {
        $query = $this->db->query("SELECT CURRENT_TIMESTAMP as DTA");
        $query->execute();
        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                return $rows->DTA;
            }
        } else {
            return false;
        }
    }

}
