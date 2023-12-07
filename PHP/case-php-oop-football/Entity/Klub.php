<?php

namespace Entity;

class Klub
{
    private string $namaKlub;
    private string $kota;

    public function __construct(string $namaKlub="", string $kota="")
    {
        $this->namaKlub = $namaKlub;
        $this->kota = $kota;
    }

    public function getNamaKlub(): string
    {
        return $this->namaKlub;
    }

    public function setNamaKlub(string $namaKlub): void
    {
        $this->namaKlub = $namaKlub;
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