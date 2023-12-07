<?php

use Entity\Team;
use Service\TeamServiceImpl;
use Repository\TeamRepositoryImpl;

require_once __DIR__ . "/../Entity/Team.php";
require_once __DIR__ . "/../Repository/TeamRepository.php";
require_once __DIR__ . "/../Service/TeamService.php";
require_once __DIR__ . "/../Config/Database.php";

function testShowTeam(): void
{
    $connection = \Config\Database::getConnection();
    $teamRepository = new TeamRepositoryImpl($connection);

    // $todolistRepository->todolist[1] = new Todolist("Belajara PHP");
    // $todolistRepository->todolist[2] = new Todolist("Belajara PHP OOP");
    // $todolistRepository->todolist[3] = new Todolist("Belajara PHP DATABASE");

    $teamService = new TeamServiceImpl($teamRepository);
    $teamService->showTeam();

}

function testAddTeam(): void
{
    $connection = \Config\Database::getConnection();
    $teamRepository = new TeamRepositoryImpl($connection);

    $teamService = new TeamServiceImpl($teamRepository);
    $teamService->addteam("Juventus", "Turin");
    $teamService->addteam("AC Milan", "Milan");
    $teamService->addteam("Napoli FC", "Naples");

    // $todolistService->showTodolist();
}

function testRemoveTeam(): void
{
    $connection = \Config\Database::getConnection();
    $teamRepository = new TeamRepositoryImpl($connection);

    $teamService = new TeamServiceImpl($teamRepository);
    
    $teamService->removeTeam(2);
    $teamService->removeTeam(3);
    // $teamService->removeTeam(2);

}

// testAddTeam();
testShowTeam();
// testRemoveTeam();
// testShowTeam();