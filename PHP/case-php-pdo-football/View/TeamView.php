<?php

namespace View;

use Helper\InputHelper;
use Service\TeamService;
use Service\HomeService;

class TeamView
{
    private TeamService $teamService;
    private HomeService $homeService;

    public function __construct(TeamService $teamService, HomeService $homeService)
    {
        $this->teamService = $teamService;
        $this->homeService = $homeService;
    }


    function showTeam(): void
    {
        while(true){
            $this->teamService->showTeam();

            echo "MENU DATA KLUB" . PHP_EOL;
            echo "1. Tambah Data Klub". PHP_EOL;
            echo "2. Hapus Data Klub". PHP_EOL;
            echo "3. Kembali Ke Beranda". PHP_EOL;
            echo "X. Keluar". PHP_EOL;

            $pilihan = InputHelper::input("Pilih");
            
            if($pilihan == "1"){
                $this->addTeam();
            }else if($pilihan == "2"){
                $this->removeTeam();
            }else if($pilihan == "3"){
                $this->homeService->showMenuHome();
            }else if($pilihan == "x"){
                break;
            }else{
                echo "Pilihan tidak dimengerti". PHP_EOL;
            }
        }
        echo "Sampai Jumpa Lagi!". PHP_EOL;
    }

    function addTeam(): void
    {
        echo "MENAMBAH DATA KLUB" . PHP_EOL;
        $namaKlub = InputHelper::input("Nama Klub (x untuk batal)");
        $kotaAsal = InputHelper::input("Kota Asal (x untuk batal)");

        if($namaKlub == "x"){
            echo "Batal menambah klub". PHP_EOL;
        }else{
            if($kotaAsal == "x"){
                echo "Batal menambah klub". PHP_EOL;
            }else{
                $this->teamService->addTeam($namaKlub, $kotaAsal);
            }
        }
    }

    function removeTeam(): void
    {
        echo "MENGHAPUS DATA KLUB" . PHP_EOL;

        $pilihan = InputHelper::input("Nomor (x untuk batal)");

        if($pilihan == "x"){
            echo "Batal menghapus team". PHP_EOL;
        }else{
            $this->teamService->removeTeam($pilihan);
        }
    }
}