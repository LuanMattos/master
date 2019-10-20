<?php

class Migrate extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->executarDdl();
    }

    public function index()
    {


        $this->load->library('migration');
        if (!$this->migration->current())
        {
            show_error($this->migration->error_string());
        }
    }
    protected function executarDdl(){

        $this->db->trans_start();

        $this->db->query("CREATE TABLE if NOT EXISTS da_dados_globais()");
        $this->db->query("ALTER TABLE da_dados_globais ADD COLUMN IF NOT EXISTS numero_residencia int");
        $this->db->query("ALTER TABLE da_dados_globais ADD COLUMN IF NOT EXISTS celular varchar(30)");
        $this->db->query("ALTER TABLE da_dados_globais ADD COLUMN IF NOT EXISTS telresidencial varchar(30)");
        $this->db->query("ALTER TABLE da_dados_globais ADD COLUMN IF NOT EXISTS nomemae varchar(200)");
        $this->db->query("ALTER TABLE da_dados_globais ADD COLUMN IF NOT EXISTS nomepai varchar(200)");

        $transaction = $this->db->trans_complete();
        if(!$transaction){
            $this->response("error",["msg"=>"Erro ao atualizar base de dados!"]);
        }
        $this->response("success",["msg"=>"Base Atualizada com sucesso!"]);

    }


}
