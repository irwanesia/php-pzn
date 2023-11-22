<?php

// kata kunci static adalah keyword yg bisa digunakan untuk membuat properties atau function diclassnya 
// tanpa menginstansiasi class terlebih didahulu
// namun saat membuat tatic properties atau function , secara otomatis hal tersebut
// tidak akan lagi berhubungan dengan class instance yg dibuat
// untuk akese static properties dan function gunakan operator ::
// static function tidak bisa mengakses function biasa, karena function biasa menempel pada class instance sedangkan static function tidak

namespace Helper;

class MathHelper
{
    static public string $name = "MathHelper";

    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
