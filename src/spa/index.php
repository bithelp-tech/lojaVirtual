<?php

namespace lojavirtual\spa;

require __DIR__.'/../../vendor/autoload.php';

use lojavirtual\classGetCep\Module_viaCepApiRequest;

$a=new Module_viaCepApiRequest("36060440");
$a->getGeneralCep();
$a->getAddress();

echo"<pre>";
print_r($a);
echo"</pre>";