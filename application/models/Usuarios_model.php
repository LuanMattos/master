<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {


<<<<<<< HEAD
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
    
=======
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
>>>>>>> f21574b377439b36c57f78b06312354c39fc1f7b
}
