<?php 
use Entity\Skor;
use Repository\SkorRepositoryImpl;
use Service\SkorServiceImpl;

require_once __DIR__ . "/../Entity/Skor.php";
require_once __DIR__ . "/../Repository/SkorRepository.php";
require_once __DIR__ . "/../Service/SkorService.php";

function testShowSkor(): void
{
    $skorRepository = new SkorRepositoryImpl();
    $skorRepository->skor[1] = new Skor("Losari FC", 3, "Brebes FC", 2);
    $skorRepository->skor[2] = new Skor("PSGJ", 1, "Persela", 0);
    $skorRepository->skor[3] = new Skor("Sidaresmi", 0, "Permas FC", 2);

    $skorService = new SkorServiceImpl($skorRepository);
    $skorService->showSkor();
}

// testShowSkor();

function testAddShowSkor(): void
{
    $skorRepository = new SkorRepositoryImpl();

    $skorService = new SkorServiceImpl($skorRepository);
    $skorService->addSkor("Losari FC", 3, "Brebes FC", 2);
    $skorService->addSkor("PSGJ", 1, "Persela", 0);
    $skorService->addSkor("Sidaresmi", 0, "Permas FC", 2);

    $skorService = new SkorServiceImpl($skorRepository);
    $skorService->showskor();
}

// testAddShowSkor();

function testDeleteSkor(): void
{
    $skorRepository = new SkorRepositoryImpl();

    $skorService = new SkorServiceImpl($skorRepository);
    $skorService->addSkor("Losari FC", 3, "Brebes FC", 2);
    $skorService->addSkor("PSGJ", 1, "Persela", 0);
    $skorService->addSkor("Sidaresmi", 0, "Permas FC", 2);

    $skorService = new SkorServiceImpl($skorRepository);

    $skorService->showSkor();
    $skorService->deleteSkor(3);
    $skorService->showSkor();
}

testDeleteSkor();