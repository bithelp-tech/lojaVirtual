<?php

namespace lojavirtual\classGetCep;

require __DIR__.'/../../vendor/autoload.php';

use lojavirtual\classGetCep\CepEntryTreatment;
use lojavirtual\classGetCep\RequestServiceReceiptToBeHandled;
use lojavirtual\classGetCep\GetServiceValues;

class Module_viaCepApiRequest{

    public $cepStructure;
    public $getMessage;

    public function __construct($cep){
        $this->getGeneralCep($cep);
    }   
    
    public function getGeneralCep($cep){
        $a=new CepEntryTreatment($cep);    
        $b=$a->cepToApplyViaCepApi;

        if(!strlen($a->cepToApplyViaCepApi)==""){
        $this->getMessageecho=
           //$a->cepToApplyViaCepApiecho;
            $this->cepStructure=false;
            return $this->getMessage;        
        }else{
            $requesService=
            new RequestServiceReceiptToBeHandled($a->cepToApplyViaCepApiecho);
            $ceJson=
            $requesService->
            requestServiceReturn;
            $cepKey=
            json_decode($ceJson);
            $this->cepStructure=
            $cepKey;            
        }
        
              
    }

    public function getAddress($final){

        if($this->cepStructure){
        $key=$this->cepStructure;
        $getKey=
        $key->$final;// ja da o resultado
        $this->cepStructure=$getKey;
        return $this->cepStructure;
        return $this->getMessage;
        }
            }
}