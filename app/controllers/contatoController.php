<?php

use core\controllerHelper;
use models\Contato;
use models\validators\Contato as ContatoValidator;
use models\Acessos;


class contatoController extends controllerHelper{
    private $Acessos;

    public function __construct(){
        $this->Acessos = new Acessos();
    }

    public function index(){
        $data = array();
        $data['baseUrl'] = $this->baseUrl();
        $this->Acessos->setAcesso();

        $this->loadView('contato', $data);
    }
    
    public function enviar(){
        $request = array();
        if(isset($_POST['data']) && !empty($_POST['data'])){
            parse_str($_POST['data'], $request);
        }

        $validator = new ContatoValidator();
        $validator->validate($request);
        $errors = $validator->getMessages();

        if(empty($errors)){
            $mContato = new Contato();

            if($mContato->salvar($request)){
                $this->response(['success' => 1]);
            }else{
                $this->response(['error' => 404]);
            }
        }else{
            $this->response(['errors' => $errors]);
        }
    }
}