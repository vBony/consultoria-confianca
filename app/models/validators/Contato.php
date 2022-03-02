<?php
namespace models\validators;

use core\validatorHelper;
use models\Simulacao as ModelSimulacao;
use models\Contato as ContatoModel;

class Contato extends validatorHelper{
    public $messages = [];

    public function validate($data){
        $this->nome($data);
        $this->email($data);
        $this->telefone($data);
        $this->mensagem($data);
        $this->formasContato($data);
    }

    public function getMessages(){
        return $this->messages;
    }

    public function nome($data){
        $nome = parent::extractData('nome', $data);

        if($this->isEmpty($nome)){
            $this->messages['nome'] = $this->emptyMessage;
        }else{
            if(!$this->nomeCompleto($nome)){
                $this->messages['nome'] = parent::invalidMessage('nome');
            }
        }
    }

    public function email($data){
        $email = parent::extractData('email', $data);

        if($this->isEmpty($email)){
            $this->messages['email'] = $this->emptyMessage;
        }else{
            if(!parent::email($email)){
                $this->messages['email'] = parent::invalidMessage('email');
            }
        }
    }

    public function telefone($data){
        $telefone = parent::extractData('telefone', $data);

        if($this->isEmpty($telefone)){
            $this->messages['telefone'] = $this->emptyMessage;
        }else{
            if(!parent::telefone($telefone)){
                $this->messages['telefone'] = parent::invalidMessage('telefone');
            }
        }
    }

    public function mensagem($data){
        $mensagem = parent::extractData('mensagem', $data);
        $tamanho = 255;

        if($this->isEmpty($mensagem)){
            $this->messages['mensagem'] = $this->emptyMessage;
        }else{
            if(!parent::texto($mensagem, 255)){
                $this->messages['observacao'] = "Texto muito longo (máx. $tamanho caracteres)";
            }
        }
    }

    public function formasContato($data){
        $formasContato = isset($data['formasContato']) ? $data['formasContato'] : null;

        if(!empty($formasContato)){
            foreach($formasContato as $key => $fc){
                if(!ContatoModel::isFormaContato($key)){
                    $this->messages['formasContato'] = 'Opção inválida';
                }
            }
        }else{
            $this->messages['formasContato'] = $this->emptyMessage;
        }
    }
}