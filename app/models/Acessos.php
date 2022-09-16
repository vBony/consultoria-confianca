<?php

namespace models;
use core\modelHelper;
use \PDO;
use \PDOException;
use models\IpGeolocation;

class Acessos extends modelHelper{
    private $tabela = 'acessos';

    private $IpGeolocation;

    public function __construct(){
        parent::__construct();

        $this->IpGeolocation = new IpGeolocation();
    }

    public function setAcesso(){
        $idIp = $this->IpGeolocation->getIpid();

        $ultimoAcessoIp = $this->getUltimo($idIp);

        if(empty($ultimoAcessoIp)){
            $validade = date("Y-m-d H:i:s", strtotime(" +5 minutes"));
            $hoje = date("Y-m-d H:i:s");

            $sql = "INSERT INTO {$this->tabela} (idIp, validoAte, dataCriacao) VALUES(:idIp, :validoAte, :dataCriacao)";

            $sql = $this->db->prepare($sql);
            $sql->bindValue(':idIp', $idIp);
            $sql->bindValue(':validoAte', $validade);
            $sql->bindValue(':dataCriacao', $hoje);

            try {
                $this->db->beginTransaction();
                $sql->execute();
                $id = $this->db->lastInsertId(PDO::FETCH_ASSOC);
                $this->db->commit();

                return true;
            } catch(PDOException $e) {
                $this->db->rollback();
                return false;
            }
        }
        
    }

    public function getUltimo($ipId){
        $sql = "SELECT * FROM {$this->tabela} WHERE idIp = :ipId ORDER BY id DESC limit 1";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':ipId', $ipId);
        $sql->execute();

        if($sql->rowCount() > 0){
            $registro = $sql->fetch(PDO::FETCH_ASSOC);
            $agora = date("Y-m-d H:i:s");

            if(strtotime($agora) < strtotime($registro['validoAte'])){
                return $registro;
            }
        }
    }
}