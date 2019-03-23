<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


	public function login($usuario,$senha){
        $results = FALSE ;
        $query = $this->db->get_where('usuarios',array('usuario'=>$usuario,'senha'=>$senha));
        if($query->num_rows() > 0 )
        {

            $results = $query->result_array();
        }
    return $results;



    }
    public function setDados($usuario,$senha){

	    $data=array(
	        'usuario'=>$usuario,
            'senha'=>$senha
        );
	    $this->db->insert("usuarios",$data);

    }
}
