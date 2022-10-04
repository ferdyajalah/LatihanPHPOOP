<?php
// 1. kelas abstarct dengan keyword abstract
  abstract class Produk {
// 2. memiliki atribut
    public $harga = 2000;
// 3. dapat memiliki function dengan body code tanda keyword abstract
// 4. dapat melakukan signiture/tanpa tengah
    abstract public function sayHello();
    public function getHarga(){
    return $this->harga;
   }
   
  }
  ?>
   

    