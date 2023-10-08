<?php

class Home extends Model
{

    public function getTotalRegistros(){
      $data = array();

      $sql = $this->db->prepare("SELECT count(*) as totalRegistros FROM alunos");
      $sql->execute();

      $data = $sql->fetch(PDO::FETCH_ASSOC);
      
      return $data;
    }
    
    public function getTotalPendencias(){
      $sql = $this->db->prepare("SELECT count(*) as totalPendencias FROM alunos WHERE situacao LIKE 'Pendente'");
      $sql->execute();

      $data = $sql->fetch(PDO::FETCH_ASSOC);

      return $data;
    }

    public function getTotalPagos(){
      $sql = $this->db->prepare("SELECT count(*) as totalPagos FROM alunos WHERE situacao LIKE 'Pago'");
      $sql->execute();

      $data = $sql->fetch(PDO::FETCH_ASSOC);

      return $data;
    }

    public function getBalancoEstimado(){
      $sql = $this->db->prepare("SELECT SUM(mensalidade) as balancoEstimado FROM alunos");
      $sql->execute();

      $data = $sql->fetch(PDO::FETCH_ASSOC);

      return $data;
    }

    public function getBalancoAtual(){
      $sql = $this->db->prepare("SELECT SUM(mensalidade) as balancoAtual FROM alunos WHERE situacao LIKE 'Pago'");
      $sql->execute();

      $data = $sql->fetch(PDO::FETCH_ASSOC);

      return $data;
    }
}
