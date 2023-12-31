<?php

namespace Service;

use Entity\Matchs;
use Repository\MatchRepository;
// use Repository\TeamRepository;

interface MatchService 
{
    function showMatch(): void;

    function addMatch(string $tim1, string $tim2, int $skorTimHome, int $skorTimAway): void;

    function removeMatch(int $number): void;
}

class MatchServiceImpl implements MatchService
{
    public function __construct(private MatchRepository $matchRepository)
    {

    }

    function showMatch(): void
    {
        echo "Match Day". PHP_EOL;
        $match = $this->matchRepository->findAll();
        foreach($match as $number => $value){
            echo $number+1 .". ". $value->getTimHome() ." (". $value->getSkorTimHome() .") - "."(". $value->getSkorTimAway() .") ". $value->getTimAway(). PHP_EOL;
        }
    }

    function addMatch(string $tim1, string $tim2, int $skorTimHome, int $skorTimAway): void
    {
        $match = new Matchs($tim1, $tim2, $skorTimHome, $skorTimAway);
        $this->matchRepository->save($match);
        echo "SUKSES MENAMBAH PERTANDINGAN". PHP_EOL;
    }

    function removeMatch(int $number): void
    {
        if($this->matchRepository->remove($number)){
            echo "SUKSES MENGHAPUS PERTANDINGAN". PHP_EOL;
        }else{
            echo "GAGAL MENGHAPUS PERTANDINGAN". PHP_EOL;
        }
    }
}