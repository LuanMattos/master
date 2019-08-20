<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SI_Controller extends CI_Controller{

    private static $instance;

    public function __construct(){
        parent::__construct();
        self::$instance =& $this;
        $this->menu();

    }

    public function menu(){
        return    $this->load->view('menus/menu_unico/menu');
    }


}
