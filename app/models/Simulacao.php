<?php
namespace models;

use core\modelHelper;
use \PDO;

class Simulacao extends modelHelper{
    static private $tabela = 'simulacao';
    static private $formasContato = ['whatsapp', 'email'];

    public static function getFormasContato(){
        return self::$formasContato;
    }

    public static function isFormaContato($data){
        return in_array($data, self::$formasContato);
    }

    public function salvar($data){
        $sql  = "INSERT INTO ".self::$tabela;
        $sql .= "(ipId, nome, cpf, cpfConjuge, telefone, email, formasContato, observacao, idTipoImovel, idEstadoImovel, valorImovel, valorFinanciamento, prazoFinanciamento, createdAt, idAdmin, statusAdmin, observacaoAdmin, adminDate) ";
        $sql .= "VALUES(:ip, :nome, :cpf, :cpfConjuge, :telefone, :email, :formasContato, :observacao, :idTipoImovel, :idEstadoImovel, :valorImovel, :valorFinanciamento, :prazoFinanciamento, :createdAt, :idAdmin, 0, '', '')";
        $sql = $this->db->prepare($sql);

        
    }
}