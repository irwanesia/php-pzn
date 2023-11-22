<?php 

// Reflection
// membaca struktur kode pada saat aplikasi sedang berjalan
// materi yg ppanjang dan banyak, disini akan bahas perkenalan saja 
// relfection merupakan fitur yg biasa digunakan saat kita membuat framework
// https://www.php/net/manual/en/book.reflection.php


// membuat validation tanpa reflection
require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

// $request = new LoginRequest();

// ValidateUtil::validate($request);

// membuat validation framework dengan reflection
class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
// $register->name = "Irwan";
$register->address = "Mulyasari";
$register->email = "irwan@gmail.com";

ValidateUtil::validateReflection($register);