<?php

include(APPPATH.'controllers/Padre.php');
class Categoria extends Padre{

    function __construct(){
        parent::__construct();
        //$this->load->helper('url');
    }

    public function index(){
        $data['title'] = 'System | Categoria';
        $data['nombre'] = "ITCA";
        $data['showAdmin'] = "show";
        $data["activeCategoria"] = "active";
        $this->load->view('categoria/v_categoria', $data);
    }

}

?>