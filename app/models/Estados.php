<?php

namespace models;
use core\modelHelper;
use \PDO;

class Estados extends modelHelper{
    private $tabela = 'estados';

    public function getAll(){
        $sql = "SELECT * FROM {$this->tabela}";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        if($sql->rowCount() > 0){
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function getById($id){
        $sql = "SELECT * FROM {$this->tabela} WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            return $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            return null;
        }
    }

    public static function get(){
        return (new Estados())->getAll();
    }

    public static function getOne($id){
        return (new Estados())->getById($id);
    }
}
