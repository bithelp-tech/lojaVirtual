<?php

namespace lojavirtual\classGetCep;

class GetServiceValues
{
    public $serviceReturnToBeTreated;

    public function construct($setService){
        setService($setService);

    }

    public function setService($requestServiceReceiptToBeHandled){
        $this->serviceReturnToBeTreated=
        $requestServiceReceiptToBeHandled;
    }
}