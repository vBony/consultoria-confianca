<?php
class financiamentoController extends controllerHelper{
    public function index(){
        $data = array();
        $data['baseUrl'] = $this->baseUrl();

        $this->loadView('financiamento', $data);
    }
}

?>