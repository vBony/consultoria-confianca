<?php
use core\controllerHelper;
use models\Acessos;
class notFoundController extends controllerHelper{
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

        $this->loadView('not-found', $data);
    }
}

?>