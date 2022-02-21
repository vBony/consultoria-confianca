<?php
namespace models;

class Simulacao{
    static private $formasContato = ['whatsapp', 'email'];

    public static function getFormasContato(){
        return self::$formasContato;
    }

    public static function isFormaContato($data){
        return in_array($data, self::$formasContato);
    }
}