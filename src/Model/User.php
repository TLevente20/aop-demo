<?php
namespace App\Model;
use App\Config\DatabaseConfig;
use Exception;

class User
{
    private $id;
    private $name;
    private $email;
    private $password;
    public function __construct($name,  $email,  $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    static function login($email)
    {
        try {
            $mysql = DatabaseConfig::getConnection();

            $sql = "SELECT * FROM user WHERE email = '$email';";
            $result = $mysql->query($sql);
            return $result->fetch_assoc()['password'];

        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    static function register($user)
    {
        try {
            $mysql = DatabaseConfig::getConnection();

            $name = $user->getName();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $sql = "INSERT INTO user (`name`,`email`,`password`) VALUES ('$name', '$email', '$password');";

            $mysql->query($sql);

            return true;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
}
