<?php
trait apakabar{
    public function apakabar(){
    echo static::class . 'Apa kabar';
    }
}

trait selamatpagi{
    public function apakabar(){
    echo static::class . 'selamat pagi';
    }
}

class pesan {
    use apakabar,selamatpagi{
        apakabar::apakabar insteadof Selamatpagi;
        Selamatpagi::apakabar as apakabarTraitselamatpagi;
    }
}
// inisialisasi class objek
$pesan = new pesan();
echo $pesan->apakabartraitselamatpagi();
//output: