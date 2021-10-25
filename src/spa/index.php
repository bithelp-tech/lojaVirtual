<?php

namespace lojavirtual\spa;

require __DIR__.'/../../vendor/autoload.php';

use lojavirtual\classGetCep\CleanCepPosted;
use lojavirtual\classGetCep\getCepJsonViaCep;

$fim = new CleanCepPosted();
$valuer = "1g+g+gf+dfpo2g3g456g9h8d";
$fim->cleanCep($valuer);
$valuer=$fim->getCep();
echo "$valuer";
echo "<br/>";
$cep="36060440";
$inicio=new getCepJsonViaCep();
$inicio->lookForAdressCepJsonByViaCep($cep);
$inicio->getClientAddressJsonByViaCep();

$fim = json_decode($inicio->clientAddress);

var_dump($fim->cep);
