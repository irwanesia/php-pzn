<?php

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("Belajara PHP");
    $todolistRepository->todolist[2] = new Todolist("Belajara PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("Belajara PHP DATABASE");

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showTodolist();

}

function testAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajara PHP");
    $todolistService->addTodolist("Belajara PHP OOP");
    $todolistService->addTodolist("Belajara PHP DATABASE");

    $todolistService->showTodolist();


}
function testRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajara PHP");
    $todolistService->addTodolist("Belajara PHP OOP");
    $todolistService->addTodolist("Belajara PHP DATABASE");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();

}

testRemoveTodolist();