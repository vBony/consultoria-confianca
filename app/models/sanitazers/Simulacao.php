<?php

namespace sanitazers;

class Simulacao{
    public static function name($name){
        return ucwords(strtolower($name));
    }

    public static function email($email){
        return strtolower($email);
    }

    public static function formasContato($formasContato){
        return json_encode($formasContato);
    }

    public static function observacao($observacao){
        return strip_tags($observacao);
    }
}