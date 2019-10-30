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


        $this->db->query("CREATE TABLE if not exists usuarios(
                                codigo       serial NOT NULL,
                                login        varchar(500),
                                senha        varchar(1000),
                                ultimoacesso timestamp,
                                created_at   timestamp default now(),
                                updated_at   timestamptz default now(),
                                primary key (codigo)
                                )");
        $this->db->query("CREATE OR REPLACE FUNCTION  trigger_set_timestamp() RETURNS TRIGGER AS $$ BEGIN NEW.updated_at = NOW();
                                RETURN NEW;
                                END;
                                $$ LANGUAGE plpgsql");
        $this->db->query("DROP      TRIGGER if exists  set_timestamp ON usuarios");
        $this->db->query("CREATE    TRIGGER set_timestamp
                                BEFORE UPDATE ON usuarios
                                FOR EACH ROW
                                EXECUTE PROCEDURE trigger_set_timestamp()");
        $this->db->query("ALTER TABLE usuarios ADD COLUMN if not exists  __ci_last_regenerate numeric(500)");
        $this->db->query("ALTER TABLE usuarios ADD COLUMN if not exists logado boolean");
        $this->db->query("ALTER TABLE usuarios ADD COLUMN if not exists session_coo varchar(10000)");
        $this->db->query("ALTER TABLE usuarios add column if not exists email varchar(1000)");
        $this->db->query("ALTER TABLE usuarios add column if not exists datanasc date");
        $this->db->query("ALTER TABLE usuarios add column if not exists telcel varchar(1000)");

        $transaction = $this->db->trans_complete();
        if(!$transaction){
            $this->response("error",["msg"=>"Erro ao atualizar base de dados!"]);
        }
        $this->response("success",["msg"=>"Base Atualizada com sucesso!"]);

    }


}
