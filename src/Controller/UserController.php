<?php

namespace App\Controller;

use App\Service\UserService;
use App\Model\User;

class UserController
{
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = UserService::login($email, $password);
        echo $result ? 'User Logged In' : 'Invalid Credentials';
    }

    public function register()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($name, $email, $password);
        $result = UserService::register($user);

        echo $result ? 'User Registered' : 'Registration Failed';
    }
}
