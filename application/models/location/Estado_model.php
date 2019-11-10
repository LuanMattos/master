<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estado_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->set_table_index("id");
        $this->set_table("estado");
    }



}
