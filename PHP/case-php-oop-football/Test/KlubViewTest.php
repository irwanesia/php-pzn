<?php

require_once __DIR__ . "/../Entity/Klub.php";
require_once __DIR__ . "/../Repository/KlubRepository.php";
require_once __DIR__ . "/../Service/KlubService.php";
require_once __DIR__ . "/../View/KlubView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use \Repository\KlubRepositoryImpl;
use \Service\KlubServiceImpl;
use \View\KlubView;

function testViewShowKlub(): void
{
    $KlubRepository = new KlubRepositoryImpl();
    $KlubService = new KlubServiceImpl($KlubRepository);
    $KlubView = new KlubView($KlubService);

    $KlubService->addKlub("Losari FC", "Cirebon Timur");
    $KlubService->addKlub("PSGJ", "Cirebon Kota");
    $KlubService->addKlub("Arjawingung FC", "Cirebon Barat");
    $KlubService->addKlub("Brebes FC", "Kab Brebes");

    $KlubView->showKlub();
}

// testViewShowKlub();

function testViewAddKlub(): void
{
    $KlubRepository = new KlubRepositoryImpl();
    $KlubService = new KlubServiceImpl($KlubRepository);
    $KlubView = new KlubView($KlubService);

    $KlubService->addKlub("Losari FC", "Cirebon Timur");
    $KlubService->addKlub("PSGJ", "Cirebon Kota");
    $KlubService->addKlub("Arjawingung FC", "Cirebon Barat");
    $KlubService->addKlub("Brebes FC", "Kab Brebes");

    $KlubView->addKlub();
    $KlubView->showKlub();
}

// testViewAddKlub();

function testViewRemoveKlub(): void
{
    $KlubRepository = new KlubRepositoryImpl();
    $KlubService = new KlubServiceImpl($KlubRepository);
    $KlubView = new KlubView($KlubService);

    $KlubService->addKlub("Losari FC", "Cirebon Timur");
    $KlubService->addKlub("PSGJ", "Cirebon Kota");
    $KlubService->addKlub("Arjawingung FC", "Cirebon Barat");
    $KlubService->addKlub("Brebes FC", "Kab Brebes");

    $KlubView->showKlub();
    $KlubView->delete();
    $KlubView->showKlub();
    $KlubView->delete();
}

// testViewRemoveKlub();