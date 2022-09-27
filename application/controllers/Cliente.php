<?php

include(APPPATH.'controllers/Padre.php');
class Cliente extends Padre{

    function __construct(){
        parent::__construct();
        //$this->load->helper('url');
    }

    public function index(){
        $data['title'] = 'System | Clientes';
        $data['nombre'] = "ITCA";
        //Clases para menu 
        $data['showAdmin'] = "show";
        $data["activeCliente"] = "active";
        //Fin elementos
        $this->load->view('cliente/v_cliente', $data);
    }

}

?>