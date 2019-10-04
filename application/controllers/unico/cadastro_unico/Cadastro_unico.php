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





        $data = $this->Un_cadastro_unificado_model->getwhere($where);
        $count_result = $this->Un_cadastro_unificado_model->count_result_table();

//        <!--<div class="container">-->
//<!--    <nav aria-label="Page navigation example">-->
//<!--        <ul class="pagination">-->
//<!--            <li class="page-item"><a class="page-link" href="#">Previous</a></li>-->
//<!--            <li class="page-item"><a class="page-link" href="#">1</a></li>-->
//<!--            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
//<!--            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
//<!--            <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
//<!--        </ul>-->
//<!--    </nav>-->
//<!--</div>-->







        $html   = $this->load->view('unico/cadastro_unico/index',NULL,TRUE);
        $this->response("success",compact("html","data"));
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
        $this->response("success",compact("html","data"));
    }
    public function acao_salvar(){
        $data = $this->input->post("data",TRUE);
        $save = $this->Un_cadastro_unificado_model->save($data);
        $this->response("success");


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
