<?php

class Usuario_Model extends Model {

    public function existe_usuario($username) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE USERNAME=:USERNAME");
        $query->bindParam(":USERNAME", $username, PDO::PARAM_STR, 15);
        $query->execute();
        return $query->rowCount();
    }
    
    public function confere_senha($username, $senha) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE USERNAME=:USERNAME AND SENHA=:SENHA");
        $query->bindParam(":USERNAME", $email, PDO::PARAM_STR, 15);
        $query->bindParam(":SENHA", $username, PDO::PARAM_STR, 32);
        $query->execute();
        return $query->rowCount();
    }

    public function testa_status($username, $senha) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE USERNAME=:USERNAME AND SENHA=:SENHA AND STATUS=1");
        $query->bindParam(":USERNAME", $email, PDO::PARAM_STR, 15);
        $query->bindParam(":SENHA", $username, PDO::PARAM_STR, 32);
        $query->execute();
        return $query->rowCount();
    }

    public function get_dados_conta($username_or_codusuario) {
        $this->_tabela = "usuarios";
        $where = "USERNAME='{$username_or_codusuario}' OR CODUSUARIO='{$username_or_codusuario}'";
        return $this->read($where);
    }

    public function update_senha_primeiro_acesso($codusuario, $senha_nova, $lembrete) {
        $query = $this->db->prepare("UPDATE usuarios SET SENHA='{$senha_nova}', LEMBRETE='{$lembrete}' WHERE CODUSUARIO='{$codusuario}'");
        $query->execute();
        return true;
    }
    
    public function update_senha($codusuario, $senha_nova) {
        $query = $this->db->prepare("UPDATE usuarios SET SENHA='{$senha_nova}' WHERE CODUSUARIO='{$codusuario}'");
        $query->execute();
        return true;
    }

    public function insert_usuario(Array $dados) {
        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `usuarios` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODUSUARIO", $dados["CODUSUARIO"], PDO::PARAM_STR, 32);
            $query->bindParam(":LEMBRETE", $dados["LEMBRETE"], PDO::PARAM_STR, 255);
            $query->bindParam(":USERNAME", $dados["USERNAME"], PDO::PARAM_STR, 15);
            $query->bindParam(":SENHA", $dados["SENHA"], PDO::PARAM_STR, 32);
            $query->bindParam(":STATUS", $dados["STATUS"], PDO::PARAM_STR);

            $query->execute();

            return true;
        } else {
            return false;
        }
    }

    public function insert_conta_rel_usuarios(Array $dados) {

        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `conta_rel_usuarios` ({$campos}) VALUES ({$keys});");
            
            $query->bindParam(":CODUSUARIO", $dados["CODUSUARIO"], PDO::PARAM_STR, 32);
            $query->bindParam(":CODCONTA", $dados["CODCONTA"], PDO::PARAM_STR, 32);

            $query->execute();
            return true;
        } else {
            return false;
        }
    }

    public function get_usuarios_all($codconta = NULL) {

        if ($codconta == NULL) {
            $query = $this->db->query("SELECT 
            usuarios.*, 
            DATE_FORMAT( usuarios.DTA, '%d/%m/%Y - %Hh%i' ) as DTA 
            FROM 
            usuarios ORDER BY DTA DESC");
        } else {
            $query = $this->db->query("SELECT
 usuarios.*, conta.SITE, DATE_FORMAT( usuarios.DTA, '%d/%m/%Y - %Hh%i' ) as DTA 
FROM usuarios 
INNER JOIN conta_rel_usuarios ON conta_rel_usuarios.CODUSUARIO=usuarios.CODUSUARIO 
INNER JOIN conta ON conta_rel_usuarios.CODCONTA=conta.CODCONTA 
WHERE conta_rel_usuarios.CODCONTA='{$codconta}' 
GROUP BY usuarios.CODUSUARIO DESC
ORDER BY usuarios.DTA DESC");
        }
        
        $query->execute();
        $arr = array();
        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                $arr[] = $rows;
            }
            return $arr;
        } else {
            return false;
        }
    }

    public function update_usuario($codusuario_or_username, Array $dados) {
        $this->_tabela = "usuarios";
        $where = "CODUSUARIO='{$codusuario_or_username}' OR USERNAME='{$codusuario_or_username}'";
        return $this->update($dados, $where);
    }

    public function del_usuario($codusuario_or_username) {
        $query = $this->db->query("DELETE usuarios, conta_rel_usuarios FROM usuarios
INNER JOIN conta_rel_usuarios ON conta_rel_usuarios.CODUSUARIO=usuarios.CODUSUARIO
WHERE usuarios.CODUSUARIO IN('{$codusuario_or_username}') OR usuarios.USERNAME IN('{$codusuario_or_username}');");
        $query->execute();
        return true;
    }

}
