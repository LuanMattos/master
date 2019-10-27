<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuarios_model");
        $this->output->enable_profiler(FALSE);
        $this->load->helper("cookie");
    }

    public function index()
    {
        error_reporting(0);
        ini_set("display_errors",0);
        session_start();

        $data_coo = $this->Usuarios_model->getWhere(["session_coo"=>$_COOKIE['session_coo']]);
//        debug($_COOKIE['ci_session']);





//        $sessao_atual = $this->session->get_userdata()['__ci_last_regenerate'];
//
//        $where      = ['__ci_last_regenerate' => $_SESSION['__ci_last_regenerate']];
//        $session_db = $this->Usuarios_model->getWhere($where);
//    debug($_SESSION);


//        if (count($session_db)) {
//            if (is_array($session_db)):
//                foreach ($session_db as $row) {
//                    if ($row['logado'] === 't') {
//                        $this->load->view('logado');
//                        return true;
//                    }
//                }
//                endif;
//            }

            $this->load->view('index');



	}
}
