<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logado extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
    }
    public function index(){
        $data=$this->input->post(null);
        $user=$this->Usuarios_model->login($data['login']);

        if(!empty($user)){
            foreach ($user as $line){
                if($line['senha'] === $data['senha']) {
                    $this->load->view('logado');
                }
            }
        }else{
            $data['error_senha'] = "Usuário/senha incorreto(s)";
            $this->load->view('index',$data);
        }






	}
	public function cadastrar(){

    }

}
