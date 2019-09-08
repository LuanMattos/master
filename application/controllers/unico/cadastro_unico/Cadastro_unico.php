<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Cadastro_unico extends CI_Controller{

    public function __construct(){
        parent::__construct();

    }

    public function index(){
        $datapost = $this->input->post(NULL,TRUE);
        debug_x($datapost);

        $html   = $this->load->view('unico/cadastro_unico/index',NULL,TRUE);
        $this->response(compact("html"));


    }
    public function buscar(){
        $datapost = $this->input->post("search",TRUE);
        debug($datapost);
        if(isset($datapost->search)){
            debug($datapost->search);
        }
    }

    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
