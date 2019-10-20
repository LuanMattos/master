<?php


namespace database\start_ddl;
require "vendor/autoload.php";
//defined('BASEPATH') OR exit('No direct script access allowed ');
use database\ddl as teste;


class start_ddl extends  \CI_Controller
{
    public function __construct(){
        $this->start();

    }
    public function start(){

        $teste = new teste\ddl();
        $teste->index();
    }

}

