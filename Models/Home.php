<?php

class Home extends Model
{

  public function getTotalRegistros()
  {
    $data = array();

    $sql = $this->db->prepare("SELECT count(*) as totalRegistros FROM info_alunos");
    $sql->execute();

    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
  }

  public function getTotalPendencias()
  {
    $sql = $this->db->prepare("SELECT count(*) as totalPendencias FROM info_alunos WHERE situacao LIKE 'Pendente'");
    $sql->execute();

    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
  }

  public function getTotalPagos()
  {
    $sql = $this->db->prepare("SELECT count(*) as totalPagos FROM info_alunos WHERE situacao LIKE 'Pago'");
    $sql->execute();

    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
  }

  public function getBalancoEstimado()
  {
    $sql = $this->db->prepare("SELECT SUM(mensalidade) as balancoEstimado FROM info_alunos");
    $sql->execute();

    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
  }

  public function getBalancoAtual()
  {
    $sql = $this->db->prepare("SELECT SUM(mensalidade) as balancoAtual FROM info_alunos
      
       WHERE situacao LIKE 'Pago'");
    $sql->execute();

    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
  }

  // destinado a mensalidade e notificacao

  public function verifyMensalidade($data, $idAluno)
  {
    $sql = $this->db->prepare("SELECT * FROM mensalidades WHERE data = :data AND idAluno = :idAluno");
    $sql->bindValue(':data', $data);
    $sql->bindValue(':idAluno', $idAluno);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function setNotificacao($tipo, $idAluno)
  {
    $sql = $this->db->prepare("INSERT INTO notificacoes (tipo, idAluno) VALUES (:tipo, :idAluno)");
    $sql->bindValue(':tipo', $tipo);
    $sql->bindValue(':idAluno', $idAluno);
    $sql->execute();
  }

  public function getNotificacoes(){
    $data = array();

    $sql = $this->db->prepare("SELECT * FROM users AS u JOIN notificacoes AS n ON u.id = n.idAluno");
    $sql->execute();

    $data = $sql->fetchAll(PDO::FETCH_ASSOC);

    return $data;
  }

  public function getTotalNotificacoes(){
    $data = array();

    $sql = $this->db->prepare("SELECT count(*) as totalNotificacoes FROM notificacoes");
    $sql->execute();

    $data = $sql->fetch(PDO::FETCH_ASSOC);

    return $data;
  }
}
