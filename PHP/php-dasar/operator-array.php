<?php

$first = [
    "first_name" => "Irwan"
];
$last = [
    "first_name" => "Andi",
    "last_name" => "Kuncoro"
];

$fullname = $first + $last;
var_dump($first == $last);
var_dump($first === $last);

var_dump($fullname);
