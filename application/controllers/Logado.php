<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logado extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
        $this->output->enable_profiler(FALSE);
    }
    public function index(){
//        $data = $this->input->post(null);
//        $user = $this->Usuarios_model->login($data['login']);
//
//        if (!empty($data) && !empty($user)) {
//            foreach ($user as $line) {
//            }
//            if ($line['usuario'] === $data['login']) {
//                if (password_verify($data['senha'], $line['senha']) == true) {
////                    $cry_user = password_hash($line['usuario'], PASSWORD_DEFAULT);//criptografa a sessão
//                    $this->session->set_userdata($line['usuario'], 1);
//                    $this->load->view('logado');
//                } else {
//                    $data['error_senha'] = "Usuário/senha incorreto(s)";
//                    $this->load->view('index', $data);
//                }
//            } else {
//                $data['error_senha'] = "Usuário/senha incorreto(s)";
//                $this->load->view('index', $data);
//            }
//        } else {
//            $data['error_senha'] = "Usuário/senha incorreto(s)";
//            $this->load->view('index', $data);
//        }




//        $data = array("teste","teste");
//        $this->save($validate,$data);
        date_to_br()
        $data = array('usuario'=>'23423','senha'=>'fdsf');
        $this->Usuarios_model->form_validate($data);
//teste
    }


    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
