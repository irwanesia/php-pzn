<?php

$nama = ['float', 'codeir', 'irwvnesia'];

foreach($nama as $n){
    echo "Data nama $n" . PHP_EOL;
}

// foreach dengan key
$person = [
    "firstname" => "Irwan",
    "middlename" => "Tjandra",
    "lastname" => "Wijoyo"
];

foreach($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}