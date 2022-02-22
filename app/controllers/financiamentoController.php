<?php
use core\controllerHelper;
use validators\Simulacao as SimulacaoValidator;
use models\Estados;
use models\TipoImovel;
class financiamentoController extends controllerHelper{
    public function index(){
        $data = array();
        $data['baseUrl'] = $this->baseUrl();
        $data['listas'] = $this->getListas();

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

        if(empty($errors)){
            if($request['step'] == 1){
                $this->setStep1($request);
            }
        }else{
            $this->response(['errors' => $errors]);
        }
    }

    public function setStep1($data){
        
    }

    private function getListas(){
        return [
            'estados' => Estados::get(),
            'tipoImovel' => TipoImovel::get()
        ];
    }
}

?>