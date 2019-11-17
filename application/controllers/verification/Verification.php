<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verification extends SI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->output->enable_profiler(FALSE);
        $this->load->model("account/home/Account_home_model");
        $this->load->model("Usuarios_model");


    }
    public function index(){
        $this->load->view("verification/index");
    }
    public function validate_code(){
        $datapost        = $this->input->post("data",TRUE);
        $session         = $this->session->get_userdata();
        $verify          = $this->Usuarios_model->getWhere(["email_hash"=>"{$session['verification_user']}"]);
        if(count($verify)){
            $verify = reset($verify);
        }
        $codeUser = $verify['codigo'];
        $verificationCode = $this->Account_home_model->getWhere(["codusuarios"=>$codeUser]);
        if(count($verificationCode)){
            $verificationCode = reset($verificationCode);
        }

        if($verificationCode['code_verification'] === $datapost){
            $this->response("success");
        }else{
            $error['codigov'] = "Código de verificação inválido";
            $this->response("error",compact("error"));
        }
    }



}
