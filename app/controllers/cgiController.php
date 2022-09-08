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
        $templateData = array();

        $templateData['baseUrl'] = $this->baseUrl();

        $data['baseUrl'] = $this->baseUrl();
        $data['templateData'] = $templateData;
        
        $this->Acessos->setAcesso();

        $this->loadView('cgi', $data);
    }
}