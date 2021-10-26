<?php

namespace lojavirtual\spa;

require __DIR__.'/../../vendor/autoload.php';

use lojavirtual\classGetCep\Module_viaCepApiRequest;

$a=new Module_viaCepApiRequest();
$a->lookCep();

print_r($a);