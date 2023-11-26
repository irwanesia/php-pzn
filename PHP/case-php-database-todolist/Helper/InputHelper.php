<?php

namespace Helper;

class InputHelper
{
    // dibuat static karena biar bisa di akses langsung menggunakan tanda ::
    static function input(string $info): string
    {
        echo "$info: ";
        $result = fgets(STDIN);
        return trim($result);
    }   
}