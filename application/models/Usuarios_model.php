<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


	public function login($usuario){
        $results = FALSE;
        $user = $this->db->get_where('usuarios',array('usuario'=>$usuario));
        if($user->num_rows() > 0 ){

            $results = $user->result_array();
        }
    return  $results;

    }
}
