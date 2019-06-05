<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public $usuarios   = array(
                             'usuario'=>array('nome'=>'Nome de usuário','type'=>'VARCHAR','required'=>false,'maxlength'=>500),
                             'senha'=>array('nome'=>'Senha','type'=>'VARCHAR','required'=>true,'maxlength'=>500,'minglength'=>8)
                            );

    public function __construct(){
        parent::__construct();
    }
    public function login($usuario){
        $results = FALSE;
        $user = $this->db->get_where('usuarios',array('usuario'=>$usuario));
        if($user->num_rows() > 0 ){

            $results = $user->result_array();
        }
    return  $results;

    }

}
