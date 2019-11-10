<?php
namespace ServiceSms;
use ServiceZenvia;
use Service\GeneralService;
class ServiceSms extends  GeneralService{

    protected   $provider;
    protected   $urlApi = 'https://api-rest.zenvia.com/services/send-sms-multiple';
    public      $error;
    private     $provedor;

    public function __construct(){
        $this->setProvider();
        $this->provider;
        $this->processesRow();
    }
    public function addToRow(Array $param = []){
        $this->load->model("sms/Sms_fila_model");
        $sms_fila_model = $this->Sms_fila_model;

        if(empty($param)){
            $this->error = ["msg"=>"Nenhum parâmetro enviado em add To row"];
            exit();
        }
        $sms_fila_model->save($param);
    }
    /**
     * Processa as filas de sms
    */
    public function processesRow(){
        $this->load->model("sms/Sms_fila_model");
        $sms_fila_model = $this->Sms_fila_model;
        $get_msg        = $sms_fila_model->getWhere(["date_send"=>null,"date_to_send <= "=>date("Y-m-d H:i:s")]);

        if(empty($this->provider['alias']) || empty($this->provider['password'])){
            $this->error = ['msg'=>"Provedor de SMS não configurado corretamente!"];
            exit();
        }
        if(is_array($get_msg)){
            foreach($get_msg as $row){
                $this->provedor->startFacade($this->provider,$row);
            }
        }

    }

    public function setProvider(String $provider_name = NULL){
        $this->load->model("sms/Provider_sms_model");
        if(empty($provider_name) || is_null($provider_name)){
            $provedor = "zenvia";
        }else{
            $provedor = $provider_name;
        }
        switch ($provedor){
            case "zenvia":
                $this->provedor = new ServiceZenvia\ServiceZenvia();
                break;
        }

        $Provider_sms_model = $this->Provider_sms_model;
        $provider           = $Provider_sms_model->getWhere(['provedor '=>$provedor]);

        if(count($provider)){
            $provider = (object)reset($provider);
        }
        $configs = array(
            'alias'         => $provider->conta,
            'password'      => $provider->senha,
            'webServiceUrl' => $this->urlApi
        );

        $this->provider= $configs;
    }


}
