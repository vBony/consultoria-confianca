<?php

namespace validators;
use models\Simulacao as ModelSimulacao;
use models\TipoImovel;
use models\Estados;

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
        }elseif($this->step == 2){
            $this->passoDois($data);
        }
    }

    public function getMessages(){
        return $this->messages;
    }

    public function passoUm($data){
        $this->idTipoImovel($data);
        $this->idEstadoImovel($data);
    }

    public function passoDois($data){
        $this->nome($data);
        $this->cpf($data);
        $this->cpfConjuge($data);
        $this->telefone($data);
        $this->email($data);
        $this->formasContato($data);
    }

    public function idTipoImovel($data){
        $idTipoImovel = !empty($data['idTipoImovel']) ? $data['idTipoImovel'] : null;

        if(!empty($idTipoImovel)){
            $this->simpleSelect($idTipoImovel, 'idTipoImovel', new TipoImovel());
        }else{
            $this->messages['idTipoImovel'] = $this->emptyMessage;
        }
    }

    public function idEstadoImovel($data){
        $idEstadoImovel = !empty($data['idEstadoImovel']) ? $data['idEstadoImovel'] : null;

        if(!empty($idEstadoImovel)){
            $this->simpleSelect($idEstadoImovel, 'idEstadoImovel', new Estados());
        }else{
            $this->messages['idEstadoImovel'] = $this->emptyMessage;
        }
    }

    public function nome($data){
        $nome = !empty($data['nome']) ? $data['nome'] : null;
        $nomeArr = array_filter(explode(' ', $nome));

        if(!empty($nome)){
            if(count($nomeArr) <= 1){
                $this->messages['nome'] = "Digite seu nome completo";
            }
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

    public function telefone($data){
        $telefone = !empty($data['telefone']) ? $data['telefone'] : null;

        if(!empty($telefone)){
            if(strlen($telefone) != 11){
                $this->messages['telefone'] = "Telefone inválido";
            }
        }else{
            $this->messages['telefone'] = $this->emptyMessage;
        }
    }

    public function email($data){
        $email = !empty($data['email']) ? $data['email'] : null;

        if(!empty($email)){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $this->messages['email'] = "E-mail inválido";
            }
        }else{
            $this->messages['email'] = $this->emptyMessage;
        }
    }

    public function formasContato($data){
        $formasContato = isset($data['formasContato']) ? $data['formasContato'] : null;

        if(!empty($formasContato)){
            foreach($formasContato as $key => $fc){
                if(!ModelSimulacao::isFormaContato($key)){
                    $this->messages['formasContato'] = 'Opção inválida';
                }
            }
        }else{
            $this->messages['formasContato'] = $this->emptyMessage;
        }
    }

    private function simpleSelect($id, $campo, $class){
        if(empty($class->getById($id))){
            $this->messages[$campo] = "Opção inválida";
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