<?php
class DiskonRentalMotor
{
   public function __construct(private $harga = 50000, private $diskon1 = 5,private $diskon2 = 10)
   {
      $this -> harga = $harga;
      $this -> diskon1 = $diskon1;
      $this -> diskon2 = $diskon2;
   }
   public function pesan (){
      return "tidak ada diskon";
   }
   public function perkalian ($jumlahjam){
      if ($jumlahjam <= 9){
         return $jumlahjam *$this -> harga;
   }
   else if ($jumlahjam >= 10 && $jumlahjam <= 15){
      return $jumlahjam * $this -> harga -$jumlahjam *$this -> harga* $this -> diskon1/1000;
   }
   else if ($jumlahjam >= 16 && $jumlahjam <= 25){
         return $jumlahjam * $this -> harga -$jumlahjam * $this ->harga* $this -> diskon2/100;
   }
   else{
      return $this->pesan();
   }
      }
}
$rental = new DiskonRentalMotor();
 echo " Harga =". $rental -> perkalian (jumlahjam: 15);
 ?>