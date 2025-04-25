<?php
namespace App\Config;
use mysqli;

class DatabaseConfig{
    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = 'root';
    private static $db = 'aop';

    static function getConnection(){
        
        $mysql = new mysqli(
            self::$host,
            self::$username,
            self::$password,
            self::$db
        );

        return $mysql;
    }
}