<?php

class Alunos extends Model
{

    public function setAluno($id, $idade, $endereco, $situacao, $telefone, $mensalidade, $inscricao, $genero, $senha)
    {

        $sql = $this->db->prepare("INSERT INTO info_alunos (id_aluno, idade, endereco, telefone, mensalidade, inscricao, genero, situacao) VALUES (:id_aluno, :idade, :endereco, :telefone, :mensalidade, :inscricao, :genero, :situacao)");
        $sql->bindValue(':id_aluno', $id);
        $sql->bindValue(':idade', $idade);
        $sql->bindValue(':endereco', $endereco);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':mensalidade', $mensalidade);
        $sql->bindValue(':inscricao', $inscricao);
        $sql->bindValue(':genero', $genero);
        $sql->bindValue(':situacao', $situacao);
        $sql->execute();
    }

    public function addMensalidade($data, $valor, $situacao, $idAluno){
        $sql = $this->db->prepare("INSERT INTO mensalidades (data, valor, situacao, idAluno) VALUES (:data, :valor, :situacao, :idAluno)");
        $sql->bindValue(':data', $data);
        $sql->bindValue(':valor', $valor);
        $sql->bindValue(':situacao', $situacao);
        $sql->bindValue(':idAluno', $idAluno);
        $sql->execute();
    }

    public function deleteAluno($id){
        $sql = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        
        $sql = $this->db->prepare("DELETE FROM info_alunos WHERE id_aluno = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function upAluno($id, $nome, $email, $idade, $endereco, $situacao, $telefone, $mensalidade, $inscricao, $genero){
        // $sql = $this->db->prepare("UPDATE alunos SET nome = :nome, email = :email, idade = :idade, endereco = :endereco, situacao = :situacao, telefone = :telefone, mensalidade = :mensalidade, inscricao = :inscricao, genero = :genero WHERE id = :id");

        $sql = $this->db->prepare("UPDATE users AS u INNER JOIN info_alunos AS a ON u.id = a.id_aluno SET u.name = :nome, u.email = :email, a.idade = :idade, a.endereco = :endereco, a.situacao = :situacao, a.telefone = :telefone, a.mensalidade = :mensalidade, a.inscricao = :inscricao, a.genero = :genero WHERE u.id = :id;");

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
        $sql = $this->db->prepare("SELECT * FROM users AS u LEFT JOIN info_alunos AS a ON u.id = a.id_aluno WHERE id_group = 4");
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        }

        return $data;
    }

    public function getAluno($id)
    {
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM users AS u LEFT JOIN info_alunos AS a ON u.id = a.id_aluno WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch(PDO::FETCH_ASSOC);
        }
        return $data;
    }

    public function getAlunoFilter($serchValue){
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM users AS u LEFT JOIN info_alunos AS a ON u.id = a.id_aluno WHERE name LIKE :searchValue AND id_group = 4");
        $sql->bindValue(':searchValue', '%'.$serchValue.'%');
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }

    public function getAlunosBySituation($situacao){
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM users AS u LEFT JOIN info_alunos AS a ON u.id = a.id_aluno WHERE situacao = :situacao AND id_group = 4");
        $sql->bindValue(':situacao', $situacao);
        $sql->execute();

        if($sql->rowCount() > 0){
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }

    public function getVerify($id)
    {
        $sql = $this->db->prepare("SELECT * FROM info_alunos WHERE id_aluno = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        }
        else{
            return false;
        }
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
