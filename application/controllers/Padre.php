<?php

class Padre extends CI_Controller
{
    function __construct()
    {
        parent::__construct(); 
        if ($this->session){
            $logged = $this->session->has_userdata('logged_in');
            if ($logged == false) { //Si la sesion no existe no puede usar controllers
                header("Location: ".site_url('login'));
            }
        } else {
            header("Location: ".site_url('login'));
        }
    }


}


?>