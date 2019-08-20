<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_unico extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $id     = $this->input->post('id',TRUE);
        $data   = array(0=>"joao",1=>"Maria",2=>"fulano");
        $html   = $this->load->view('unico/cadastro_unico/index',NULL,TRUE);
        $this->response(compact("html","data"));

    }

    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
