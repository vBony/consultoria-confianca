<?php
namespace core;
class controllerHelper{
    public function loadView($viewName, $viewData = array(), $show_header = true){
        extract($viewData);

        require 'app/views/'.$viewName.'.php';
    }

    public function loadTemplate($viewData = array(), $noHomeMenu = false){
        $viewData['noHomeMenu'] = $noHomeMenu;
        extract ($viewData);
        require 'app/views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array(), $noHomeMenu = false){
        $viewData['noHomeMenu'] = $noHomeMenu;
        extract($viewData);
        require 'app/views/'.$viewName.'.php';
    }

    public function baseUrl(){
        return $_ENV['BASE_URL'];
    }

    public function response($data){
        echo json_encode($data);
    }
}

?>