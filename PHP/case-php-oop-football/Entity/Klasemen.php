<?php

namespace Entity;

class Klasemen
{
    private string $klub;
    private string $pts;

    public function __construct(string $klub="", string $kota="")
    {
        $this->klub = $klub;
        $this->kota = $kota;
    }

    public function getklub(): string
    {
        return $this->klub;
    }

    public function setklub(string $klub): void
    {
        $this->klub = $klub;
    }

    public function getKota(): string
    {
        return $this->kota;
    }

    public function setKota(string $kota): void
    {
        $this->kota = $kota;
    }
    
}