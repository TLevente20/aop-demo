<?php
require_once 'src/Service/UserService.php';

class UserController{

    public function login($message = "default"){
        var_dump($message);
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = UserService::login($email, $password);
        if($result){
            echo 'User Logged In';
        }else{
            echo 'Invalid Credencials';
        }
    }

    static function register(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($name,$email,$password);
        $result = UserService::register($user);

        if($result){
            echo 'User Registered';
        }else{
            echo 'Registration Failed';
        }

    }
}