<?php

namespace lojavirtual\classGetCep;


class getCepJsonViaCep
{
    public $clientAddress;

    public function lookForAdressCepJsonByViaCep($cep){

        $url="https://viacep.com.br/ws/$cep/json/";       
        $this->clientAddress = file_get_contents($url);
        //print_r($url);

    }
    
    public function getClientAddressJsonByViaCep(){
        return (array)$this->clientAddress;

    }
}