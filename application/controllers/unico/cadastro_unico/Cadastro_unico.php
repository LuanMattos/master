<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Cadastro_unico extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("unificado/Un_cadastro_unificado_model");

    }

    public function index(){
        $datapost = $this->input->post(NULL,TRUE);

        $data = $this->Un_cadastro_unificado_model->getwhere(NULL,"array","codigo","ASC");

        $html   = $this->load->view('unico/cadastro_unico/index',NULL,TRUE);
        $this->response(compact("html","data"));
    }
    public function salvar(){

        $html   = $this->load->view('unico/cadastro_unico/form',NULL,TRUE);
        $this->response(compact("html"));
    }
    public function buscar(){
        $datapost = $this->input->post("search",TRUE);
        debug($datapost);
        if(isset($datapost->search)){
            debug($datapost->search);
        }
    }
    public function excluir(){
        $codigo = reset(func_get_args());
        $where = ['codigo'=>$codigo];
        $this->Un_cadastro_unificado_model->deletewhere($where);
    }

    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
