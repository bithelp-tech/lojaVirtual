<?php
$url="https://viacep.com.br/ws/36071270/json/";
$address =  json_decode(file_get_contents($url));

echo "<pre>";
var_dump($address);
echo "<pre/>";