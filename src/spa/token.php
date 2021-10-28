<?php

function base64ErlEncode($data){
    return str_replace(['+','/','='],['-','_',''],base64_encode($data));
}

$header = base64ErlEncode('{"alg":"HS256","typ":"JWT"}');
$payload=base64ErlEncode('{"sub":"'.md5(time()).'","name":"Luis Carlos", "iat":'.time().'}');
$signature=base64ErlEncode(
    hash_hmac('sha256', $header.'.'.$payload,'segredão', true)
);

echo $header.'.'.$payload.'.'.$signature;