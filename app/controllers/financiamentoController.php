<?php
use core\controllerHelper;
use validators\Simulacao as SimulacaoValidator;
class financiamentoController extends controllerHelper{
    public function index(){
        $data = array();
        $data['baseUrl'] = $this->baseUrl();

        $this->loadView('financiamento', $data);
    }

    public function enviar(){
        $data = array();
        $data['baseUrl'] = $this->baseUrl();

        $request = array();
        parse_str($_POST['data'], $request);
        $request['step'] = $_POST['step'];

        $validator = new SimulacaoValidator($request['step']);
        $validator->validate($request);
        $errors = $validator->getMessages();

        if(!empty($errors)){
            $this->response(['errors' => $errors]);
        }
    }
}

?>