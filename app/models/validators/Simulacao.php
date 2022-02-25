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
        }elseif($this->step == 3){
            $this->passoTres($data);
        }else{
            $this->passoUm($data);
            $this->passoDois($data);
            $this->passoTres($data);
        }
    }

    public function setStep($id){
        $this->step = $id;
    }

    public function getMessages(){
        return $this->messages;
    }

    public function passoUm($data){
        $this->idTipoImovel($data);
        $this->idEstadoImovel($data);
        $this->valorImovel($data);
        $this->valorFinanciamento($data);
        $this->prazoFinanciamento($data);
    }

    public function passoDois($data){
        $this->nome($data);
        $this->cpf($data);
        $this->cpfConjuge($data);
        $this->telefone($data);
        $this->email($data);
        $this->formasContato($data);
    }

    public function passoTres($data){
        $this->observacao($data);
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

    public function valorImovel($data){
        $valorImovel = isset($data['valorImovel']) ? $data['valorImovel'] : 0;

        if($valorImovel == 0){
            $this->messages['valorImovel'] = $this->emptyMessage;
        }elseif($valorImovel > 500000000){
            $this->messages['valorImovel'] = "O valor deve ser menor que R$ 500.000.000,00";
        }
    }

    public function valorFinanciamento($data){
        $valorFinanciamento = isset($data['valorFinanciamento']) ? $data['valorFinanciamento'] : 0;
        $valorImovel = isset($data['valorImovel']) ? $data['valorImovel'] : 0;

        if($valorImovel != 0){
            if($valorFinanciamento > $valorImovel){
                $this->messages['valorFinanciamento'] = "O valor do financiamento não pode ser maior que o valor do imóvel";
            }
        }elseif($valorFinanciamento == 0){
            $this->messages['valorFinanciamento'] = $this->emptyMessage;
        }
    }

    public function prazoFinanciamento($data){
        $prazoFinanciamento = isset($data['prazoFinanciamento']) ? $data['prazoFinanciamento'] : 0;

        if($prazoFinanciamento == 0 || empty($prazoFinanciamento)){
            $this->messages['prazoFinanciamento'] = $this->emptyMessage;
        }elseif($prazoFinanciamento > 500){
            $this->messages['prazoFinanciamento'] = 'O prazo não pode ser maior que 500 meses';
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

    public function observacao($data){
        $observacao = !empty($data['observacao']) ? $data['observacao'] : null;

        if (strlen($observacao) > 250) {
            $this->messages['observacao'] = "Texto muito longo (máx. 255 caracteres)";
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