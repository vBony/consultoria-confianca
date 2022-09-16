<?php

namespace models;

use core\modelHelper;
use models\IpGeolocation;
use core\sanitazerHelper as sanitaze;
use \PDOException;

class Contato extends modelHelper{
    static private $tabela = 'contato';
    static private $formasContato = ['whatsapp', 'email', 'ligacao'];

    private $IpGeolocation;

    public function __construct()
    {
        parent::__construct();
        $this->IpGeolocation = new IpGeolocation();
    }

    public static function isFormaContato($data){
        return in_array($data, self::$formasContato);
    }

    
    public function salvar($data){

        $sql =  "INSERT INTO ".self::$tabela;
        $sql .= "(ipId, nome, email, telefone, mensagem, formasContato, createdAt, idAdmin, statusAdmin, observacaoAdmin, adminDate) ";
        $sql .= "VALUES(:ip, :nome, :email, :telefone, :mensagem, :formasContato, :createdAt, 0, 0, '', '') ";
        $sql = $this->db->prepare($sql);

        $sql->bindValue(':ip', $this->IpGeolocation->getIpid());
        $sql->bindValue(':nome', sanitaze::nomeCompleto($data['nome']));
        $sql->bindValue(':email', $data['email']);
        $sql->bindValue(':telefone', $data['telefone']);
        $sql->bindValue(':mensagem', $data['mensagem']);
        $sql->bindValue(':formasContato', sanitaze::array($data['formasContato']));
        $sql->bindValue(':createdAt', self::createdAt());

        try {
            $this->db->beginTransaction();
            $sql->execute();
            $this->db->commit();

            return true;
        } catch(PDOException $e) {
            $this->db->rollback();
            exit($e->getMessage());
            return false;
        }
    }
}