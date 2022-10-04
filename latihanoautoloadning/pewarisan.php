<?php
trait Role{
    abstract public function getRole():String;
}
class babeh {
    // deklarsi variabel
    public $nama;
    public $umur;
    public $harga;
    public static $index;
    public $is_status;

    // membuat construktor
    public function __construct($nama, $umur, $is_status = "Anak")
    {
    $this->nama =$nama;
     $this->umur =$umur;
     $this->marga ='kntl';
    self::$index = 1;
    $this->is_status = $is_status; 
    }

    public function getHarga(){
    return $this->marga;
    }
    public function getName()
    {
        return$this->nama;
    }

    public function getstatus()
    {
        return $this->umur;
    }

    public function display()
    {
      echo 'No' . self::$index++ . '<br>';
      echo "Nama:" . $this->getName() . "<br>";
      echo "Harga:" . $this->getHarga() . "<br>";
      echo "Marga:" . $this->getMarga() . "<br>";
      echo "umur:" .  $this->getumur() . "<br>";
      if($this->is_status == "bapak"){
        echo 'status:'. $this->getstatus() . '<br>';
      }else{
        echo 'status:'.$this->getStatus(). '<br>';
      }
    }
    public function space()
    {
        echo '<hr>';
    }
}
class bocil extends babeh {
    use Role;
    public $Role
    public function __construct($nama, $umur, $is_status, $role ="siswa")
    {
        parent__construct($nama, $umur, $is_active);
        $this->nama= $nama;
        $this->umur= $umur;
        $this->role =$role;

  
    }
}
