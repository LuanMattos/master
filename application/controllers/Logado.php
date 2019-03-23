<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logado extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
    }


    public function index(){



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
}
