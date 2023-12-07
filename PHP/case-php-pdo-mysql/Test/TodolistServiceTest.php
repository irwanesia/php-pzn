<?php

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";

function testShowTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    // $todolistRepository->todolist[1] = new Todolist("Belajara PHP");
    // $todolistRepository->todolist[2] = new Todolist("Belajara PHP OOP");
    // $todolistRepository->todolist[3] = new Todolist("Belajara PHP DATABASE");

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showTodolist();

}

function testAddTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajara PHP");
    $todolistService->addTodolist("Belajara PHP OOP");
    $todolistService->addTodolist("Belajara PHP DATABASE");

    // $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    
    $todolistService->removeTodolist(3);
    $todolistService->removeTodolist(5);
    $todolistService->removeTodolist(4);
    $todolistService->removeTodolist(1);
    $todolistService->removeTodolist(7);

}

// testAddTodolist();
testShowTodolist();
// testRemoveTodolist();