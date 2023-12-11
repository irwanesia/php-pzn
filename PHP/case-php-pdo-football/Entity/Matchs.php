<?php

namespace Entity;

class Matchs
{
    private int $id_match;
    private string $timHome;
    private string $timAway;
    private int $skorTimHome;
    private int $skorTimAway;

    public function __construct(string $timHome="", string $timAway="", int $skorTimHome=0, int $skorTimAway=0)
    {
        $this->timHome = $timHome;
        $this->timAway = $timAway;
        $this->skorTimHome = $skorTimHome;
        $this->skorTimAway = $skorTimAway;
    }

    public function getIdMatch(): int
    {
        return $this->id_match;
    }

    public function setIdMatch(int $id_match): void
    {
        $this->id_match = $id_match;
    }

    public function getTimHome(): string
    {
        return $this->timHome;
    }

    public function setTimHome(string $timHome): void
    {
        $this->timHome = $timHome;
    }

    public function getTimAway(): string
    {
        return $this->timAway;
    }

    public function setTimAway(string $timAway): void
    {
        $this->timAway = $timAway;
    }

    public function getSkorTimHome(): int
    {
        return $this->skorTimHome;
    }

    public function setSkorTimHome(int $skorTimHome): void
    {
        $this->skorTimHome = $skorTimHome;
    }

    public function getSkorTimAway(): int
    {
        return $this->skorTimAway;
    }

    public function setSkorTimAway(int $skorTimAway): void
    {
        $this->skorTimAway = $skorTimAway;
    }

}