<?php

    class Treino extends Model{

        public function getTreino($id){

            $data = array();
            
            $sql = $this->db->prepare("SELECT * FROM treinos WHERE idAluno = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() >0){    
                $data = $sql->fetchAll(PDO::FETCH_ASSOC);
            }

            return $data;
        }

        public function upAlunoInfoTreino($id, $personal, $objetivo, $level){

            $sql = $this->db->prepare("UPDATE alunos SET personal = :personal, objetivo = :objetivo, nivel = :nivel WHERE id = :id;");
            $sql->bindValue(':personal', $personal);
            $sql->bindValue(':objetivo', $objetivo);
            $sql->bindValue(':nivel', $level);
            $sql->bindValue(':id', $id);
            $sql->execute();
        }

        public function setTreino($dia, $treinos, $series, $repeticoes, $idAluno){
            $sql = $this->db->prepare("INSERT INTO treinos (diaSemana, nomeTreino, serieTreino, repeticao, idAluno) VALUES (:dia, :treinos, :series, :repeticoes, :idAluno);");
            $sql->bindValue(':dia', $dia);
            $sql->bindValue(':treinos', $treinos);
            $sql->bindValue(':series', $series);
            $sql->bindValue(':repeticoes', $repeticoes);
            $sql->bindValue(':idAluno', $idAluno);
            $sql->execute();
        }

        public function deleteTreino($idAluno, $idTreino){
            $sql = $this->db->prepare("DELETE FROM treinos WHERE idAluno = :idAluno AND id = :idTreino");
            $sql->bindValue(':idAluno', $idAluno);
            $sql->bindValue(':idTreino', $idTreino);
            $sql->execute();
        }
    }

?>