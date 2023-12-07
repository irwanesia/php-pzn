<?php

namespace Entity;

class Skor
{
    private string $klub1;
    private string $klub2;
    private int $skor1;
    private int $skor2;

    public function __construct(string $klub1="", int $skor1 = 0, string $klub2="", int $skor2= 0)
    {
        $this->klub1 = $klub1;
        $this->klub2 = $klub2;
        $this->skor1 = $skor1;
        $this->skor2 = $skor2;
    }

    public function getklub1(): string
    {
        return $this->klub1;
    }

    public function setklub1(string $klub1): void
    {
        $this->klub1 = $klub1;
    }
    public function getklub2(): string
    {
        return $this->klub2;
    }

    public function setklub2(string $klub2): void
    {
        $this->klub2 = $klub2;
    }

    public function getSkor1(): int
    {
        return $this->skor1;
    }

    public function setSkor1(int $skor1): void
    {
        $this->skor1 = $skor1;
    }

    public function getSkor2(): int
    {
        return $this->skor2;
    }

    public function setSkor2(int $skor2): void
    {
        $this->skor2 = $skor2;
    }
    
}