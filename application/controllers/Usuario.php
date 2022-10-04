<?php

include(APPPATH.'controllers/Padre.php');
class Usuario extends Padre{

    function __construct(){
        parent::__construct();
		$this->load->model('Usuario_m');
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
		//$data['id'] = $id;
		$data['rol'] = $this->Usuario_m->get_Rol();
		$data['user'] = $this->Usuario_m->get_by_id($id);
		$this->load->view('usuario/editUsuario', $data);
	}

	public function get_table()
	{
		$table = "";
		$users = $this->Usuario_m->get_usuarios();

		foreach ($users as $row) {
			$table .= '<tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->username.'</td>
                        <td>'.get_rolName($row->rol_id).'</td>
                        <td>';
			$texto = "Inactivo";
			if ($row->estado == 1) {
				$texto = "Activo";
			}
			$table .=     $texto.'</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target=".bd-example-modal-lg" class="btn btn-info btnEditar" data-id="'.$row->id.'">
                            <i class="fas fa-edit"></i>
                          </button>
                          <button type="button" class="btn btn-danger btnEliminar" data-id="'.$row->id.'">
                            <i class="fas fa-trash"></i>
                          </button>
                        </td>
                      </tr>';
		}

		echo json_encode(array('tabla' => $table));
	}

	public function guardarRegistro(){
		$pasw = sha1($this->input->post('txtPass'));
		$datos = array(
			'username' => $this->input->post('txtUsuario'),
			'password' => $pasw,
			'salt' => $pasw,
			'estado' => 1,
			'rol_id' => $this->input->post('txtRol')
		);
		$insert = $this->Usuario_m->insert_usuario($datos);

		$data = array('msj' => 'Usuario registrado');

		echo json_encode($data);
	}

	public function actualizarRegistro(){
		$oldPassword = get_password($this->input->post('txtId'));
		if ($this->input->post('txtPass') == $oldPassword) {
			$psw = $oldPassword;
		}else{
			$psw = sha1($this->input->post('txtPass'));
		}

		$datos = array('username' => $this->input->post('txtUsuario'),
			'password' => $psw,
			'salt' => $psw,
			'rol_id' => $this->input->post('txtRol')
		);

		$where = array('id' => $this->input->post('txtId'));

		$affected = $this->Usuario_m->edit_usuario($where, $datos);

		$data = array('msj' => "Registrado Actualizado");
		echo json_encode($data);
	}

	public function eliminarRegistro(){

	}
}

?>
