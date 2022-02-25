<?php
use core\controllerHelper;
class homeController extends controllerHelper{
    public function index(){
        $data = array();
        $templateData = array();

        $templateData['baseUrl'] = $this->baseUrl();

        $data['baseUrl'] = $this->baseUrl();
        $data['templateData'] = $templateData;

        $this->loadView('home', $data);
    }
}

?>