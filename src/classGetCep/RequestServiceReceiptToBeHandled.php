<?php

namespace lojavirtual\classGetCep;

class RequestServiceReceiptToBeHandled
{
    public $requestServiceReturn;

    public function __construct($cepStartService){
        $this->ViaCepServiceJsonRequest($cepStartService);
        
    }

    public function ViaCepServiceJsonRequest($cep){        

        $url="https://viacep.com.br/ws/$cep/json/";
        $getService=file_get_contents($url);
        if(!isset($getService)){$this->requestServiceReturn = $getService;
        }else{return "Falha ao digitar, tente novamente";
        }                
    }

    public function getJson(){
        return (array)$this->requestServiceReturn;
    }    
}