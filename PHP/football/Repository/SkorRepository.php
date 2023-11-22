<?php

namespace Repository;

use Entity\Skor;

interface SkorRepository
{
    public function save(skor $skor): void;

    public function delete(int $no): bool;
    
    public function findAll(): array;
}


class SkorRepositoryImpl implements SkorRepository
{
    public array $skor = array();

    function save(skor $skor): void
    {
        $no = sizeof($this->skor) + 1;
        $this->skor[$no] = $skor;
    }

    function delete(int $no): bool
    {
        if($no > sizeof($this->skor)){
            return false;
        }

        for($i = $no; $i < sizeof($this->skor); $i++){
            $this->skor[$i] = $this->skor[$i+1];
        }

        unset($this->skor[sizeof($this->skor)]);

        return true;
    }

    function findAll(): array
    {
        return $this->skor;
    }
}