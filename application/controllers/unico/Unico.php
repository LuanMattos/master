<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unico extends SI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('unico/unico');

    }

    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
