<?php

require_once __DIR__ . "/../Entity/Skor.php";
require_once __DIR__ . "/../Repository/SkorRepository.php";
require_once __DIR__ . "/../Service/SkorService.php";
require_once __DIR__ . "/../View/SkorView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use \Repository\SkorRepositoryImpl;
use \Service\SkorServiceImpl;
use \View\SkorView;

function testViewShowSkor(): void
{
    $skorRepository = new SkorRepositoryImpl();
    $skorService = new SkorServiceImpl($skorRepository);
    $skorView = new SkorView($skorService);

    $skorService->addSkor("Losari FC", 3, "Brebes FC", 2);
    $skorService->addSkor("PSGJ", 1, "Persela", 0);
    $skorService->addSkor("Sidaresmi", 0, "Permas FC", 2);

    $skorView->showSkor();
}

testViewShowSkor();

function testViewAddSkor(): void
{
    $skorRepository = new SkorRepositoryImpl();
    $skorService = new SkorServiceImpl($skorRepository);
    $skorView = new SkorView($skorService);

    $skorService->addSkor("Losari FC", 3, "Brebes FC", 2);
    $skorService->addSkor("PSGJ", 1, "Persela", 0);
    $skorService->addSkor("Sidaresmi", 0, "Permas FC", 2);

    $skorView->addSkor();
    $skorView->showSkor();
}

// testViewAddKlub();

function testViewRemoveSkor(): void
{
    $skorRepository = new SkorRepositoryImpl();
    $skorService = new SkorServiceImpl($skorRepository);
    $skorView = new SkorView($skorService);

    $skorService->addSkor("Losari FC", 3, "Brebes FC", 2);
    $skorService->addSkor("PSGJ", 1, "Persela", 0);
    $skorService->addSkor("Sidaresmi", 0, "Permas FC", 2);

    $skorView->showSkor();
    $skorView->deleteSkor();
    $skorView->showSkor();
    $skorView->deleteSkor();
}

// testViewRemoveKlub();