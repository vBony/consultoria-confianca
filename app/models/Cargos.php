<?php

class Cargos extends modelHelper{

    public function buscar($id = null){
        $sql = "SELECT * FROM cargos";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }

    }
}