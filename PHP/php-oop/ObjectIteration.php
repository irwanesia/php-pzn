<?php

class Data
{
    var string $first = "Fisrt";
    public string $second = "second";
    private string $third = "third";
    protected string $forth = "forth";
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property: $value " . PHP_EOL;
}
