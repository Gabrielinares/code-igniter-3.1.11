<?php

class Usuario_m extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	//Extrae todos los usuarios
	public function get_Usuarios(){
		$this->db->select('*');
		$this->db->from('usuario');
		$query = $this->db->get();

		return $query->result();
	}

	public function get_Rol(){
		$this->db->select('id, nombre');
		$this->db->from('rol');
		$query = $this->db->get();

		return $query->result();
	}

	//Extrae registros por un id
	public function get_by_id($id){
		$this->db->from('usuario');
		$this->db->where('id', $id);
		$query = $this->db->get();

		return $query->row();
	}

	//Inserta registros en la tabla
	public function insert_usuario($data){ //Recibe un array
		$this->db->insert('usuario', $data);

		return $this->db->insert_id();
	}

	//Editar registro de la tabla
	public function edit_usuario($where, $data){
		$this->db->update('usuario', $data , $where);

		return $this->db->affected_rows();
	}

	//Eliminar registro de la tabla
	public function delete_by_id($id){
		$this->db->where('id', $id);
		$this->db->delete('usuario');
	}
}
