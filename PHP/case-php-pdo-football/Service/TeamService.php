<?php

namespace Service;

use Entity\Team;
use Repository\TeamRepository;

interface TeamService 
{
    function showTeam(): void;

    function addTeam(string $namaTeam, string $kotaAsal): void;

    function removeTeam(int $number): void;
}

class TeamServiceImpl implements TeamService
{

    private TeamRepository $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    function showTeam(): void
    {
        echo "Daftar Nama Klub". PHP_EOL;
        $team = $this->teamRepository->findAll();
        foreach($team as $number => $value){
            echo $number+1 .". Nama Klub : ". $value->getNamaTeam(). PHP_EOL;
            echo "   Kota Asal : ". $value->getKotaAsal(). PHP_EOL;
        }
    }

    function addTeam(string $namaTeam, string $kotaAsal): void
    {
        $team = new Team($namaTeam, $kotaAsal);
        $this->teamRepository->save($team);
        echo "SUKSES MENAMBAH TIM". PHP_EOL;
    }

    function removeTeam(int $number): void
    {
        if($this->teamRepository->remove($number)){
            echo "SUKSES MENGHAPUS TIM". PHP_EOL;
        }else{
            echo "GAGAL MENGHAPUS TIM". PHP_EOL;
        }
    }
}