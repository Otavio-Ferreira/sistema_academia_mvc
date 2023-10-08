<?php

class Avaliacao extends Model{

  public function setTreino($id, $dataAvaliacao, $peso, $altura, $cintura, $quadril, $coxa, $gordura, $observacoes){
    $sql = $this->db->prepare("INSERT INTO avaliacao SET dataAvaliacao = :dataAvaliacao, peso = :peso, altura = :altura, cintura = :cintura, quadril = :quadril, coxa = :coxa, gordura = :gordura, observacoes = :observacoes, idAluno = :id");
    $sql->bindValue(':dataAvaliacao', $dataAvaliacao);
    $sql->bindValue(':peso', $peso);
    $sql->bindValue(':altura', $altura);
    $sql->bindValue(':cintura', $cintura);
    $sql->bindValue(':quadril', $quadril);
    $sql->bindValue(':coxa', $coxa);
    $sql->bindValue(':gordura', $gordura);
    $sql->bindValue(':observacoes', $observacoes);
    $sql->bindValue(':id', $id);
    $sql->execute();

  }

  public function getAvaliacoes($id){
    $data = array();
    $sql = $this->db->prepare("SELECT * FROM avaliacao WHERE idAluno = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() >0){    
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    return $data;
  }

  public function deleteAvaliacao($id){

    $sql = $this->db->prepare("DELETE FROM avaliacao WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

  }
}