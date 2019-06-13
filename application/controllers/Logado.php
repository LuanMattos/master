<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logado extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("Usuarios_model");
        $this->output->enable_profiler(FALSE);
    }
    public function index(){
        $data = $this->input->post(NULL,TRUE);
        $user = $this->Usuarios_model->login($data['login']);
//        var_dump(password_hash("k2l9g3v1", PASSWORD_DEFAULT));//criptografa a sessão
        if (!empty($data) && !empty($user)) {
            foreach ($user as $line) {}
            if ($line['usuario'] === $data['login']) {
                if (password_verify($data['senha'], $line['senha']) == true) {
                    $this->session->set_userdata($line['usuario'], 1);
                    $this->load->view('logado');
                } else {
                    $data['error_senha'] = "Usuário/senha incorreto(s)";
                    $this->load->view('index', $data);
                }
            } else {
                $data['error_senha'] = "Usuário/senha incorreto(s)";
                $this->load->view('index', $data);
            }
        } else {
            $data['error_senha'] = "Usuário/senha incorreto(s)";
            $this->load->view('index', $data);
        }

    }


    public function logout(){
        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
