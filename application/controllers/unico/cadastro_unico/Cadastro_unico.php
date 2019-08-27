<?php
defined('BASEPATH') OR exit('No direct script access allowed samerda');

class Cadastro_unico extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $id     = $this->input->post('id',TRUE);
        $data   = [
            0=>[
                "nome"=>"Fulano Ciclano Beutrano",
                "cpf"=>"022323332",
                "rua"=>"rua tal etc tec beco",
                "bairro"=>"Teste",
                "outros"=>[
                    0=>["dados_pessoais"=>"teste"],
                    1=>['dados_teste'=>'sadfasdf'],
                    3=>["dados_ide"=>[
                        0=>"AAAAAAAA",
                        1=>"BBBBBBBB",
                        2=>[
                            0=>["dados_pessoais"=>"teste"],
                            1=>["genericos"=>[
                            1=>[
                                0=>2,
                                1=>[
                                    "a"=>"bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb"
                                ]
                            ]
                            ]
                            ],
                        ]
                    ]]
                ]
            ],
            1=>"Maria",
            2=>"fulano"]
        ;
//        pach_x($data);
        $html   = $this->load->view('unico/cadastro_unico/index',NULL,TRUE);
        $this->response(compact("html","data"));

    }

    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
