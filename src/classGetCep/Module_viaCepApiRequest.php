<?php

namespace lojavirtual\classGetCep;

require __DIR__.'/../../vendor/autoload.php';

use lojavirtual\classGetCep\CepEntryTreatment;
use lojavirtual\classGetCep\RequestServiceReceiptToBeHandled;
use lojavirtual\classGetCep\GetServiceValues;

class Module_viaCepApiRequest{

    public $cepStructure;

    public function __construct($cep){
        $this->getGeneralCep($cep);

    }
    
    
    public function getGeneralCep(){
        $a=new CepEntryTreatment("36060440");    
        $requesService=new RequestServiceReceiptToBeHandled($a->cepToApplyViaCepApiecho);
        $ceJson=$requesService->requestServiceReturn;
        $cepKey=json_decode($ceJson);
        $this->cepStructure=$cepKey;        
    }

    public function getAddress(){
        $key=$this->cepStructure;
        $getKey=$key->cep;
        $this->cepStructure=$getKey;
        return $this->cepStructure;

    }

}