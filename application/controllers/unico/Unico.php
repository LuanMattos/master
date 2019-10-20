<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Unico extends UN_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
    }

    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
