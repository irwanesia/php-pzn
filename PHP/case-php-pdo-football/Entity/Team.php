<?php

namespace Entity;

class Team
{
    private int $id;
    private string $namaTeam;
    private string $kotaAsal;

    public function __construct(string $namaTeam="", string $kotaAsal= "")
    {
        $this->namaTeam = $namaTeam;
        $this->kotaAsal = $kotaAsal;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNamaTeam(): string
    {
        return $this->namaTeam;
    }

    public function setNamaTeam(string $namaTeam): void
    {
        $this->namaTeam = $namaTeam;
    }
    
    public function getKotaAsal(): string
    {
        return $this->kotaAsal;
    }

    public function setKotaAsal(string $kotaAsal): void
    {
        $this->kotaAsal = $kotaAsal;
    }
}