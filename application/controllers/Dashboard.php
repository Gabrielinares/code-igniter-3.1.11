<?php

include(APPPATH.'controllers/Padre.php');
class Dashboard extends Padre{
    function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('dashboard');
    }
}


?>