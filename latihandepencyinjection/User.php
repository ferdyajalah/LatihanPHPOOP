<?php
include "Handphone.php";
class User{
public function __construct(handphone $handphone)
{
    
}
   public function tekantombol(handphone $handphone){
   echo $handphone->tampilkan();
   }
}
$user = new User();

$rogphone = new handphone();
$user->tekantombol($rogphone);
echo $user->$turnoffscreen();