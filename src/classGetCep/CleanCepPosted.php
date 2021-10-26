<?php

namespace lojavirtual\classGetCep;

class CleanCepPosted
{
    private $cepToApplyViaCepApi;
    private $isCepStarted=false;

    public function getCep(){
        return $this->cepToApplyViaCepApi;
    }   

    public function cleanCep($cepTypedByUser)
    {        
        if(!empty($cepTypedByUser) || !isset($cepTypedByUser)){

            $cepTypedByUser = preg_replace('/[^0-9]/','',$cepTypedByUser);E
            $cepChangedToArrayToBeCounted = str_split($cepTypedByUser);

            $cepTypedCounted=count($cepChangedToArrayToBeCounted);

            if($cepTypedCounted==8){

                $this->isCepStarted=true;

                $this->cepToApplyViaCepApi=
                $cepChangedToArrayToBeCounted[0].
                $cepChangedToArrayToBeCounted[1].
                $cepChangedToArrayToBeCounted[2].
                $cepChangedToArrayToBeCounted[3].
                $cepChangedToArrayToBeCounted[4].
                $cepChangedToArrayToBeCounted[5].
                $cepChangedToArrayToBeCounted[6].
                $cepChangedToArrayToBeCounted[7];

            }elseif($cepTypedCounted<8){ $this->cepToApplyViaCepApi="Os números da digitação é menor que um Cep";            
            }elseif($cepTypedCounted>8){ $this->cepToApplyViaCepApi="Os números da digitação é maior que um Cep";
            }
        }else{
            $this->cepToApplyViaCepApi="Campo vazio ou erro desconhecido";            
        } 
    }    
}