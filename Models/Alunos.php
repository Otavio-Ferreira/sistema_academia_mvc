<?php

class Alunos extends Model
{

    public function setAluno($nome, $email, $idade, $endereco, $situacao, $telefone, $mensalidade, $inscricao, $genero, $senha)
    {

        $sql = $this->db->prepare("INSERT INTO alunos (nome, email, senha, idade, endereco, telefone, mensalidade, inscricao, genero, situacao) VALUES (:nome, :email, :senha, :idade, :endereco, :telefone, :mensalidade, :inscricao, :genero, :situacao)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', password_hash($senha, PASSWORD_DEFAULT));
        $sql->bindValue(':idade', $idade);
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':mensalidade', $mensalidade);
        $sql->bindValue(':inscricao', $inscricao);
        $sql->bindValue(':genero', $genero);
        $sql->bindValue(':situacao', $situacao);
        $sql->execute();
    }

    public function deleteAluno($id){
        $sql = $this->db->prepare("DELETE FROM alunos WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function upAluno($id, $nome, $email, $idade, $endereco, $situacao, $telefone, $mensalidade, $inscricao, $genero){
        $sql = $this->db->prepare("UPDATE alunos SET nome = :nome, email = :email, idade = :idade, endereco = :endereco, situacao = :situacao, telefone = :telefone, mensalidade = :mensalidade, inscricao = :inscricao, genero = :genero WHERE id = :id");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':idade', $idade);
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':situacao', $situacao);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':mensalidade', $mensalidade);
        $sql->bindValue(':inscricao', $inscricao);
        $sql->bindValue(':genero', $genero);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function getAlunos()
    {
        
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM alunos");
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    public function getAluno($id)
    {
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM alunos WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    public function getAlunoFilter($serchValue){
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM alunos WHERE nome LIKE :searchValue");
        $sql->bindValue(':searchValue', '%'.$serchValue.'%');
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }

    public function getAlunosBySituation($situacao){
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM alunos WHERE situacao = :situacao");
        $sql->bindValue(':situacao', $situacao);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }

    public function getInfoAluno($email){
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM alunos WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }
}
