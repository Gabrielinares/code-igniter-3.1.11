<?php

function get_rolName($idRol){
	$CI = & get_instance(); //Capturar conexion a la db
	$sql = 'SELECT nombre FROM rol WHERE id = ' . $idRol;
	$nombre = $CI->db->query($sql)->row();

	return $nombre->nombre;
}
function get_password($idUser)
{

	$CI = & get_instance();//capturar conexion a la base de datos
	$query = "SELECT u.password FROM usuario AS u WHERE id=". $idUser;
	$nombre = $CI->db->query($query)->row();

	return $nombre->password;
}
