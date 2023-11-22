<?php

class SocialMedia
{
    public string $name;
}

// kata kunci final bisa digunakan diclass, jika menggunakan kata kunci class sebelum class
// maka diartikan class tersebut tidak bisa diwariskan
// dan secara otomatis semua class childnya akan error
final class Facebook extends SocialMedia
{
    // penggunanaan final function
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}


// ini akan error
class FakeFacebook extends FakeFacebook
{
    // ini akan error
    public function login(string $username, string $password): bool
    {
        return false;
    }
}
