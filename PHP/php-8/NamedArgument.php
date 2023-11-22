<?php 

// named Argument
// biasnaya saat panggil function, harus memasukan argument/parameter sesuai dgn porsinya
// dgn kemampuan named argument, kita bisa memasukan argument/parameter tanpa harus mengikuti posisinya
// namun penggunaan named argument harus disebutkan nama argument/parameternya
// named argument jg jadi kode program yg mudah dibaca ketika memanggil function yg memiliki argument yg sangat banyak
// https:wiki.php.net/rfc/named_params

function sayHello(string $first, string $middle = "", string $last): void // tidak mengembalikan nilai apapun
{
    echo "Hello $first $middle $last". PHP_EOL;
}

// php >8 (tanpa named argument)
sayHello("eko","maulana","haris");

// di php 8 (dgn named argumetn)
sayHello(last:"haris",first:"eko",middle:"maulana");


// keuntungan menggunakan named argument
// ketika nilai argumentnya default seperti contoh nilai middle nya dibuat default value
// tanpa named argumet
// sayHello("eko","maulana"); // akan error

// di php 8 (dgn named argumetn)
sayHello(first:"Eko",last:"Haris");