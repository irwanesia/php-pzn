<?php 

namespace View;

use Helper\InputHelper;
use Service\KlubService;

class KlubView
{
    protected klubService $klubService;

    public function __construct($klubService)
    {
        $this->klubService = $klubService;
    }

    function showKlub(): void 
    {
        while (true) {
            $this->klubService->showKlub();
    
            echo "Halaman Klub" . PHP_EOL;
            echo "1. Tambah Data Klub" . PHP_EOL;
            echo "2. Hapus Data Klub" . PHP_EOL;
            echo "X. Kembali Ke Menu Awal" . PHP_EOL;

            $pilihan = InputHelper::input("pilih");
            
            if($pilihan == "1"){
                $this->addKlub();
            }else if($pilihan == "2"){
                $this->delete();
            }else if($pilihan == "x"){
                break;
            }else{
                echo "Pilihan tidak dimengerti". PHP_EOL;
            }
        }
        echo "Sampai Jumpa Lagi!". PHP_EOL;
    }

    function addKlub(): void
    {
        echo "MENAMBAH DATA KLUB". PHP_EOL;
        $klub = InputHelper::input("Nama Klub (x untuk batal)");

        if($klub == "x"){
            echo "Batal Menambah Data Klub". PHP_EOL;
        }else{
            $kota = InputHelper::input("Nama Kota (x untuk batal)");
            if($kota == "x"){
                echo "Batal Menambah Data Kota Klub". PHP_EOL;
            }else{
                $this->klubService->addKlub($klub, $kota);
            }
        }
    }

    function delete(): void
    {
        echo "MENGHAPUS DATA KLUB". PHP_EOL;

        $pilihan = InputHelper::input("Nomor (x untuk batal)");
        
        echo $pilihan == "x" ? "Batal Menghapus Data Klub". PHP_EOL : $this->klubService->deleteKlub($pilihan);
    }
}