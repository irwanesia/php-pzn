<?php

namespace Service;

use Entity\Standings;
use Repository\StandingRepository;

interface StandingService 
{
    function showStanding(): void;

    // function addStanding(string $standingId, Standings $standings): void;

    // function removeStanding(int $number): void;
}

class StandingServiceImpl implements StandingService
{

    private StandingRepository $standingRepository;

    public function __construct(StandingRepository $standingRepository)
    {
        $this->standingRepository = $standingRepository;
    }

    function showStanding(): void
    {
        echo "TODOLIST". PHP_EOL;
        $klasemen = $this->standingRepository->findAll();
        foreach($klasemen as $number => $value){
            // echo $number+1 .$value->getIdTim()." . " .$value->getIdTim()." . "
        }
    }

    // function addTodolist(string $todo): void
    // {
    //     $todolist = new Todolist($todo);
    //     $this->todolistRepository->save($todolist);
    //     echo "SUKSES MENAMBAH TODOLIST". PHP_EOL;
    // }

    // function removeTodolist(int $number): void
    // {
    //     if($this->todolistRepository->remove($number)){
    //         echo "SUKSES MENGHAPUS TODOLIST". PHP_EOL;
    //     }else{
    //         echo "GAGAL MENGHAPUS TODOLIST". PHP_EOL;
    //     }
    // }
}