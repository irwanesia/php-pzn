<?php

require_once __DIR__ . "/../Entity/Team.php";
require_once __DIR__ . "/../Repository/TeamRepository.php";
require_once __DIR__ . "/../Service/TeamService.php";
require_once __DIR__ . "/../Service/HomeService.php";
require_once __DIR__ . "/../View/TeamView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Config/Database.php";

use \Entity\Team;
use \Repository\TeamRepositoryImpl;
use \Service\TeamServiceImpl;
use \Service\HomeServiceImpl;
use \View\TeamView;


function testViewShowTeam(): void
{
    $connection = \Config\Database::getConnection();
    $teamRepository = new TeamRepositoryImpl($connection);
    $teamService = new TeamServiceImpl($teamRepository);
    $homeService = new HomeServiceImpl();
    $teamView = new TeamView($teamService, $homeService);

    $teamView->showTeam();
}

testViewShowTeam();

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