<?php
// Use this namespace
use Steampixel\Route;

require_once 'Controller/UserController.php';

Route::add('/', function() {
  echo 'This is Home :D';
});

Route::add('/login', function() {
  return UserController::login();
},'post');

Route::add('/register', function() {
  return UserController::register();
},'post');

Route::run('/');