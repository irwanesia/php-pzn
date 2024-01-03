<?php

namespace Codeir\Test;

class Math
{
    public static function sum(array $values): int
    {
        $total = 0;
        foreach($values as $val){
            $total += $val;
        }
        return $total;
    }
}