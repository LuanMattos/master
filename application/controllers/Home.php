<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends SI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuarios_model");
        $this->output->enable_profiler(FALSE);
        $this->load->helper("cookie");

    }

    public function index(){
        $data       = $this->input->post(NULL, TRUE);

        error_reporting(0);
        ini_set("display_errors",0);

        session_start();

        $_SESSION['validate_login'] = $_SESSION['validate_login'] +1;
        $attempt                    = $_SESSION['validate_login'];
        $sessao_atual               = $this->session->get_userdata()['__ci_last_regenerate'];

        $where          = ['__ci_last_regenerate'=>$sessao_atual];
        $session_db     = $this->Usuarios_model->getWhere($where);

        if(count($session_db)){
            if(is_array($session_db)):
                foreach($session_db as $row){

                    if($row['logado'] === 'f'){
                        $this->session->sess_destroy();
                        redirect();
                    }elseif($row['logado'] === 't'){
                        redirect("Home/Logged");
                    }
                }
            endif;

        }

        if (!empty($data['login']) && !empty($data['senha'])) {
            $user = $this->Usuarios_model->login($data['login']);
        } else {
            $data['error_senha'] = "Usuário/senha incorreto(s) ";

            if($attempt > 1){
                $data['error_senha'] .= " <p style='color:white'><a href='#'>esqueceu credenciais?</a></p>";
            }
            if($attempt > 12){
                $data['error_senha'] = "Acesso bloqueado por 30 minutos! tente novamente mais tarde ou <a href='#' class='text-white'>redefina suas credenciais</a></p>";
                $this->session->sess_destroy();
            }

            $this->load->view('index', $data);
            return true;
        }

//        var_dump(password_hash("admin", PASSWORD_DEFAULT));//criptografa a sessão
        if (!empty($data) && !empty($user)) {
            foreach ($user as $line) {

                if ($line['login'] === $data['login']) {
                    if (password_verify($data['senha'], $line['senha']) == true) {
                        $this->session->set_userdata($line['login'], 1);

                        if(isset($data['conectado'])){
                            set_cookie("session_coo",$sessao_atual,PHP_INT_MAX);
                            $data = [
                                "codigo"=>$line['codigo'],
                                "__ci_last_regenerate"=>$sessao_atual,
                                "logado"=>"t",
                                'session_coo'=>$_COOKIE['ci_session']

                            ];

                        }else{
                            $data = [
                                "codigo"=>$line['codigo'],
                                "__ci_last_regenerate"=>$sessao_atual,
                                "logado"=>"f",
                                'session_coo'=>''

                            ];
                        }
                        $this->Usuarios_model->save($data);
                        redirect("Home/Logged");

                    } else {

                        $this->session->sess_destroy();
                        $data['error_senha'] = "Usuário/senha incorreto(s)";
                        $this->load->view('index', $data);
                    }
                } else {

                    $this->session->sess_destroy();
                    $data['error_senha'] = "Usuário/senha incorreto(s)";
                    $this->load->view('index', $data);
                }
            }
        } else {
            $this->session->sess_destroy();
            $data['error_senha'] = "Usuário/senha incorreto(s)";
            $this->load->view('index', $data);
        }

    }
    public function logged(){
//        $sms = new ServiceSms\ServiceSms();

        $this->load->view('home');

    }
    public function cadastro(){
        $data   = (object)$this->input->post("data",TRUE);
        $error  = [];

        if(!filter_var($data->email, FILTER_VALIDATE_EMAIL)){
            $error['email'] = "E-mail inválido!";
        }

        if(empty($data->email)){
            $error['email'] = " Preencha o campo e-mail!";
        }
        if(empty($data->senhacadastro)){
            $error['senhacadastro'] = "Preencha o campo senha!!";
        }
        if(empty($data->repsenha)){
            $error['repsenha'] = "Preencha o campo senha!";
        }
        if(empty($data->datanasc)){
            $error['datanasc'] = "Preencha o campo data nascimento!";
        }
        if(empty($data->telcel)){
            $error['telcel'] = "Preencha o campo  telefone!";
        }
        if(!empty($data->senhacadastro)){
            if(strlen($data->senhacadastro) < 8){
                $error['senhacadastro'] = "Senha com no mínimo 8 caracteres!";
            }
        }
        if(!empty($data->repsenha)){
            if(strlen($data->repsenha) < 8){
                $error['repsenha'] = "Senha com no mínimo 8 caracteres!";
            }
        }

        if($data->senhacadastro !== $data->repsenha){
             $error['igualdadepass'] = "As senhas não correspondem!";
            $this->response("success",compact("error"));
        }
        $validate_login = $this->Usuarios_model->getwhere(["login"=>$data->email]);

        if(count($validate_login)){
            $validate_login         = reset($validate_login);
            $error['email']         = "Usuário " . $validate_login['login'] ." já está cadastrado!";
        }
        $validate_tel = $this->Usuarios_model->getwhere(["telcel"=>$data->telcel]);

        if(count($validate_tel)){
            $validate_tel           = reset($validate_tel);
            $error['telcel']         = "Telefone " . $validate_tel['telcel'] ." já está cadastrado!";
        }

        if(count($error) > 0){

            $this->response("success",compact("error"));
        }
        $argo_pass = password_hash($data->senhacadastro,PASSWORD_ARGON2I);

        $data = [
            "email"     =>$data->email,
            "login"     =>$data->email,
            "senha"     =>$argo_pass,
            "datanasc"  =>$data->datanasc,
            "telcel"    =>"{$data->telcel}"
        ];


        $this->Usuarios_model->save($data);

    }


    public function logout()
    {
        $sessao_atual       = $this->session->get_userdata()['__ci_last_regenerate'];

        $where              = ['__ci_last_regenerate'=>$sessao_atual];
        $data               = $this->Usuarios_model->getWhere($where);

        if(is_array($data)){

            foreach($data as $user){
                $new_data = [
                    "codigo"                =>$user['codigo'],
                    "__ci_last_regenerate"  =>null,
                    "logado"                =>'f',
                    "session_coo"           =>''
                ];
                $this->Usuarios_model->save($new_data);
            }


        }


        $this->session->sess_destroy();
        redirect();
    }

}
