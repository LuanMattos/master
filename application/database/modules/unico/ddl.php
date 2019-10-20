<?php
namespace database\ddl;

//defined('BASEPATH') OR exit('No direct script access allowed ');

class ddl
{
    public  function index(){
        echo "teste";
    }
    public function start(){

        $this->db->trans_start();

        $this->db->create_table("da_dados_globais",TRUE);
        $this->db->query("alter table da_dados_globais add column IF NOT EXISTS numero_residencia int");
        $this->db->query("alter table da_dados_globais add column IF NOT EXISTS celular varchar(30)");
        $this->db->query("alter table da_dados_globais add column IF NOT EXISTS telresidencial varchar(30)");
        $this->db->query("alter table da_dados_globais add column IF NOT EXISTS nomemae varchar(200)");
        $this->db->query("alter table da_dados_globais add column IF NOT EXISTS nomepai varchar(200)");

        $transaction = $this->db->trans_complete();
        if(!$transaction){
            $error['errors'] = $this->db->_error_message();
            $this->response("error",$error);
        }
        $this->response("success",["msg"=>"Dados Atualizados com sucesso"]);
    }

}
$start = new ddl();
$start->start();