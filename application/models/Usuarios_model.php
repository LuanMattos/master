<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


	public function get_usuario($usuario){

        $query = $this->db->get_where('usuarios',array('usuario'=>$usuario));
        if($query->num_rows() > 0){
         return   $results = $query->result_array();
        }else{
            return false;
        }


    }
    public function auth($pass){

	    $query = $this->db->create_query("select * from usuarios where senha = $pass");
	    return $query->result_array();
    }
    
}
