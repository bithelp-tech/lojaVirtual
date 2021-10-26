<?php

namespace lojavirtual\classGetCep;

class CepEntryTreatment
{
    public $cepToApplyViaCepApi;

    public function __construct($numberClient){
         $this->cleanCep($numberClient);
         $this->cepToApplyViaCepApi=
         $this->getCleanCep();         
    }
    
    public function cleanCep($cepTypedByUser)
    {        
        if(!empty($cepTypedByUser) || !isset($cepTypedByUser)){

            $newCep = preg_replace('/[^0-9]/','',$cepTypedByUser);
            $cepToArray = str_split($newCep);
            $cepSize=count($cepToArray);            

            if($cepSize==8){// Its cam be refactory later =>luis technical debt.

                $cepMont=array();
                for($i=0;$i<$cepSize;$i++){
                    array_push($cepMont,$cepToArray[$i]);
                }
                $cepToUse=implode("",$cepMont);
                $this->cepToApplyViaCepApiecho=$cepToUse;               

            }elseif($cepSize<8){
                $this->cepToApplyViaCepApi=
                "Os números da digitação é menor que um Cep";
            }elseif($cepSize>8){
                $this->cepToApplyViaCepApi=
                "Os números da digitação é maior que um Cep";}
        }else{
            $this->cepToApplyViaCepApi="Campo vazio ou erro desconhecido";            
        } 
    }

    public function getCleanCep(){
        return $this->cepToApplyViaCepApi;
    }       
}