<?php

use core\controllerHelper;
use models\Contato;
use models\validators\Contato as ContatoValidator;
use models\Acessos;


class cgiController extends controllerHelper{
    private $Acessos;

    public function __construct(){
        $this->Acessos = new Acessos();
    }

    public function index(){
        $data = array();
        $data['baseUrl'] = $this->baseUrl();
        $this->Acessos->setAcesso();

        $this->loadView('cgi', $data);
    }
}