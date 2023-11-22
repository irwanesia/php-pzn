<?php

require_once 'data/Programmer.php';

$company = new Company();
$company->programmer = new Programmer("irwan");
var_dump($company);

$company->programmer = new BackendProgrammer("nirwana");
var_dump($company);

$company->programmer = new FrontendProgrammer("Andai");
var_dump($company);

sayHelloProg(new Programmer("Aamiin"));
sayHelloProg(new BackendProgrammer("Ya"));
sayHelloProg(new FrontendProgrammer("Robal Alamiin"));


sayHelloProgrammer(new Programmer("Aamiin"));
sayHelloProgrammer(new BackendProgrammer("Ya"));
sayHelloProgrammer(new FrontendProgrammer("Robal Alamiin"));
