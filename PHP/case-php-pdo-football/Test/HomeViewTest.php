<?php

require_once __DIR__ . "/../Entity/Matchs.php";
require_once __DIR__ . "/../Entity/Team.php";
require_once __DIR__ . "/../Repository/MatchRepository.php";
require_once __DIR__ . "/../Repository/TeamRepository.php";
require_once __DIR__ . "/../Service/TeamService.php";
require_once __DIR__ . "/../Service/MatchService.php";
require_once __DIR__ . "/../Service/HomeService.php";
require_once __DIR__ . "/../View/HomeView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Config/Database.php";


use \Repository\TeamRepositoryImpl;
use \Repository\MatchRepositoryImpl;
use \Service\TeamServiceImpl;
use \Service\MatchServiceImpl;
use \Service\HomeServiceImpl;
use \View\HomeView;


function testViewShowHome(): void
{
    $connection = \Config\Database::getConnection();
    $teamRepository = new TeamRepositoryImpl($connection);
    $matchRepository = new MatchRepositoryImpl($connection);

    $teamService = new TeamServiceImpl($teamRepository);
    $matchService = new MatchServiceImpl($matchRepository);
    $homeService = new HomeServiceImpl();

    $homeView = new HomeView($homeService, $teamService, $matchService);

    $homeView->menuBeranda();
}

testViewShowHome();

// function testViewAddTodolist(): void
// {
//     $todolistRepository = new TodolistRepositoryImpl();
//     $todolistService = new TodolistServiceImpl($todolistRepository);
//     $todolistView = new TodolistView($todolistService);

//     $todolistService->addTodolist("Belajar PHP");
//     $todolistService->addTodolist("Belajar PHP OOP");
//     $todolistService->addTodolist("Belajar Database");

//     $todolistView->addTodolist();
//     $todolistView->showTodolist();
//     // $todolistView->addTodolist();
//     // $todolistView->showTodolist();
// }

// // testViewAddTodolist();

// function testViewRemoveTodolist(): void
// {
//     $todolistRepository = new TodolistRepositoryImpl();
//     $todolistService = new TodolistServiceImpl($todolistRepository);
//     $todolistView = new TodolistView($todolistService);

//     $todolistService->addTodolist("Belajar PHP");
//     $todolistService->addTodolist("Belajar PHP OOP");
//     $todolistService->addTodolist("Belajar Database");

//     $todolistView->showTodolist();
//     $todolistView->removeTodolist();
//     $todolistView->showTodolist();
//     $todolistView->removeTodolist();
// }

// testViewRemoveTodolist();