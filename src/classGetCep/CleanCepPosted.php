<?php

namespace getCepUrl\classGetCEP;

class CleanCepPosted
{
    private $cepToApplyViaCepApi;
    private $isCepStarted=false;

    public function cleanCep($cepTypedByUser)
    {        
        if(!empty($cepTypedByUser) || !isset($cepTypedByUser)){

            $cepTypedByUser = preg_replace('/[^0-9]/','',$cepTypedByUser);
            $cepChangedToArrayToBeCounted = str_split($cepTypedByUser);

            $cepTypedCounted=count($cepChangedToArrayToBeCounted);

            if($cepTypedCounted=8){

                $this->isCepStarted=true;

                $this->$cepToApplyViaCepApi=
                $cepChangedToArrayToBeCounted[0].
                $cepChangedToArrayToBeCounted[1].
                $cepChangedToArrayToBeCounted[2].
                $cepChangedToArrayToBeCounted[3].
                $cepChangedToArrayToBeCounted[4].
                $cepChangedToArrayToBeCounted[5].
                $cepChangedToArrayToBeCounted[6].
                $cepChangedToArrayToBeCounted[7];

            }elseif($cepTypedCounted<8){ $this->cepToApplyViaCepApi="A digitação é menor que um Cep";            
            }elseif($cepTypedCounted>8){ $this->cepToApplyViaCepApi="A digitação é maior que um Cep";

        }else{
            $this->$cepToApplyViaCepApi="Campo vazio ou erro desconhecido";            
        }
    }
}



//$url="https://viacep.com.br/ws/36071270/json/";
//$address =  json_decode(file_get_contents($url));

////echo "<pre>";
//var_dump($address);
//echo "<pre/>";