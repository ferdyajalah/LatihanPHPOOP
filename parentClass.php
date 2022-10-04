<?php

class parentClass
{
    public function __construct(
        public $nameClass,
        public $level ){}
    }
    class Childclass extends parentClass
    {

    }   

      $parentClass = new parentClass(nameClass: "cinta" , level: "peacefull");
  
      $childClass = new Childclass(nameClass: "17" , level: "peacefull");

    echo $parentClass->nameClass . "<br>";
    echo $parentClass->level . "<hr>";


    echo$childClass->nameClass . "<br>";
    echo$childClass->level;


   
      
  
  
  {

  }

    

   

    
    








