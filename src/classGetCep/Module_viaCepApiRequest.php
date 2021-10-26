<?php

namespace lojavirtual\src\classGetCep;

require __DIR__.'/../../vendor/autoload.php';

use lojavirtual\classGetCep\CepEntryTreatment;
use lojavirtual\classGetCep\RequestServiceReceiptToBeHandled;
use lojavirtual\classGetCep\GetServiceValues;


    $a=new CepEntryTreatment("36060440");    
    $requesService=new RequestServiceReceiptToBeHandled($a->cepToApplyViaCepApiecho);
    $ceJson=$requesService->requestServiceReturn;
    $cepKey=json_decode($ceJson);
    $return=$cepKey->logradouro;
    echo $return;


echo"<pre>************************\n";

    print_r($cepKey);
echo"</pre>************************\n";
echo"<pre>************************\n";

    print_r($requesService);
echo"</pre>************************\n";
    