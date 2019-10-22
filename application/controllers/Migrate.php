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

        $this->db->query("create table da_dados_globais (
                                    codigo              serial NOT NULL,
                                    nome                varchar(300),
                                    cpf                 varchar(300),
                                    rg                  varchar(300),
                                    cnh                 varchar(300),
                                    pis                 varchar(300),
                                    nis                 varchar(300),
                                    ctps                varchar(300),
                                    email               varchar(300),
                                    celular             varchar(300),
                                    teleresidencial     varchar(300),
                                    fax                 varchar(300),
                                    endereco            varchar(300),
                                    cep                 varchar(100),
                                    numero              varchar(100),
                                    bairro              varchar(300),
                                    cidade              varchar(300),
                                    estado              varchar(10),
                                    pais                varchar(100),
                                    certidao_nasc       varchar(300),
                                    agencia             varchar(300),
                                    conta               varchar(300),
                                    banco               varchar(300),
                                    nomepai             varchar(300),
                                    nomemae             varchar(300),
                                    primary key (codigo)
                    )");

        $transaction = $this->db->trans_complete();
        if(!$transaction){
            $this->response("error",["msg"=>"Erro ao atualizar base de dados!"]);
        }
        $this->response("success",["msg"=>"Base Atualizada com sucesso!"]);

    }


}
