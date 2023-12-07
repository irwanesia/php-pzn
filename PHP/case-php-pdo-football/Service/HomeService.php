<?php

namespace Service;

// use Entity\Team;
// use Repository\TeamRepository;

interface HomeService 
{
    function showMenuHome(): void;
}

class HomeServiceImpl implements HomeService
{

    // private TeamRepository $teamRepository;

    // public function __construct(TeamRepository $teamRepository)
    // {
    //     $this->teamRepository = $teamRepository;
    // }

    function showMenuHome(): void
    {
        echo "Aplikasi Klasemen Football". PHP_EOL;
    }
    
}