<?php

include(APPPATH.'controllers/Padre.php');
class Usuario extends Padre{

    function __construct(){
        parent::__construct();
        //$this->load->helper('url');
    }

    public function index(){
        $data['title'] = 'System | Usuario';
        $data['nombre'] = "ITCA";
        $data['showAdmin'] = "show";
        $data["activeUsuario"] = "active";
        $this->load->view('usuario/v_usuario', $data);
    }

}

?>