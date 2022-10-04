<?php
/**
 *  @autor: Gabriel
 *  @fecha: 19/09/2022
 */

class Login_m extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function getLogin($user, $psw){
        $pass = sha1($psw); //encriptado de contrasenia
        $this->db->select('COUNT(u.id) AS login, u.id ,u.username, r.nombre');
        $this->db->from('usuario u');
        $this->db->join('rol r', 'u.rol_id = r.id');
        $this->db->where('u.username', $user);
        $this->db->where('u.password', $pass);
        $this->db->group_by(array('u.id'));

        $query = $this->db->get(); //ejecuta query
        return $query->row();
    }

    public function arraySesion($objResult){
        $datasesion = array(
            'id' => $objResult->id,
            'username' => $objResult->username,
            'rol' => $objResult->nombre,
            'logged_in' => TRUE
        );

        return $datasesion;
    }

    public function loginSesion($user, $psw){
        $status = FALSE;
        $objResult = $this->getLogin($user, $psw);
        if ($objResult != null) {
            if ($objResult->login == 1) {
                $status = TRUE;
            }
        }
        else {
            $status = FALSE;
        }

        if ($status == TRUE) {
            $arraySesion = $this->arraySesion($objResult);
            $this->session->set_userdata($arraySesion);
        }
            
        return $status;
    }
}
