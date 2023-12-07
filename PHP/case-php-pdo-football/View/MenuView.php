<?php

namespace View;

use Helper\InputHelper;
use Service\HomeService;
// use Service\KlasemenService;
use Service\TeamService;
use Service\MatchService;

class MenuView
{
    public function __construct(private HomeService $homeService, 
                                private TeamService $teamService, 
                                // private KlasemenService $klasemenService, 
                                private MatchService $pertandinganService)
    {

    }

    function menuBeranda(): void
    {
        while(true){
            $this->homeService->showMenuHome();

            echo "MENU APLIKASI FOOTBALL" . PHP_EOL;
            echo "1. Data Klub". PHP_EOL;
            echo "2. Data Pertandingan". PHP_EOL;
            echo "3. Klasemen". PHP_EOL;
            echo "X. Keluar". PHP_EOL;

            $pilihan = InputHelper::input("Pilih");
            
            if($pilihan == "1"){
                $this->teamService->showTeam();
            }else if($pilihan == "2"){
                $this->pertandinganService->showMatch();
            }else if($pilihan == "3"){
                // $this->klasemenService->showKlasemen();
            }else if($pilihan == "x"){
                break;
            }else{
                echo "Pilihan tidak dimengerti". PHP_EOL;
            }
        }
        echo "Sampai Jumpa Lagi!". PHP_EOL;
    }

}