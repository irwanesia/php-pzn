<?php

require_once __DIR__ . "/../Entity/Matchs.php";
require_once __DIR__ . "/../Entity/Team.php";
require_once __DIR__ . "/../Repository/MatchRepository.php";
require_once __DIR__ . "/../Repository/TeamRepository.php";
require_once __DIR__ . "/../Service/TeamService.php";
require_once __DIR__ . "/../Service/MatchService.php";
require_once __DIR__ . "/../View/MenuView.php";
require_once __DIR__ . "/../View/MenuView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../Config/Database.php";

use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;


function testViewShowTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar Database");

    $todolistView->showTodolist();
}

testViewShowTodolist();

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