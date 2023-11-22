<?php

class Student
{
    public string $id;
    public string $name;
    public string $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    // cara menggunakan function __clone
    public function __clone()
    {
        unset($this->sample);
    }

    public function __toString(): string
    {
        return "Student id:$this->id, name:$this->name, value:$this->value" . PHP_EOL;
    }
}
