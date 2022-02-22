<?php
namespace models;

use core\modelHelper;

class Simulacao extends modelHelper{
    static private $formasContato = ['whatsapp', 'email'];

    public static function getFormasContato(){
        return self::$formasContato;
    }

    public static function isFormaContato($data){
        return in_array($data, self::$formasContato);
    }
}