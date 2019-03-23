<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logado extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
    }


    public function index(){


	}
	public function auth(){
        $data=$this->input->post(null);

        if(isset($data['login']) && !empty($data['login'])) {
            $usuarios=$this->Usuarios_model->get_usuario($data['login']);
                if(isset($data['senha']) && !empty($data['senha'])){
                    if($usuarios != false){
                        $this->Usuarios_model->auth($data['senha']);
                    }
                }
        }else{
            $data['error_login']="Digite o usuário";
        }


        $this->load->view('logado');
    }

}
