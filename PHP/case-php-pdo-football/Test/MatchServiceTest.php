<?php

require_once __DIR__ . "/../Entity/Matchs.php";
require_once __DIR__ . "/../Repository/MatchRepository.php";
require_once __DIR__ . "/../Service/MatchService.php";
require_once __DIR__ . "/../Config/Database.php";

use Service\MatchServiceImpl;
use Repository\MatchRepositoryImpl;

function testShowMatch(): void
{
    $connection = \Config\Database::getConnection();
    $matchRepository = new MatchRepositoryImpl($connection);
    $matchService = new MatchServiceImpl($matchRepository);
    $matchService->showMatch();

}

function testAddMatch(): void
{
    $connection = \Config\Database::getConnection();
    $matchRepository = new MatchRepositoryImpl($connection);

    $matchService = new MatchServiceImpl($matchRepository);
    $matchService->addMatch(7, 4, 3, 0);

    // $todolistService->showTodolist();
}

// function testRemoveTodolist(): void
// {
//     $connection = \Config\Database::getConnection();
//     $matchRepository = new MatchRepositoryImpl($connection);

//     $matchService = new MatchServiceImpl($matchRepository);
    
//     $matchService->removeMatch(3);
//     $matchService->removeMatch(5);
//     $matchService->removeMatch(4);
//     $matchService->removeMatch(1);
//     $matchService->removeMatch(7);

// }

testAddMatch();
testShowMatch();
// testRemoveTodolist();