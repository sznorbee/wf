<?php 
//an abstract class Ligther factory

abstract class AbstractLigtherFactory
{
    protected $resources = []; //array: contains the type and amount of resurces - ex: fuel, gaz
    
    //to fil up stock
    public function addResources($type, $amount){
        
        //check if type exist
        if(!isset($this->resources[$type])){
            $this->resources[$type] = 0;
        }
        
        $this->resources[$type] += $amount;   //
    }
    //to consume stock
    public function consumeResources($type, $amount){
        ;
    }
    //build lighter, but how : specify in the class
    abstract public function buildLighter();
}

//Manual ligther factory  - a child a AbstractLF
class ManualLighterFactory extends AbstractLigtherFactory
{
    //build a manual ligther
    public function buildLighter(){
        ;
    }
}

//EllectricLigther Factory
class ElectricLigtherFactory extends AbstractLigtherFactory
{
    //build an electrique lighter
    public function buildLighter(){
        ;
    }
}


//Create a factory from the apropriete class
$factory = new ElectricLigtherFactory();
    //Provide resources for the factory
    $factory->addResources('gas', 10);
    //see what they have
    echo $factory->buildLighter();

