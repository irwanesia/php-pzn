<?php

namespace View;

use Helper\InputHelper;
use Service\MatchService;

class MatchView
{
    private MatchService $matchService;

    public function __construct(MatchService $matchService)
    {
        $this->matchService = $matchService;
    }

    function showMatch(): void
    {
        while(true){
            $this->matchService->showMatch();

            echo "MENU" . PHP_EOL;
            echo "1. Tambah Pertandingan". PHP_EOL;
            echo "2. Hapus Pertandingan". PHP_EOL;
            echo "3. Kembali Ke Beranda". PHP_EOL;
            echo "X. Keluar". PHP_EOL;

            $pilihan = InputHelper::input("Pilih");
            
            if($pilihan == "1"){
                $this->addMatch();
            }else if($pilihan == "2"){
                $this->removeMatch();
            }else if($pilihan == "x"){
                break;
            }else{
                echo "Pilihan tidak dimengerti". PHP_EOL;
            }
        }
        echo "Sampai Jumpa Lagi!". PHP_EOL;
    }

    function addMatch(): void
    {
        echo "MENAMBAH PERTANDINGAN" . PHP_EOL;
        $timHome = InputHelper::input("Masukan Tim Home (x untuk batal)");

        if($timHome == "x"){
            echo "Batal menambah tim". PHP_EOL;
        }else{
            $timAway = InputHelper::input("Masukan Tim Away (x untuk batal)");
            if($timAway == "x"){
                echo "Batal menambah tim". PHP_EOL;
            }else{
                $skorTimHome = InputHelper::input("Skor Tim Home (x untuk batal)");
                if($skorTimHome == "x"){
                    echo "Batal menambah skor". PHP_EOL;
                }else{
                    $skorTimAway = InputHelper::input("Skor Tim Away (x untuk batal)");
                    if($skorTimAway == "x"){
                        echo "Batal menambah skor". PHP_EOL;
                    }else{
                        $this->matchService->addMatch($timHome, $skorTimHome, $skorTimAway, $timAway);
                    }
                }
            }
        }

    }

    function removeMatch(): void
    {
        echo "MENGHAPUS PERTANDINGAN" . PHP_EOL;

        $pilihan = InputHelper::input("Nomor (x untuk batal)");

        if($pilihan == "x"){
            echo "Batal menghapus pertandingan". PHP_EOL;
        }else{
            $this->matchService->removeMatch($pilihan);
        }
    }
}