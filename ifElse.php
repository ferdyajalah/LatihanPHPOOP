<?php

// deklarasi variasi
$number1= 5;
$number2  = 10;
function cobaOperator()
{

}
if ($number1 == $number2){
  echo $number1 . "+" . $number2. "=" . ($number1 + $number2);
}
elseif ($number1 >= $number2){
  echo $number1 . "-" . $number2. "=" . ($number1 - $number2);
}
elseif ($number1 <= $number2){
  echo $number1 . "*" . $number2. "=" . ($number1 = $number2);
}
else{
  echo"[ {$number1} ] tidak sama tipe data [ {$number2} ]";
}

  