<?php

//  sebuah mekanisme memanggil function ke function lainnya sesuai dengan yang argumen diberikannya
function sayHello(string $name, callable $filter)
{
    $final = call_user_func($filter, $name);
    echo "Hello $final" . PHP_EOL;
};

sayHello("Irwan", "strtoupper");
sayHello("Irwan", "strtolower");
sayHello("Irwan", function (string $name): string {
    return strtoupper($name);
});
sayHello("ashrock", fn ($name) => strtoupper($name));
