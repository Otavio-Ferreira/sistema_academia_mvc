<?php

class Perfil extends Model{

    public function getPerfil($id){
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM users WHERE id = $id");
        $sql->execute();

        if($sql->rowCount() >0){    
            $data = $sql->fetch(PDO::FETCH_ASSOC);
        }

        return $data;
    }

    public function upAdmin($id, $nome, $email){
        $sql = $this->db->prepare("UPDATE users SET name = :nome, email = :email WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->execute();
    }

    public function upSenhaAdmin($id, $newPassword){
        $sql = $this->db->prepare("UPDATE users SET password = :newPassword WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':newPassword', password_hash($newPassword, PASSWORD_DEFAULT));
        $sql->execute();
    }
    
}