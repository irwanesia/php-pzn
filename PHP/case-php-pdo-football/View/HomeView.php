<?php

namespace View;

use Helper\InputHelper;
use Service\HomeService;
// use Service\KlasemenService;
use Service\TeamService;
use Service\MatchService;

class HomeView
{
    public function __construct(private HomeService $homeService, 
                                private TeamService $teamService, 
                                // private KlasemenService $klasemenService, 
                                private MatchService $matchService)
    {

    }

    function menuBeranda(): void
    {
        while(true){
            $this->homeService->showMenuHome();

            echo "MENU APLIKASI FOOTBALL" . PHP_EOL;
            echo "1. MENU DATA KLUB". PHP_EOL;
            echo "2. MENU MATCH". PHP_EOL;
            echo "3. MENU KLASEMEN". PHP_EOL;
            echo "X. LOGOUT". PHP_EOL;

            $pilihan = InputHelper::input("Pilih");
            
            if($pilihan == "1"){
                $this->teamService->showTeam();
            }else if($pilihan == "2"){
                $this->matchService->showMatch();
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