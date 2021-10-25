<?php

namespace lojavirtual\spa;

require __DIR__.'/../../vendor/autoload.php';

use lojavirtual\classGetCep\CleanCepPosted;
use lojavirtual\classGetCep\getCepJsonViaCep;
use lojavirtual\classGetCep\GetAddressHandleFormat;

$a=new GetAddressHandleFormat();

$a->Gettest();
$teste=$a->getAddresOf("logradouro");
echo$teste;

//print_r($a);
//$a->Gettest();




















/*

$fim = new CleanCepPosted();
$valuer = "1g+g+gf+dfpo2g3g456g9h8d";
$fim->cleanCep($valuer);
$valuer=$fim->getCep();
echo "$valuer";
echo "<br/>";
$cep="36071270";
$inicio=new getCepJsonViaCep();
$inicio->lookForAdressCepJsonByViaCep($cep);
$inicio->getClientAddressJsonByViaCep();

$fim = json_decode($inicio->clientAddress);
print_r($inicio);

var_dump($fim->cep);
echo"este é o fim do contrato $fim->bairro";
*/