<?php

namespace core;

class validatorHelper {
    public $emptyMessage = 'Campo obrigatório';

    public function isEmpty($data){
        if(empty($data)){
            return true;
        }else{
            return false;
        }
    }

    public static function extractData($name, $data){
        if(!empty($data[$name])){
            return $data[$name];
        }else{
            return null;
        }
    }

    public static function invalidMessage($attribute, $feminino = false, $plural = false){
        if($feminino){
            if($plural){
                return $attribute . ' inválidas';
            }

            return $attribute . ' inválida';
        }else{
            if($plural){
                return $attribute . ' inválidos';
            }

            return $attribute . ' inválido';
        }
    }

    public function nomeCompleto($nome){
        $nomeArr = array_filter(explode(' ', $nome));

        if(strlen($nome) > 150){
            return false;
        }

        if(count($nomeArr) <= 1){
            return false;
        }

        return true;
    }

    public function email($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }

        if(strlen($email) > 150){
            return false;
        }

        return true;
    }

    public function telefone($telefone){
        if(strlen($telefone) != 11){
            return false;
        }

        if(strlen($telefone) > 30){
            return false;
        }

        return true;
    }

    public function texto($texto, $tamanho){
        if (strlen($texto) > $tamanho) {
            return false;
        }

        return true;
    }
}