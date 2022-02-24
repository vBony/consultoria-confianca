<?php
use core\controllerHelper;
use validators\Simulacao as SimulacaoValidator;
use models\Estados;
use models\Simulacao;
use models\TipoImovel;
use models\IpGeoLocation;
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

        if($_POST['step'] != 3){
            parse_str($_POST['data'], $request);
        }else{  
            $request['observacao'] = $_POST['data'];
        }

        $request['step'] = $_POST['step'];

        
        $validator = new SimulacaoValidator($request['step']);
        $validator->validate($request);
        $errors = $validator->getMessages();

        if(empty($errors)){
            if($request['step'] == 1){
                $this->setStep1($request);
                $this->response(['success' => 1]);
            }elseif($request['step'] == 2){
                $this->setStep2($request);
                $this->response(['success' => 1]);
            }elseif($request['step'] == 3){
                $this->setStep3($request);
                
                // Juntando todos os passos
                $simulacao = $this->montaSimulacao($_SESSION['simulacao']);

                if(is_int($simulacao)){
                    $this->response(['error' => $simulacao]);
                    exit;
                }


                // Validando todos os passos juntos
                $validator->setStep(null);
                $validator->validate($simulacao);
                $errors = $validator->getMessages();

                if(!empty($errors)){
                    $this->response(['error' => $errors]);
                    exit;
                }else{
                    $mSimulacao = new Simulacao();

                    if($mSimulacao->salvar($simulacao)){
                        $this->response(['success' => 1]);
                    }else{
                        $this->response(['error' => 404]);
                    }
                }
            }
        }else{
            $this->response(['errors' => $errors]);
        }
    }

    public function montaSimulacao($steps){
        $simulacao = array();

        if(isset($steps['step1']) && !empty($steps['step1'])){
            foreach($steps['step1'] as $key => $value){
                $simulacao[$key] = $value;
            }
        }else{
            return 1;
        }

        if(isset($steps['step2']) && !empty($steps['step2'])){
            foreach($steps['step2'] as $key => $value){
                $simulacao[$key] = $value;
            }
        }else{
            return 2;
        }

        if(isset($steps['step3']) && !empty($steps['step3'])){
            foreach($steps['step3'] as $key => $value){
                $simulacao[$key] = $value;
            }
        }else{
            return 3;
        }

        return $simulacao;
    }

    public function setStep1($data){
        $_SESSION['simulacao']['step1'] = $data;
    }

    
    public function setStep2($data){
        $_SESSION['simulacao']['step2'] = $data;
    }

    public function setStep3($data){
        $_SESSION['simulacao']['step3'] = $data;
    }

    private function getListas(){
        return [
            'estados' => Estados::get(),
            'tipoImovel' => TipoImovel::get()
        ];
    }
}

?>