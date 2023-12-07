<?php 
use Entity\Klub;
use Repository\KlubRepositoryImpl;
use Service\KlubServiceImpl;

require_once __DIR__ . "/../Entity/Klub.php";
require_once __DIR__ . "/../Repository/KlubRepository.php";
require_once __DIR__ . "/../Service/KlubService.php";

function testShowKlub(): void
{
    $klubRepository = new KlubRepositoryImpl();
    $klubRepository->klub[1] = new Klub("Losari FC", "Cirebon Timur");
    $klubRepository->klub[2] = new Klub("PSGJ", "Cirebon Kota");
    $klubRepository->klub[3] = new Klub("Arjawingung FC", "Cirebon Barat");
    $klubRepository->klub[4] = new Klub("Brebes FC", "Kab Brebes");

    $klubService = new KlubServiceImpl($klubRepository);
    $klubService->showKlub();
}

// testShowKlub();

function testAddShowKlub(): void
{
    $klubRepository = new KlubRepositoryImpl();

    $klubService = new KlubServiceImpl($klubRepository);
    $klubService->addKlub("Losari FC", "Cirebon Timur");
    $klubService->addKlub("PSGJ", "Cirebon Kota");
    $klubService->addKlub("Arjawingung FC", "Cirebon Barat");
    $klubService->addKlub("Brebes FC", "Kab Brebes");

    $klubService = new KlubServiceImpl($klubRepository);
    $klubService->showKlub();
}

// testAddShowKlub();

function testDeleteKlub(): void
{
    $klubRepositry = new KlubRepositoryImpl();

    $klubService = new KlubServiceImpl($klubRepositry);
    $klubService->addKlub("Losari FC", "Cirebon Timur");
    $klubService->addKlub("PSGJ", "Cirebon Kota");
    $klubService->addKlub("Arjawingung FC", "Cirebon Barat");
    $klubService->addKlub("Brebes FC", "Kab Brebes");

    $klubService->showKlub();
    $klubService->deleteKlub(3);
    $klubService->showKlub();
    // $klubService->deleteKlub(3);
    // $klubService->showKlub();
    // $klubService->deleteKlub(1);
    // $klubService->showKlub();
    // $klubService->deleteKlub(0);
    // $klubService->showKlub();
}

testDeleteKlub();