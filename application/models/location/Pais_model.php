<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pais_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->set_table_index("id");
        $this->set_table("pais");
    }
    public function get_cidade_where_pais($codpais){
        return $this->db->query("SELECT cidade.nome,cidade.id FROM pais
                                LEFT JOIN estado ON estado.pais = pais.id
                                LEFT JOIN cidade ON cidade.estado = estado.id WHERE pais.id = $codpais
                                ORDER BY cidade.nome ASC
                                ;")->result_array();
    }



}
