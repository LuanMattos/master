<?php
defined('BASEPATH') OR exit('No direct script access allowed ');
class Cadastro_unico extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model("unificado/Un_cadastro_unificado_model");

    }

    public function index(){
        $datapost = (object)$this->input->post(NULL,TRUE);
        $where = NULL;

        if(isset($datapost->search)){
            $datapost->search = addslashes($datapost->search);
            $where['nome ILIKE '] = "%$datapost->search%";
        }

        $data = $this->Un_cadastro_unificado_model->getwhere($where,"codigo");
        $count_result = $this->Un_cadastro_unificado_model->count_result_table();


        $html   = $this->load->view('unico/cadastro_unico/index',NULL,TRUE);
        $this->response("success",compact("html","data"));
    }
    public function salvar(){
        $codigo     = reset(func_get_args());
        $where = [1=>2];
        if(!empty($codigo)){
            $where = ["codigo"=>$codigo];
        }
        $data = $this->db->get_where('da_dados_globais', $where , $limit = NULL, $offset = NULL)->result_array();

//        $data   = $this->Un_cadastro_unificado_model->getWhere($where);


        if(count($data) > 0){
            $data   = reset($data);
        }


        $html   = $this->load->view('unico/cadastro_unico/form',NULL,TRUE);
        $this->response("success",compact("html","data"));
    }
    public function acao_salvar(){
        $data = $this->input->post("data",TRUE);
        $save = $this->Un_cadastro_unificado_model->save($data);
//        debug($this->db->last_query());
        if(!$save){
            $error["msg"] = "Erro ao salvar o registro";
            $this->response("error",$error);
        }
        $this->response("success");


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
