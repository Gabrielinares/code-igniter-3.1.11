<?php

class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_m');
    }

    public function index(){
        $logged = $this->session->has_userdata('logged_in');
        if ($logged) {
            header("Location: ".site_url('dashboard'));
        }
        $this->load->view('v_login');
    }

    public function iniciarSesion(){
        $user = $this->input->post('txtUsuario');
        $psw = $this->input->post('txtPassword');

        $res = $this->Login_m->loginSesion($user, $psw);

        if ($res) {
            header("Location: ".site_url('dashboard'));
        } else {
            header("Location: ".site_url('login'));
        }
    }

    public function cerrarSesion(){
        $this->session->sess_destroy();
        session_write_close();
        header("Location: ".site_url('login'));
    }
}

?>
