<?php
class homeController extends controllerHelper{
    public function index(){
        $data = array();
        $data['nome'] = 'Vinicius';
        $data['telefone'] = '996114399';

        // Dados utilizados para mandar para o template, pois é usado o extract
        $data['template'] = $data;

        $this->loadView('home', $data);
    }
}

?>