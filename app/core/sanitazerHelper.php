<?php
namespace core;

class sanitazerHelper {
    public static function nomeCompleto($name){
        return ucwords(strtolower($name));
    }

    public static function email($email){
        return strtolower($email);
    }

    public static function text($observacao){
        return strip_tags($observacao);
    }

    public static function array($array){
        return json_encode($array);
    }
}