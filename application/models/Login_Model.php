<?php

class Login_Model extends Model {

    public function existe_conta_rel_usuario($email_cpf_id_username) {

        $email_cpf_id_username = addslashes($email_cpf_id_username);

        $query = $this->db->prepare("SELECT c.*, u.CODUSUARIO, u.USERNAME, u.SENHA as PASSWORD, u.STATUS as STT FROM conta c
LEFT JOIN conta_rel_usuarios cru ON cru.CODCONTA=c.CODCONTA 
LEFT JOIN usuarios u ON u.CODUSUARIO=cru.CODUSUARIO
WHERE (c.EMAIL='{$email_cpf_id_username}' OR c.CPF_CNPJ='{$email_cpf_id_username}' OR c.ID='{$email_cpf_id_username}') OR (u.USERNAME='{$email_cpf_id_username}')");
        $query->execute();
        return $query->rowCount();
    }
    
    public function get_dados_conta_rel_usuario($email_cpf_id_username) {

        $email_cpf_id_username = addslashes($email_cpf_id_username);

        $query = $this->db->prepare("SELECT c.*, u.CODUSUARIO, u.USERNAME, u.SENHA as PASSWORD, u.STATUS as STT FROM conta c
LEFT JOIN conta_rel_usuarios cru ON cru.CODCONTA=c.CODCONTA 
LEFT JOIN usuarios u ON u.CODUSUARIO=cru.CODUSUARIO
WHERE (c.EMAIL='{$email_cpf_id_username}' OR c.CPF_CNPJ='{$email_cpf_id_username}' OR c.ID='{$email_cpf_id_username}') OR (u.USERNAME='{$email_cpf_id_username}')");
        $query->execute();
        
        if ($query->rowCount()) {
            while ($rows = $query->fetch(PDO::FETCH_OBJ)) {
                return $rows;
            }
        } else {
            return false;
        }
    }
}
