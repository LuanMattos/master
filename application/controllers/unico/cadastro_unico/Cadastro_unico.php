<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Cadastro_unico extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("unificado/Un_cadastro_unificado_model");

    }

    public function index(){
        $datapost = $this->input->post(NULL,TRUE);

        $where = "codigo = codigo";
        $data = $this->Un_cadastro_unificado_model->getwhere($where,"array","codigo","ASC");

        $html   = $this->load->view('unico/cadastro_unico/index',NULL,TRUE);
        $this->response(compact("html","data"));
    }
    public function salvar(){
        $codigo     = reset(func_get_args());
        $where = [];
        if(!empty($codigo)){
            $where = ["codigo"=>$codigo];
        }
//        $data = $this->db->get_where('da_dados_globais', $where , $limit = NULL, $offset = NULL)->result_array();

//        debug($data);
        $data   = $this->Un_cadastro_unificado_model->getWhere($where);

        if(count($data) > 0){
            $data   = reset($data);
        }


        $html   = $this->load->view('unico/cadastro_unico/form',NULL,TRUE);
        $this->response(compact("html","data"));
    }
    public function acao_salvar(){
        $data = $this->input->post("data",TRUE);
        $save = $this->Un_cadastro_unificado_model->save($data);


    }
    public function buscar(){
        $datapost = $this->input->post("search",TRUE);

        if(isset($datapost->search)){
            debug($datapost->search);
        }
    }
    public function excluir(){
        $codigo = reset(func_get_args());
        $where = ['codigo'=>$codigo];
        $this->Un_cadastro_unificado_model->deletewhere($where);
    }

    public function logout(){
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        redirect();
    }

}
