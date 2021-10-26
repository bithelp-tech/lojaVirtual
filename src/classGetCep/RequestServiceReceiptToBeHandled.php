<?php

namespace lojavirtual\classGetCep;

class RequestServiceReceiptToBeHandled
{
    public $requestServiceReturn;

    public function __construct($cepStartService){
        $this->ViaCepServiceJsonRequest($cepStartService);
        //$this->getJson();
    }

    public function ViaCepServiceJsonRequest($cep){

        $url="https://viacep.com.br/ws/$cep/json/";
        $getService=file_get_contents($url);              
        $this->requestServiceReturn = $getService;        
    }

    public function getJson(){
        return (array)$this->requestServiceReturn;
    }    
}