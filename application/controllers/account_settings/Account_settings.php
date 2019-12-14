<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_settings extends SI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
        $this->load->model("location/Pais_model");
        $this->output->enable_profiler(FALSE);
        $this->load->helper("cookie");
        $this->load->helper("url");

    }

    public function index(){
        $data_s = $this->session->get_userdata();

        if(!isset($data_s['logado'])){
            $this->session->sess_destroy();
            redirect();
        }else{
            if(!empty($data_s)){
                $data = $this->Usuarios_model->getWhere(["login"=>$data_s['login']]);
                if(count($data)){
                    $dados = reset($data);
                }
                $pais   = $this->Pais_model->all();

                $this->load->view("account_settings/index",compact("dados","pais"));


            }
        }

    }
    public function get_cidade(){
        $codpais = $this->input->post("id",TRUE);

        if(!empty($codpais)):
            $data = $this->Pais_model->get_cidade_where_pais($codpais);
        endif;
        $this->response("success",compact("data"));
    }

}
