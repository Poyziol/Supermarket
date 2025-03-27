<?php

use app\controllers\HomeController;
use app\controllers\LoginController;
use flight\Engine;
use flight\net\Router;
//use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */

Flight::route("GET /", function () {
    Flight::render('login');
});

Flight::route("GET /lobby", function () {
    Flight::render('template');
});

Flight::route("POST /checkUser", function() {
    $controller = new LoginController();
    $controller->loginUser();
});

Flight::route("POST /addUser", function() {
    $controller = new LoginController();
    $controller->addUser();
});