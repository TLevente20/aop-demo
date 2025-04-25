<?php
// Use this namespace
use Steampixel\Route;
use App\Controller\UserController;

$controller = new UserController();

Route::add('/', function () {
    echo 'This is Home :D';
});

Route::add('/login', function () use ($controller) {
    return $controller->login();
}, 'post');

Route::add('/register', function () use ($controller) {
    return $controller->register();
}, 'post');

Route::run('/');