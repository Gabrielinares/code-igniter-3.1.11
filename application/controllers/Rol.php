<?php

include(APPPATH.'controllers/Padre.php');
class Rol extends Padre{

    function __construct(){
        parent::__construct();
        //$this->load->helper('url');
    }

    public function index(){
        $this->load->view('rol/v_rol');
    }

}

?>