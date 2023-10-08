<?php

class Products extends Model{

    public function getProducts(){
        $data = array();
        $sql = $this->db->prepare("SELECT * FROM Products");
        $sql->execute();

        if($sql->rowCount() >0){    
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        return $data;
    }
}