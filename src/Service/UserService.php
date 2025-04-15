<?php

require_once '../Model/User.php';

class UserService{
    static function login($email, $password){

        $modelResult =  User::login($email);
        
    }

    static function register($user){
        
        $password = $user->getPassword();
        $user->setPassword(password_hash($password, PASSWORD_DEFAULT));

        return UserService::register($user);
    }
}