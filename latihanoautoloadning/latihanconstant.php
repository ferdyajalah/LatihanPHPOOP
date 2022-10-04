<?php

const CHECK_STATUS = 'HADIR';

CONST CHECK_NAMA_GORENGAN = [
    'TAHU ISI', 'BALA BALA', 'RISOL', 'BAKWAN', TRUE
];
const student = [
    'nama' => 'Cinta',
    'umur' => '16',
    'role' => 'student',
    'is_active' => true
];
const users =[
[
    'name' => 'Cinta',
    'umur' => '16',
    'role' => 'student',
    'is_active' => true
],
[
    'name' => 'Cinta',
    'umur' => '16',
    'role' => 'teacher',
    'is_active' => true
],
[
    'name' => 'Cinta',
    'umur' => '16',
    'role' => 'student',
    'is_active' => true
]
];
$index = 1;

//acho CHECK_STATUS;
//VAR_DUMP(CHECK_NAMA_GORENGAN);

foreach(users as $key => $value){
    echo 'no' . $index++ . '<br>';
    echo 'nama: ' . $value['name'] . '<br>';
    echo '<hr>';
}

/*

You say I'm crazy
'Cause you don't think I know what you've done
But when you call me baby
I know I'm not the only one
I have loved you for many years
Maybe I am just not enough
You've made me realize my deepest fear
By lying and tearing us up
You say I'm crazy
'Cause you don't think I know what you've done
But when you call me baby
I know I'm not the only one
You say I'm crazy
'Cause you don't think I know what you've done
But when you call me baby
I know I'm not the only one
I know I'm not the only one
I know I'm not the only one
And I know, and I know, and I know
And I know, and I know, and I know, know
I know I'm not the only one
