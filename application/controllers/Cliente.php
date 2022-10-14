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

}

?>
