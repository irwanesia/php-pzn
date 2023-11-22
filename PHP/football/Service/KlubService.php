<?php

namespace Service;

use Entity\Klub;
use Repository\KlubRepository;

interface KlubService 
{
    function showKlub(): void;

    function addKlub(string $namaKlub, string $kota): void;

    function deleteKlub(int $no): void;
}


class KlubServiceImpl implements KlubService
{

    private klubRepository $klubRepository;

    public function __construct(klubRepository $klubRepository)
    {
        $this->klubRepository = $klubRepository;
    }

    function showKlub(): void
    {
        echo "List Nama Klub". PHP_EOL;
        $klub = $this->klubRepository->findAll();
        foreach($klub as $no => $value){
            echo "$no. Nama Klub: " . $value->getNamaKlub() . PHP_EOL;
            echo "   Asal Kota: " . $value->getKota(). PHP_EOL;
        }
    }

    function addKlub(string $namaKlub, string $kota): void
    {
        $klub = new Klub($namaKlub, $kota);
        $this->klubRepository->save($klub);
        echo "SUKSES MENAMBAH DATA KLUB". PHP_EOL;
    }

    function deleteKlub(int $no): void
    {
        if($this->klubRepository->delete($no)){
            echo "SUKSES MENGHAPUS KLUB". PHP_EOL;
        }else{
            echo "GAGAL MENGHAPUS KLUB". PHP_EOL;
        }
    }
}