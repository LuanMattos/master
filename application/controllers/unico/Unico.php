<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . "services/services.php");

use services\services;

class Unico extends UN_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $teste = new services();
        $teste->index();

    }

    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
