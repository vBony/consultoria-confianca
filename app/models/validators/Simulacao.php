<?php

namespace validators;

class Simulacao {
    public $messages = [];
    private $emptyMessage = 'Campo obrigatório';
    private $step = 0;

    public function __construct($step = null)
    {
        $this->step = $step;
    }

    public function validate($data){
        if($this->step == 1){
            $this->passoUm($data);
        }
    }

    public function getMessages(){
        return $this->messages;
    }

    public function passoUm($data){
        $this->nome($data);
        $this->cpf($data);
        $this->cpfConjuge($data);
    }

    public function nome($data){
        $nome = !empty($data['nome']) ? $data['nome'] : null;
        $nomeArr = array_filter(explode(' ', $nome));

        echo '<pre>'; 
        print_r($nomeArr);
        echo '<pre>'; 
        exit;

        if(!empty($nome)){

        }else{
            $this->messages['nome'] = $this->emptyMessage;
        }
    }

    public function cpf($data){
        $cpf = !empty($data['cpf']) ? $data['cpf'] : null;

        if(!empty($cpf)){
            $validacao = $this->validaCpf($cpf);

            if($validacao !== true){
                $this->messages['cpf'] = $validacao;
            }
        }
    }

    public function cpfConjuge($data){
        $cpfConjuge = !empty($data['cpfConjuge']) ? $data['cpfConjuge'] : null;
        $cpf = !empty($data['cpf']) ? $data['cpf'] : null;

        if(!empty($cpfConjuge)){
            $validacao = $this->validaCpf($cpfConjuge);

            if($validacao !== true){
                $this->messages['cpfConjuge'] = $validacao;
            }else{
                if($cpf == $cpfConjuge){
                    $this->messages['cpfConjuge'] = 'Informe um CPF diferente do seu';
                }
            }
        }
    }

    public function validaCpf($cpf) {         
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return 'CPF incompleto';
        }
    
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return 'CPF inválido';
        }
    
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return 'CPF inválido';
            }
        }
        
        return true;
    }
}