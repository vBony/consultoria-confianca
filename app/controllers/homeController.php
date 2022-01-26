<?php
class homeController extends controllerHelper{
    public function index(){
        $data = array();
        $data['baseUrl'] = $this->baseUrl();

        $this->loadView('home', $data);
    }
}

?>