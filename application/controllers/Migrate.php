<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
require "application/database/start_ddl.php";

class Migrate extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index()
    {

        $this->load->library('migration');
        if ($this->migration->current())
        {
            echo "Migração bem sucedida!";
        }else{
            show_error($this->migration->error_string());

        }
    }

}
