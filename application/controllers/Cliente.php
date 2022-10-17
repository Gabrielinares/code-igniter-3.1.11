<?php

include(APPPATH.'controllers/Padre.php');
class Cliente extends Padre{

    function __construct(){
        parent::__construct();
		$this->load->model('Cliente_m');
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

	public function get_table()
	{
		$table = "";
		$users = $this->Cliente_m->get_Clientes();

		foreach ($users as $row) {
			$table .= '<tr>
                        <td>'.$row->id.'</td>
                        <td>'.$row->nombres.'</td>
                        <td>'.$row->apellidos.'</td>
                        <td>'.$row->direccion.'</td>
						<td>'.$row->telefono.'</td>
						<td>'.$row->email.'</td>
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
                          <button type="submit" class="btn btn-danger btnEliminar" data-id="'.$row->id.'">
                            <i class="fas fa-trash"></i>
                          </button>
                        </td>
                      </tr>';
		}

		echo json_encode(array('tabla' => $table));
	}

  public function loadFormAdd(){
    $this->load->view('cliente/addCliente');
  }

  /*Eliminar Cliente*/
  public function eliminarRegistro(){
		$id = $this->input->post("idUser");
	$this->Cliente_m->delete_by_id($id);
		$data = array('mensaje' => "El registro fue eliminado");
		echo json_encode($data);
	}

  public function loadFormEdit($id){
    $data['cliente'] = $this->Cliente_m->get_by_id($id);
    $this->load->view('cliente/editCliente', $data);
  }



public function actualizarRegistro(){
    //Aplicar los campos del cliente siguiendo la logica de el array
    $datos = array('nombres' => $this->input->post('nombres'),
      'apellidos' => $this->input->post('apellidos'),
      'direccion' => $this->input->post('direccion'),
      'telefono' => $this->input->post('telefono'),
      'email' => $this->input->post('email'),
      'estado' => $this->input->post('estado')
    );

    $where = array('id' => $this->input->post('id'));

    $affected = $this->Cliente_m->edit_Clientes($where, $datos);

    $data = array('msj' => "Registro Actualizado");
    echo json_encode($data);
  }

public function agregarRegistro(){
    //Aplicar los campos del cliente siguiendo la logica de el array
    $datos = array('nombres' => $this->input->post('nombres'),
      'apellidos' => $this->input->post('apellidos'),
      'direccion' => $this->input->post('direccion'),
      'telefono' => $this->input->post('telefono'),
      'email' => $this->input->post('email'),
      'estado' => $this->input->post('estado')
    );

    $affected = $this->Cliente_m->insert_cliente($datos);

    $data = array('msj' => "Registro agregado");
    echo json_encode($data);
  }



  

}

?>
