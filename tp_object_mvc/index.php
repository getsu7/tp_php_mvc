<?php

require 'src/controller/HomeController.php';
require 'src/controller/AddUserController.php';
require 'src/controller/ListUserController.php';
require 'src/controller/LoginUserController.php';
require 'src/controller/ShowUserController.php';
require 'src/model/Model.php';

session_start();

$page = filter_input(INPUT_GET, 'page');

$route = [
    "home" => HomeController::class,
    "signup" => AddUserController::class,
    "login" => LoginUserController::class,
    "show" => ShowUserController::class,
    "list" => ListUserController::class
];

foreach ($route as $routeValue => $className) {

    if ($page === $routeValue) {

        $controller = new $className;
        $controller->manage();
        break;
    }
}

if (!isset($controller)) {
    $controller = new HomeController();
    $controller->manage();
}