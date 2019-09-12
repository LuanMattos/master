<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Cadastro_unico extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("unificado/Un_cadastro_unificado_model");

    }

    public function index(){
        $datapost = $this->input->post(NULL,TRUE);
        $data = [
            "codigo"=> 16,
            "nome"=>"Lula da silva",
            "email"=>"companheiro@preso.com.br",
            "rg"=>"3472374237463287"
        ];
        $this->Un_cadastro_unificado_model->save($data);

//        if(!$teste){
//            $error = $this->Un_cadastro_unificado_model->get
//        }


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
