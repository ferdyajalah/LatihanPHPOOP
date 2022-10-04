<?php

public LatihanArray{

// membuat class array

// array dibagi menjadi menjadi 3
// 1. array biasa

public numbers =
[
    1,2,3,4,5
];
// menampilkan / mengeluarkan nilaiin array biasa
foreach ($numbers as $key){
    echo $key .".". $key . "<br>";

}
echo "<br>";
echo "Nilai Array Asosiasi" . "<br>";
// 2. array asosiasi
public $user =
[
    "nama" => "arief",
    "umur" => 17,
    "major" => "RPL",
];
// menampilkan / mengeluarkan nilai array asosiasi
foreach ($user as key => $value){
    echo $key .".". $value . "<br>";
}
echo "<br>";
echo "Nilai Array Multi Dimensi" . "<br>";
// 3. array multi dimensi
public $student = {
    "Satu" =>
    [
        "nama" => "Ferdy";,
        "umur" => 17,
        "kelas" => "XIRPL",
        "jurusan" => "RPL",
    ],
    "Dua" =>
}
"nama" => "Ferdy",
"umur" => 17,
"kelas" => "XIRPL",
"jurusan" =>"RPL
}