<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logado extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
    }


    public function index(){


<<<<<<< HEAD
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

=======

       $this->load->view('logado');

	}
	public function acao_salvar(){
        $data=$this->input->post(null);

        if(!empty($data['login']) || !empty($data['senha'])){
            $this->Usuarios_model->setDados($data['login'],$data['senha']);

        }
        $data['error_senha']="Senha Inválida";
        $this->load->view('index',$data);

    }
>>>>>>> f21574b377439b36c57f78b06312354c39fc1f7b
}
