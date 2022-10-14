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
}
