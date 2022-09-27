<?php

include(APPPATH.'controllers/Padre.php');
class Producto extends Padre{

    function __construct(){
        parent::__construct();
        //$this->load->helper('url');
    }

    public function index(){
        $data['title'] = 'System | Producto';
        $data['nombre'] = "ITCA";
        $data['showAdmin'] = "show";
        $data["activeProducto"] = "active";
        $this->load->view('producto/v_producto', $data);
    }

}

?>