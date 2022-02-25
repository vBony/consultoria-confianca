<?php

namespace models;
use core\modelHelper;
use \PDO;
use \PDOException;

class IpGeoLocation extends modelHelper{
    private $tabela = 'ipGeolocation';
    private $ip = null;

    private $idIpLocalhost = 1;
    private $ipLocalhost = '::1';

    private $idIpDesconhecido = 2;

    public function __construct()
    {
        parent::__construct();

        $this->ip = $this->getUserIP();
    }

    public function getIpid(){
        if($this->ip == $this->ipLocalhost){
            return $this->idIpLocalhost;
        }else{
            return $this->findIpGeolocation($this->ip);
        }
    }

    private function findIpGeolocation($ip){
        $geolocation = $this->findByIp($ip);

        if(!empty($geolocation)){
            return $geolocation['id'];
        }else{
            $cURLConnection = curl_init();
    
            curl_setopt($cURLConnection, CURLOPT_URL, "http://ip-api.com/json/{$this->ip}");
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
    
            $geolocation = curl_exec($cURLConnection);
            curl_close($cURLConnection);
    
            $response = json_decode(json_encode($geolocation), true);
            $data = json_decode($response, true);
    
            if($data['status'] == 'success'){
                return $this->saveGeolocation($data);
            }else{
                return $this->idIpDesconhecido;
            }
        }

    }

    private function findByIp($ip){
        $sql = "SELECT * FROM {$this->tabela} WHERE ip = :ip ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':ip', $ip);
        $sql->execute();

        if($sql->rowCount() > 0){
            return $sql->fetch(PDO::FETCH_ASSOC);
        }
    }

    public function buscarPorEmail(){
        $email = 'contato.vinicius-af@outlook.com';

        $sql = "SELECT * FROM admin WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', strtolower($email));
        $sql->execute();

        if($sql->rowCount() > 0){
           return $sql->fetch(PDO::FETCH_ASSOC);
        }
    }

    private function getUserIP(){
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])){
                $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }else{
            $ip = $remote;
        }

        return $ip;
    }

    private function saveGeolocation($response){
        $sql = "INSERT {$this->tabela} ";
        $sql .= "(ip, country, countryCode, regionName, city, lat, lon) ";
        $sql .= "VALUES(:ip, :country, :countryCode, :regionName, :city, :lat, :lon) ";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':ip', $response['query']);
        $sql->bindValue(':country', $response['country']);
        $sql->bindValue(':countryCode', $response['countryCode']);
        $sql->bindValue(':regionName', $response['regionName']);
        $sql->bindValue(':city', $response['city']);
        $sql->bindValue(':city', $response['city']);
        $sql->bindValue(':lat', $response['lat']);
        $sql->bindValue(':lon', $response['lon']);

        try {
            $this->db->beginTransaction();
            $sql->execute();
            $id = $this->db->lastInsertId(PDO::FETCH_ASSOC);
            $this->db->commit();

            return $id;
        } catch(PDOException $e) {
            $this->db->rollback();
            return false;
        }

    }
}