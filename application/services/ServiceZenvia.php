<?php
namespace ServiceZenvia;

use Service\GeneralService;
use Zenvia\Model\SmsFacade;

class ServiceZenvia extends GeneralService {

    public function __construct(){

    }

    public function startFacade($param,$sms){

        $senha = base64_encode($param['alias'] . ":" . $param['password']);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api-rest.zenvia.com/services/send-sms-multiple");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$this->json_msg($sms));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Basic $senha",
            "Accept: application/json"
        ));
        $response = curl_exec($ch);
//        debug($response);
        $this->setResponseDb($response,$sms);
        curl_close($ch);


    }
    public function setResponseDb($response,$sms){
        $this->load->model("sms/Sms_fila_model");
        $Sms_fila_model = $this->Sms_fila_model;
        $data = json_decode($response);

        foreach($data->sendSmsMultiResponse->sendSmsResponseList as $row){
            if($row->statusDescription === "Ok"){
                $data_sms = [
                    "codigo"    => $sms['codigo'],
                    "date_send" => date("Y-m-d H:i:s")
                ];

            }else{
                $data_sms = [
                    "codigo"    => $sms['codigo'],
                    "response"  => "$row->detailDescription"
                ];

            }
            $Sms_fila_model->save($data_sms);
        }

    }
    public  function json_msg($param){

        $param = (object)$param;
        $json = '{';
        $json .= '"sendSmsMultiRequest":{"aggregateId":1750,"sendSmsRequestList":[';
        $json .= $this->json($param);
        $json .= ']}}';

        return $json;
    }
    public function json($row){
        $json = [
            "from"  => '',
            "to"    => "{$row->destinatario}",
            "msg"   => $row->msg,
            "id"    => $row->codigo
        ];
        return json_encode($json);

    }


}
