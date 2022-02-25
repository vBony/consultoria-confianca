<?php

namespace core;
use \PDO;
use \PDOException;
class modelHelper{
    protected $db;

    public function __construct(){
        try{
            $this->db = new PDO("mysql:dbname=".$_ENV['DB_NAME'].";host=".$_ENV['HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
            exit;
        }
    }

    public static function createdAt(){
        return date('Y-m-d H:i:s');
    }
}
?>