<?php

include(APPPATH.'controllers/Padre.php');
class Usuario extends Padre{

    function __construct(){
        parent::__construct();
		$this->load->model('Usuario_m');
        //$this->load->helper('url');
    }

    public function index(){
        $data['title'] = 'System | Usuario';
        $data['nombre'] = "ITCA";
        $data['showAdmin'] = "show";
        $data["activeUsuario"] = "active";
		$data['usuarios'] = $this->Usuario_m->get_Usuarios();
		$this->load->view('usuario/v_usuario', $data);
    }

	public function loadFormAdd(){
		$data['rol'] = $this->Usuario_m->get_Rol();
		$this->load->view('usuario/addUsuario', $data);
	}

	public function loadFormEdit($id){
		$data['id'] = $id;
		$data['rol'] = $this->Usuario_m->get_Rol();
		$this->load->view('usuario/editUsuario', $data);
	}
}

?>
