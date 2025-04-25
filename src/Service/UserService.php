<?php

namespace App\Service;
use App\Model\User;

class UserService{
    static function login($email, $password){

        $hashedPassword = User::login($email);

        if(password_verify($password, $hashedPassword)){
            return true;
        }else{
            return false;
        }
    }

    static function register($user){
        
        $password = $user->getPassword();
        $user->setPassword(password_hash($password, PASSWORD_DEFAULT));

        return User::register($user);
    }
}