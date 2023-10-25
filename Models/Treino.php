<?php

    class Treino extends Model{

        public function getInfoTreino($id){

            $data = array();
            
            $sql = $this->db->prepare("SELECT * FROM info_treinos WHERE idAluno = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() >0){    
                $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            }

            return $data;
        }

        public function getTreino($idTreino){

            $data = array();
            
            $sql = $this->db->prepare("SELECT * FROM treinos WHERE idTreino = :idTreino");
            $sql->bindValue(':idTreino', $idTreino);
            $sql->execute();

            if($sql->rowCount() >0){    
                $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            }

            return $data;
        }

        public function getInfoTreinoByIdTreino($idTreino){
            
            $data = array();
            
            $sql = $this->db->prepare("SELECT * FROM info_treinos WHERE idTreino = :idTreino");
            $sql->bindValue(':idTreino', $idTreino);
            $sql->execute();

            if($sql->rowCount() >0){    
                $data = $sql->fetch(PDO::FETCH_ASSOC);
            }

            return $data;
        }

        public function upAlunoInfoTreino($id, $personal, $objetivo, $level){

            $sql = $this->db->prepare("UPDATE info_alunos SET personal = :personal, objetivo = :objetivo, nivel = :nivel WHERE id_aluno = :id;");
            $sql->bindValue(':personal', $personal);
            $sql->bindValue(':objetivo', $objetivo);
            $sql->bindValue(':nivel', $level);
            $sql->bindValue(':id', $id);
            $sql->execute();
        }

        public function setInfoTreino($dia, $idAluno){
            $sql = $this->db->prepare("INSERT INTO info_treinos (diaSemana, idAluno) VALUES (:dia, :idAluno);");
            $sql->bindValue(':dia', $dia);
            $sql->bindValue(':idAluno', $idAluno);
            $sql->execute();
        }

        public function setTreino($treinos, $series, $repeticoes, $idTreino){
            $sql = $this->db->prepare("INSERT INTO treinos (nomeTreino, serieTreino, repeticao, idTreino) VALUES (:treinos, :series, :repeticoes, :idTreino);");
            $sql->bindValue(':treinos', $treinos);
            $sql->bindValue(':series', $series);
            $sql->bindValue(':repeticoes', $repeticoes);
            $sql->bindValue(':idTreino', $idTreino);
            $sql->execute();
        }

        public function deleteAll($idTreino){
            $sql = $this->db->prepare("DELETE FROM info_treinos WHERE idTreino = :idTreino");
            $sql->bindValue(':idTreino', $idTreino);
            $sql->execute();
            
            $sql = $this->db->prepare("DELETE FROM treinos WHERE idTreino = :idTreino");
            $sql->bindValue(':idTreino', $idTreino);
            $sql->execute();
        }

        public function deleteTreino($idTreino){
            $sql = $this->db->prepare("DELETE FROM treinos WHERE id = :idTreino");
            $sql->bindValue(':idTreino', $idTreino);
            $sql->execute();
        }
    }

?>