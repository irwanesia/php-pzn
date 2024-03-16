<?php

// membuat routing dengan path_info dengan sederhana
// $path = "/index";

// if(isset($_SERVER['PATH_INFO'])){
//     $path = $_SERVER['PATH_INFO'];
// }

// require __DIR__ . '/../app/View' . $path . '.php';


// if(isset($_SERVER['PATH_INFO'])){
//     echo $_SERVER['PATH_INFO'];
// }eles{
//     echo "test";
// }


// membuat routes yg kompleks
require_once __DIR__ . '/../vendor/autoload.php';

use Codeir\BelajarPhpMvc\Router;

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/login', 'UserController', 'login');
Router::add('GET', '/register', 'UserController', 'register');

Router::run();