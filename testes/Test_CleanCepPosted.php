<?php

namespace Tests;

require __DIR__.'/../src/classGetCep/CleanCepPosted.php';

use PHPUnit\Framework\TestCase;
use src\classGetCep\CleanCepPosted;


class Test_CleanCepPosted extends TestCase
{
    /** @test */
    public function shouldReturnNumbeOrError()
    {        
            $cep = new CleanCepPosted();
            $possibleValues="25ddfasf++fasdsadf+678941255";
            $cep->cleanCep($possibleValues);
            $valuer=$cep->getCep();
            if(count(str_split($valuer))==8){
                $valuer=true;
                }else{$valuer=false;}   
                     
            $this->assertTrue($valuer,true);
            print_r($valuer);
    }


}