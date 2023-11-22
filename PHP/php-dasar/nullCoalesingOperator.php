<?php

$data = [
    "action" => "Create"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// pengecekan isset ini bisa diubah menggunakan null coalesing operator
// implementasi null coalesing
$data1 = [
    "action" => "Create"
];
$action1 = $data1["action"] ?? "Nothing";
echo $action1 . PHP_EOL;
