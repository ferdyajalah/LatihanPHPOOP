<?php

class Fungsi
{

   // membuat variabel
   public function title ():void
   {
      echo "Belajar Fungsi";
   }
   public function __construct (public $name, public $numb){}


      // 2. fungsi void dengan parameter
      public function getname(){
   return $this->name;
      }
      public function getParameter($testParameter){
         echo $testParameter;
}  
public function Perkalian ($numb_,$numb_b){
   return $numb_a = $numb_b;
}
}
$obj = new Fungsi (name:"Cinta Slebew", numb:"15");
echo $obj->name . "<br>";
echo $obj->numb . "<br>";
echo$obj->getname();
echo $obj->getParameter(testParameter: "Cinta "). "<br>";
echo $obj->perkalian ("6","7");
?>
