<?php 

namespace View;

use Helper\InputHelper;
use Service\SkorService;

class SkorView
{
    protected skorService $skorService;

    public function __construct($skorService)
    {
        $this->skorService = $skorService;
    }

    function showSkor(): void 
    {
        while (true) {
            $this->skorService->showSkor();
    
            echo "Halaman Skor" . PHP_EOL;
            echo "1. Tambah Hasil Skor" . PHP_EOL;
            echo "2. Hapus Hasil Skor" . PHP_EOL;
            echo "X. Kembali Ke Menu Awal" . PHP_EOL;

            $pilihan = InputHelper::input("pilih");
            
            if($pilihan == "1"){
                $this->addSkor();
            }else if($pilihan == "2"){
                $this->deleteSkor();
            }else if($pilihan == "x"){
                break;
            }else{
                echo "Pilihan tidak dimengerti". PHP_EOL;
            }
        }
        echo "Sampai Jumpa Lagi!". PHP_EOL;
    }

    function addSkor(): void
    {
        echo "MENAMBAH HASIL SKOR". PHP_EOL;
        $klub1 = InputHelper::input("Nama Klub (x untuk batal)");

        if($klub1 == "x"){
            echo "Batal Menambah Data Skor". PHP_EOL;
        }else{
            $skor1 = InputHelper::input("Skor $klub1");
            if($skor1 == "x"){
                echo "Batal Menambah Data Skor". PHP_EOL;
            }else{
                $klub2 = InputHelper::input("Nama Klub (x untuk batal)");
                if($klub2 == "x"){
                    echo "Batal Menambah Data Skor". PHP_EOL;
                }else{
                    $skor2 = InputHelper::input("Skor $klub2 (x untuk batal)");
                    if($skor2 == "x"){
                        echo "Batal Menambah Data Skor". PHP_EOL;
                    }else{
                        $this->skorService->addSkor($klub1, $skor1, $klub2, $skor2);
                    }
                }
            }
        }
    }

    function deleteSkor(): void
    {
        echo "MENGHAPUS DATA SKOR". PHP_EOL;

        $pilihan = InputHelper::input("Nomor (x untuk batal)");
        
        echo $pilihan == "x" ? "Batal Menghapus Data Skor". PHP_EOL : $this->skorService->deleteSkor($pilihan);
    }
}