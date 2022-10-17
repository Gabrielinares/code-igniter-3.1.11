<?php

class Cliente_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	//Extrae todos los usuarios
	public function get_Clientes(){
		$this->db->select('*');
		$this->db->from('cliente');
		$query = $this->db->get();

		return $query->result();
	}

	public function get_by_id($id){
		$this->db->from('cliente');
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query->row();
		var_dump($query->row());
	}

	//Inserta registros en la tabla
	public function insert_cliente($data){ //Recibe un array
		$this->db->insert('cliente', $data);

		return $this->db->insert_id();
	}

	//Editar registro de la tabla
	public function edit_Clientes($where, $data){
		$this->db->update('cliente', $data , $where);

		return $this->db->affected_rows();
	}

	/*Eliminar Cliente*/
	
	public function delete_by_id($id){
		$this->db->where('id', $id);
		$this->db->delete('cliente');
	}
}
