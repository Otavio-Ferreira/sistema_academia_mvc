<?php

class Aluno extends Model
{

  public function getInfoAluno($id)
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

  public function getAvaliacaoAluno($id)
  {
    $data = array();

    $sql = $this->db->prepare("SELECT * FROM avaliacao WHERE idAluno = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    return $data;
  }

  public function getAvaliacaoAlunoByData($id, $dataAvaliacao){
    $data = array();

    $sql = $this->db->prepare("SELECT * FROM avaliacao WHERE idAluno = :id AND dataAvaliacao = :dataAvaliacao");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':dataAvaliacao', $dataAvaliacao);
    $sql->execute();

    if ($sql->rowCount() > 0) {
      $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    return $data;
  }

}
