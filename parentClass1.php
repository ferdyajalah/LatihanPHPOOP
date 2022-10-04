<?
/*
pertemuan Belajar Overloading
OverLoading = menggunakan method / function / Properties berulang-ulang
Didalam class itu sendiri / diluar class
*/

class parentClass1
{
   public static $title;
   // Deklarasi Properties
   // public $name = "Basic";

   public function __construct($title)
   {
      self:: $title = $title;
   }
   public function getName()
   {
      echo "nama: " . self::$title."<br>";
   }
}
$parentClass1 = new parentClass1 ("ok");
echo $parentClass1->getName(); 
