<?php
defined('BASEPATH') OR exit('No direct script access allowed samerda');
class Migrate extends CI_Controller{

    public function __construct(){
        parent::__construct();

    }

    public function index()
    {
        $this->db->query("create table if not exists usuarios(
                    codigo serial not null,
                    login   varchar(300),
                    senha   varchar(300),
                    usuario varchar(300)
                )");
        $this->db->query("create table if not exists da_dados_globais(
                                codigo   serial not null,
                                nome     varchar(300),
                                cpf      varchar(300),
                                rg       varchar(300),
                                endereco varchar(300),
                                email    varchar(300),
                                cidade   varchar(300)
                        )");
        //para testes
        $this->db->query("create table if not exists teste(campoteste varchar(1),teste integer)");
        $this->db->query("alter table da_dados_globais add column if not exists orgaoemissor varchar(300)");
        echo "Migração bem sucedida";
    }

}