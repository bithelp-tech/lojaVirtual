<?php

namespace lojavirtual\classGetCep;

class GetAddressHandleFormat
{
    private $serviceReturnToBeTreated;
    
    public function treatTheServiceReturn($service){
        $this->serviceReturnToBeTreated=$service;
    }
        
    public function getViaCepServiceJson($address){
        $abstractViaCepAddress=$this->serviceReturnToBeTreated;
        $decodeAbstractViaCepAddress=json_decode($abstractViaCepAddress[0]);
        $decodedAddress=$decodeAbstractViaCepAddress;
        return $decodedAddress->$address;
    }
}