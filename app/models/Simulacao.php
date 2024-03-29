<?php
namespace models;

use core\modelHelper;
use \PDO;
use \PDOException;
use models\IpGeolocation;
use models\sanitazers\Simulacao as SanitazerSimulacao;

class Simulacao extends modelHelper{
    static private $tabela = 'simulacao';
    static private $formasContato = ['whatsapp', 'email', 'ligacao'];

    private $IpGeolocation;

    public function __construct()
    {
        parent::__construct();
        $this->IpGeolocation = new IpGeolocation();
    }

    public static function getFormasContato(){
        return self::$formasContato;
    }

    public static function isFormaContato($data){
        return in_array($data, self::$formasContato);
    }

    public function salvar($data){

        $sql  = "INSERT INTO ".self::$tabela;
        $sql .= "(ipId, nome, cpf, cpfConjuge, telefone, email, formasContato, observacao, idTipoImovel, idEstadoImovel, valorImovel, valorFinanciamento, prazoFinanciamento, createdAt, idAdmin, statusAdmin, observacaoAdmin, adminDate) ";
        $sql .= "VALUES(:ip, :nome, :cpf, :cpfConjuge, :telefone, :email, :formasContato, :observacao, :idTipoImovel, :idEstadoImovel, :valorImovel, :valorFinanciamento, :prazoFinanciamento, :createdAt, 0, 0, '', '')";
        $sql = $this->db->prepare($sql);

        $sql->bindValue(':ip', $this->IpGeolocation->getIpid());
        $sql->bindValue(':nome', SanitazerSimulacao::name($data['nome']));
        $sql->bindValue(':cpf', $data['cpf']);
        $sql->bindValue(':cpfConjuge', $data['cpfConjuge']);
        $sql->bindValue(':telefone', $data['telefone']);
        $sql->bindValue(':email', $data['email']);
        $sql->bindValue(':formasContato', SanitazerSimulacao::formasContato($data['formasContato']));
        $sql->bindValue(':observacao', SanitazerSimulacao::observacao($data['observacao']));
        $sql->bindValue(':idTipoImovel', $data['idTipoImovel']);
        $sql->bindValue(':idEstadoImovel', $data['idEstadoImovel']);
        $sql->bindValue(':valorImovel', $data['valorImovel']);
        $sql->bindValue(':valorFinanciamento', $data['valorFinanciamento']);
        $sql->bindValue(':prazoFinanciamento', $data['prazoFinanciamento']);
        $sql->bindValue(':createdAt', self::createdAt());

        try {
            $this->db->beginTransaction();
            $sql->execute();
            $this->db->commit();

            return true;
        } catch(PDOException $e) {
            $this->db->rollback();
            return false;
        }
    }
}