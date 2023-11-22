<?php

namespace Service;

use Entity\Skor;
use Repository\SkorRepository;

interface SkorService
{
    function showSkor(): void;

    function addSkor(string $klub1, int $skor1, string $klub2, int $skor2): void;

    function deleteSkor(int $no): void;
}


class SkorServiceImpl implements SkorService
{

    private skorRepository $skorRepository;

    public function __construct(skorRepository $skorRepository)
    {
        $this->skorRepository = $skorRepository;
    }

    function showSkor(): void
    {
        echo "Hasil Pertandingan". PHP_EOL;
        $skor = $this->skorRepository->findAll();
        foreach($skor as $no => $value){
            echo "$no : " . $value->getKlub1() . " (".$value->getSkor1().")" . " - " ."(".$value->getSkor2().") " . $value->getKlub2() . PHP_EOL;
        }
    }

    function addSkor(string $klub1="", int $skor1 = 0, string $klub2="", int $skor2= 0): void
    {
        $skor = new Skor($klub1, $skor1, $klub2, $skor2);
        $this->skorRepository->save($skor);
        echo "SUKSES MENAMBAH SKOR". PHP_EOL;
    }

    function deleteSkor(int $no): void
    {
        if($this->skorRepository->delete($no)){
            echo "SUKSES MENGHAPUS SKOR". PHP_EOL;
        }else{
            echo "GAGAL MENGHAPUS SKOR". PHP_EOL;
        }
    }
}