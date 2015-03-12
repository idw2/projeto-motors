<?php

class Conta_Model extends Model {

//    public function existe_conta($email) {
//        $query = $this->db->prepare("SELECT * FROM conta WHERE EMAIL=:EMAIL");
//        $query->bindParam(":EMAIL", $email, PDO::PARAM_STR, 70);
//        $query->execute();
//        return $query->rowCount();
//    }
//    
    public function existe_conta($email_or_cpf_or_cnpj_or_id) {
        $query = $this->db->prepare("SELECT * FROM conta WHERE EMAIL=:EMAIL OR CPF_CNPJ=:CPF_CNPJ OR ID=:ID");
        $query->bindParam(":EMAIL", $email_or_cpf_or_cnpj_or_id, PDO::PARAM_STR, 70);
        $query->bindParam(":CPF_CNPJ", $email_or_cpf_or_cnpj_or_id, PDO::PARAM_STR, 14);
        $query->bindParam(":ID", $email_or_cpf_or_cnpj_or_id, PDO::PARAM_STR, 20);
        $query->execute();
        return $query->rowCount();
    }
    
    public function confere_senha($email, $senha){
        $query = $this->db->prepare("SELECT * FROM conta WHERE (EMAIL=:EMAIL or ID=:ID) AND SENHA=:SENHA");
        $query->bindParam(":EMAIL", $email, PDO::PARAM_STR, 70);
        $query->bindParam(":ID", $email, PDO::PARAM_STR, 70);
        $query->bindParam(":SENHA", $senha, PDO::PARAM_STR, 32);
        $query->execute();
        return $query->rowCount();
    }
    
    public function testa_status($email, $senha){
        $query = $this->db->prepare("SELECT * FROM conta WHERE EMAIL=:EMAIL AND SENHA=:SENHA AND STATUS=1");
        $query->bindParam(":EMAIL", $email, PDO::PARAM_STR, 70);
        $query->bindParam(":SENHA", $senha, PDO::PARAM_STR, 32);
        $query->execute();
        return $query->rowCount();
    }
    
    public function get_dados_conta($email){
        $this->_tabela = "conta";
        $where = "EMAIL='{$email}'";
        return $this->read($where);
    }
    
    public function update_senha_primeiro_acesso($codconta, $senha_nova, $lembrete){
        $query = $this->db->prepare("UPDATE conta SET SENHA='{$senha_nova}', LEMBRETE='{$lembrete}' WHERE CODCONTA='{$codconta}'");
        $query->execute();
        return true;
    }
    
    public function update_senha($codconta, $senha_nova){
        $query = $this->db->prepare("UPDATE conta SET SENHA='{$senha_nova}' WHERE CODCONTA='{$codconta}'");
        $query->execute();
        return true;
    }
    
    public function existe_iniciais($iniciais) {
        $query = $this->db->prepare("SELECT * FROM conta WHERE ID=:ID");
        $query->bindParam(":ID", $iniciais, PDO::PARAM_STR, 20);
        $query->execute();
        return $query->rowCount();
    }
    
    public function insert_conta(Array $dados) {
        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `conta` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODCONTA", $dados["CODCONTA"], PDO::PARAM_STR, 32);
            $query->bindParam(":NOME_RAZAO_SOCIAL", $dados["NOME_RAZAO_SOCIAL"], PDO::PARAM_STR, 100);
            $query->bindParam(":TIPO_CONTA", $dados["TIPO_CONTA"], PDO::PARAM_STR, 2);
            $query->bindParam(":ID", $dados["ID"], PDO::PARAM_STR, 20);
            if ($dados["SITE"] != "" || $dados["SITE"] != null) {
                $query->bindParam(":SITE", $dados["SITE"], PDO::PARAM_STR, 100);
            }
            $query->bindParam(":EMAIL", $dados["EMAIL"], PDO::PARAM_STR, 70);
            $query->bindParam(":SENHA", $dados["SENHA"], PDO::PARAM_STR, 32);
            $query->bindParam(":LEMBRETE", $dados["LEMBRETE"], PDO::PARAM_STR, 255);
            $query->bindParam(":NASCIMENTO_FUNDACAO", $dados["NASCIMENTO_FUNDACAO"], PDO::PARAM_STR);
            $query->bindParam(":CPF_CNPJ", $dados["CPF_CNPJ"], PDO::PARAM_STR, 14);
            $query->bindParam(":PAPEL", $dados["PAPEL"], PDO::PARAM_STR, 255);
            $query->bindParam(":SEXO", $dados["SEXO"], PDO::PARAM_STR);
            $query->bindParam(":STATUS", $dados["STATUS"], PDO::PARAM_STR);
            $query->bindParam(":OWNER", $dados["OWNER"], PDO::PARAM_STR, 32);
            
            $query->execute();

            return true;
        } else {
            return false;
        }
    }
    
    
    
    public function insert_endereco(Array $dados) {
        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `enderecos` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODENDERECO", $dados["CODENDERECO"], PDO::PARAM_STR, 32);
            $query->bindParam(":CEP", $dados["CEP"], PDO::PARAM_STR, 9);
            $query->bindParam(":LOGRADOURO", $dados["LOGRADOURO"], PDO::PARAM_STR, 255);
            $query->bindParam(":NUMERO", $dados["NUMERO"], PDO::PARAM_STR, 255);
            $query->bindParam(":COMPLEMENTO", $dados["COMPLEMENTO"], PDO::PARAM_STR, 255);
            $query->bindParam(":UF", $dados["UF"], PDO::PARAM_STR, 2);
            $query->bindParam(":CIDADE", $dados["CIDADE"], PDO::PARAM_STR, 255);
            $query->bindParam(":BAIRRO", $dados["BAIRRO"], PDO::PARAM_STR, 255);
            $query->bindParam(":STATUS", $dados["STATUS"], PDO::PARAM_STR);

            $query->execute();

            return true;
        } else {
            return false;
        }
    }
    
    public function insert_conta_rel_endereco(Array $dados) {
        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `conta_rel_enderecos` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODENDERECO", $dados["CODENDERECO"], PDO::PARAM_STR, 32);
            $query->bindParam(":CODCONTA", $dados["CODCONTA"], PDO::PARAM_STR, 32);

            $query->execute();

            return true;
        } else {
            return false;
        }
    }
    
    public function insert_conta_rel_telefone(Array $dados) {
        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `conta_rel_telefones` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODTELEFONE", $dados["CODTELEFONE"], PDO::PARAM_STR, 32);
            $query->bindParam(":CODCONTA", $dados["CODCONTA"], PDO::PARAM_STR, 32);

            $query->execute();

            return true;
        } else {
            return false;
        }
    }
    
    public function insert_telefone(Array $dados) {
        if (sizeof($dados) != 0) {
            $campos = "`" . implode("`,`", array_keys($dados)) . "`";
            $keys = ":" . implode(",:", array_keys($dados));

            $query = $this->db->prepare("INSERT INTO `telefones` ({$campos}) VALUES ({$keys});");

            $query->bindParam(":CODTELEFONE", $dados["CODTELEFONE"], PDO::PARAM_STR, 32);
            $query->bindParam(":DDD", $dados["DDD"], PDO::PARAM_STR, 10);
            $query->bindParam(":TELEFONE", $dados["TELEFONE"], PDO::PARAM_STR, 20);
            $query->bindParam(":RAMAL", $dados["RAMAL"], PDO::PARAM_STR, 20);
            $query->bindParam(":STATUS", $dados["STATUS"], PDO::PARAM_STR);

            $query->execute();

            return true;
        } else {
            return false;
        }
    }
    
    public function get_endereco_conta($codconta_or_cpf_or_cnpj_or_id_or_email_or_email) {
        
        $query = $this->db->query("SELECT enderecos.* FROM enderecos
        INNER JOIN conta_rel_enderecos ON conta_rel_enderecos.CODENDERECO=enderecos.CODENDERECO
        INNER JOIN conta ON conta_rel_enderecos.CODCONTA=conta.CODCONTA
        WHERE conta.CODCONTA='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_email}' 
        OR conta.CPF_CNPJ='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_email}' 
        OR conta.ID='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_email}' 
        OR conta.EMAIL='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_email}' 
        OR conta.SITE LIKE '%{$codconta_or_cpf_or_cnpj_or_id_or_email_or_email}%' 
        ORDER BY conta_rel_enderecos.DTA ASC");
        $query->execute();
        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                return $rows;
            }
        } else {
            return false;
        }
    }
    
    public function get_telefones_conta($codconta_or_cpf_or_cnpj_or_id_or_email_or_site) {
        
        $query = $this->db->query("SELECT telefones.* FROM telefones
        INNER JOIN conta_rel_telefones ON conta_rel_telefones.CODTELEFONE=telefones.CODTELEFONE
        INNER JOIN conta ON conta_rel_telefones.CODCONTA=conta.CODCONTA
        WHERE conta.CODCONTA='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_site}' 
        OR conta.CPF_CNPJ='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_site}' 
        OR conta.ID='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_site}' 
        OR conta.EMAIL='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_site}' 
        OR conta.SITE LIKE '%{$codconta_or_cpf_or_cnpj_or_id_or_email_or_site}%' 
        ORDER BY conta_rel_telefones.DTA ASC");
        $query->execute();
        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {                
                $arr[] = $rows;
            }
            return $arr;
        } else {
            return false;
        }
    }
    
    public function get_conta($codconta_or_cpf_or_cnpj_or_id_or_email_or_url) {
        
        $query = $this->db->query("SELECT 
	conta.*, 
	DATE_FORMAT( conta.NASCIMENTO_FUNDACAO, '%d' ) as DIA, 
	DATE_FORMAT( conta.NASCIMENTO_FUNDACAO, '%m' ) as MES, 
	DATE_FORMAT( conta.NASCIMENTO_FUNDACAO, '%Y' ) as ANO,
        DATE_FORMAT( conta.DTA, '%d/%m/%Y - %Hh%i' ) as DTA 
        FROM 
	conta WHERE CODCONTA='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_url}' OR SITE LIKE '%{$codconta_or_cpf_or_cnpj_or_id_or_email_or_url}%' OR CPF_CNPJ='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_url}' OR ID='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_url}' OR EMAIL='{$codconta_or_cpf_or_cnpj_or_id_or_email_or_url}'");
        $query->execute();
        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                if ($rows->TIPO_CONTA == "pj") {
                    $rows->CNPJ = $c->formataCnpj($rows->CPF_CNPJ);
                } else {
                    $rows->CPF = $c->formataCpf($rows->CPF_CNPJ);
                }

                return $rows;
            }
        } else {
            return false;
        }
    }
    
    public function get_conta_all() {
        
        $query = $this->db->query("SELECT 
	conta.*, 
	DATE_FORMAT( conta.NASCIMENTO_FUNDACAO, '%d' ) as DIA, 
	DATE_FORMAT( conta.NASCIMENTO_FUNDACAO, '%m' ) as MES, 
	DATE_FORMAT( conta.NASCIMENTO_FUNDACAO, '%Y' ) as ANO,
        DATE_FORMAT( conta.DTA, '%d/%m/%Y - %Hh%i' ) as DTA 
        FROM 
	conta ORDER BY DTA DESC");
        $query->execute();
        $arr = array();
        if ($query->rowCount()) {
            $c = new Controller();
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                if ($rows->TIPO_CONTA == "pj") {
                    $rows->CNPJ = $c->formataCnpj($rows->CPF_CNPJ);
                } else {
                    $rows->CPF = $c->formataCpf($rows->CPF_CNPJ);
                }

                $arr[] = $rows;
            }
            return $arr;
        } else {
            return false;
        }
    }
    
    public function update_conta($codconta_or_email_or_id_cpf_or_cnpj, Array $dados) {
        $this->_tabela = "conta";
        $where = "CODCONTA='{$codconta_or_email_or_id_cpf_or_cnpj}' OR ID='{$codconta_or_email_or_id_cpf_or_cnpj}' OR EMAIL='{$codconta_or_email_or_id_cpf_or_cnpj}' OR CPF_CNPJ='{$codconta_or_email_or_id_cpf_or_cnpj}'";
        return $this->update($dados, $where);
    }
    
    public function del_conta($codconta) {
        $query = $this->db->query("DELETE conta, conta_rel_enderecos, conta_rel_telefones, enderecos, telefones FROM conta
INNER JOIN conta_rel_enderecos ON conta_rel_enderecos.CODCONTA=conta.CODCONTA
INNER JOIN enderecos ON conta_rel_enderecos.CODENDERECO=enderecos.CODENDERECO
INNER JOIN conta_rel_telefones ON conta_rel_telefones.CODCONTA=conta.CODCONTA
INNER JOIN telefones ON conta_rel_telefones.CODTELEFONE=telefones.CODTELEFONE
WHERE conta.CODCONTA IN('{$codconta}') AND conta.EMAIL NOT IN('designlab@designlab.com.br');");
        $query->execute();
        return true;
    }
    
    public function del_telefone_endereco_conta($codconta) {
        $query = $this->db->query("DELETE enderecos, conta_rel_enderecos, telefones, conta_rel_telefones FROM enderecos
INNER JOIN conta_rel_enderecos ON conta_rel_enderecos.CODENDERECO=enderecos.CODENDERECO
INNER JOIN conta_rel_telefones ON conta_rel_telefones.CODCONTA=conta_rel_enderecos.CODCONTA
INNER JOIN telefones ON telefones.CODTELEFONE=conta_rel_telefones.CODTELEFONE
WHERE conta_rel_enderecos.CODCONTA='{$codconta}'");
        $query->execute();
        return true;
    }
    
}
