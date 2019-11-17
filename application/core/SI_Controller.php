<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SI_Controller extends CI_Controller{

    public function __construct(){
        parent::__construct();

//        $logado = $this->session->get_userdata();
//        if (!($logado['validate_login'] > 0)){
//            redirect();
//        }


    }
    /**
     * deixa apenas letras evitando SQL-inject 1
    **/
    public function clear_car($value){
        $value_a = preg_replace('/[^[:alpha:]_]/', '',$value);
        return addslashes($value_a);

    }

    public function md5Crazy($pass){
        $argo_default               =  md5($pass);
        $abc                        =  md5($argo_default);
        $awerofsdfmadfje            =  md5($abc);
        $bmfgtrew                   =  md5($awerofsdfmadfje).$argo_default;
        $cddbcdf                    =  md5($bmfgtrew);
        $dovfmsptghu                =  md5($cddbcdf);
        $awerofsdfmadfje            =  md5($awerofsdfmadfje);
        $fayusdaksfa                =  md5($awerofsdfmadfje);
        $sdfkaslfs                  =  md5($fayusdaksfa);
        $sdlfjakfsudfjnsdf          =  md5($argo_default);
        $sfuavnsdfa                 =  md5($dovfmsptghu);
        $sfjsasdffbmamsdfasdkfs     =  md5($sdlfjakfsudfjnsdf);
        $e                          =  md5($bmfgtrew.$bmfgtrew.$bmfgtrew.$sfjsasdffbmamsdfasdkfs.$sfuavnsdfa.$sdfkaslfs);
        return $e;
    }
    /**
     * Criptografa os dados
     */
    public function encript_atos($pass){
        $final          = $this->md5Crazy($pass);
        $argo_bc        =  password_hash($final, PASSWORD_DEFAULT);
        return $argo_bc;
    }
    /**
     * Verifica se a senha corresponde a criptografia atos
    */
    public function verify_pass($pass,$datadb){
        $pass = $this->md5Crazy($pass);

        return password_verify($pass,$datadb);
    }
    public function menu(){
        $url        = $_SERVER["REQUEST_URI"];
        $explode    = explode("/",$url);
        $modulo     = strtolower($explode[3]);

        return    $this->load->view('menus/menu_'. $modulo .'/menu');
    }
    //    public function paginate($configs){
//        $configs = ["per_page"=>$pe_page];
//
//
//        $config['total_rows'] = $row;
//        $config['per_page'] = $pe_page;
//
//        $this->pagination->initialize($config);
//    }


}
