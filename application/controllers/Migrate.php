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


        pg_query("CREATE TABLE if not exists usuarios(
                                codigo       serial NOT NULL,
                                login        varchar(500),
                                senha        varchar(1000),
                                ultimoacesso timestamp,
                                created_at   timestamp default now(),
                                updated_at   timestamptz default now(),
                                primary key (codigo)
                                )");
        pg_query("CREATE OR REPLACE FUNCTION  trigger_set_timestamp() RETURNS TRIGGER AS $$ BEGIN NEW.updated_at = NOW();
                                RETURN NEW;
                                END;
                                $$ LANGUAGE plpgsql");
        pg_query("DROP      TRIGGER if exists  set_timestamp ON usuarios");
        pg_query("CREATE    TRIGGER set_timestamp
                                BEFORE UPDATE ON usuarios
                                FOR EACH ROW
                                EXECUTE PROCEDURE trigger_set_timestamp()");
        pg_query("ALTER TABLE usuarios ADD COLUMN IF NOT EXISTS  __ci_last_regenerate numeric(500)");
        pg_query("ALTER TABLE usuarios ADD COLUMN IF NOT EXISTS logado boolean");
        pg_query("ALTER TABLE usuarios ADD COLUMN IF NOT EXISTS session_coo varchar(10000)");
        pg_query("ALTER TABLE usuarios add column IF NOT EXISTS email varchar(1000)");
        pg_query("ALTER TABLE usuarios add column IF NOT EXISTS datanasc date");
        pg_query("ALTER TABLE usuarios add column IF NOT EXISTS telcel varchar(1000)");

        $transaction = $this->db->trans_complete();
        if(!$transaction){
            $this->response("error",["msg"=>"Erro ao atualizar base de dados!"]);
        }
        $this->response("success",["msg"=>"Base Atualizada com sucesso!"]);

    }


}
