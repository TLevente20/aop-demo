<?php
// Use this namespace
use Steampixel\Route;

Route::add('/', function() {
  echo 'Welcome :-)';
});

Route::run('/');