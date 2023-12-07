<?php

namespace Repository;

use Entity\Klub;

interface KlubRepository
{
    public function save(klub $klub): void;

    public function delete(int $no): bool;
    
    public function findAll(): array;
}


class KlubRepositoryImpl implements KlubRepository
{
    public array $klub = array();

    function save(klub $klub): void
    {
        $no = sizeof($this->klub) + 1;
        $this->klub[$no] = $klub;
    }

    function delete(int $no): bool
    {
        if($no > sizeof($this->klub)){
            return false;
        }

        for($i = $no; $i < sizeof($this->klub); $i++){
            $this->klub[$i] = $this->klub[$i+1];
        }

        unset($this->klub[sizeof($this->klub)]);

        return true;
    }

    function findAll(): array
    {
        return $this->klub;
    }
}