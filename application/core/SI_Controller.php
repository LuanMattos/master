<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SI_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();

    }
    public function menu(){
        $url = $_SERVER["REQUEST_URI"];
        $explode = explode("/",$url);
        $modulo = strtolower($explode[3]);

        return    $this->load->view('menus/menu_'. $modulo .'/menu');
    }
    //    public function paginate($configs){
//        $configs = ["per_page"=>$pe_page];
//
//
//        $config['total_rows'] = $row;
//        $config['per_page'] = $pe_page;
//
//        $this->pagination->initialize($config);
//    }


}
