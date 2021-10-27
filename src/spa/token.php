<?php

function base64ErlEncode($data){
    return str_replace(['+','/','='],['-','_',''],base64_encode($data));
}

$header = base64ErlEncode('{"alg":"HS256","typ":"JWT"}');
$payload=base64ErlEncode('{"sub":"luis","name":"luiscarlios","iat":"luis"}');
$signature=base64ErlEncode(
    hash_hmac('sha256', $header.'.'.$payload,'luis', true)
);

echo $header.'.'.$payload.'.'.$signature;
