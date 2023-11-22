<?php

require_once "exception/ValidationException.php";
require_once "helper/Validation.php";
require_once "data/LoginRequest.php";

$loginRequest = new LoginRequest();
// jika user dan pass tidak dimasukan maka akan error
// untuk mengatasi agar program terus berjalan digunakan try catch()
// saat mangil sebuah function yg bisa menyebabkan exception, maka disarankan menggunakan try-catch expression di php
// gunanya agar kita bisa menagkap exception yg terjadi, karena jika tidak ditangkap, lalu terjadi exception, maka secara otomatis programn terhenti
// $loginRequest->username = "Irwan";
// $loginRequest->password = "123";


// $loginRequest->username = "Irwan";
// $loginRequest->password = "123";

try {
    validateLoginRequest($loginRequest);
} catch (ValidationException $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
}

// try {
//     validateLoginRequest($loginRequest);
// } catch (ValidationException Exception $exception) {
//     echo "Error : {$exception->getMessage()}" . PHP_EOL;
// }

// $loginRequest->username = "Irwan";
// $loginRequest->password = "123";

validateLoginRequest($loginRequest);
echo "Valid" . PHP_EOL;
