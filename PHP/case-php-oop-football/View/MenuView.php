<?php 


namespace View;

require_once __DIR__ ."/View/KlubView.php";
require_once __DIR__ ."/View/MenuView.php";

use Helper\InputHelper;
use View\KlubView;
use View\MenuVIew;

class MenuView
{
    protected klubService $klubService;

    public function __construct($klubService)
    {
        $this->klubService = $klubService;
    }

    function menu(): void 
    {
        while (true) {
            echo "Halaman Home" . PHP_EOL;
            echo "1. Klasemen" . PHP_EOL;
            echo "2. Skor" . PHP_EOL;
            echo "3. Daftar Klub" . PHP_EOL;
            echo "X. Keluar" . PHP_EOL;

            $pilihMenu = InputHelper::input("Pilih Menu");

            if($pilihMenu == "1") {
                $this->showKlasemen();
            }elseif ($pilihMenu == "2") {
                $this->showSkor();
            }elseif ($pilihMenu == "3") {
                $this->showKlub();
            }elseif ($pilihMenu == "x"){
                break;
            }else{
                echo "Salah Pilih Menu!". PHP_EOL;
            }
        }
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
                $this->menu();
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