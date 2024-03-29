<?php

namespace MVC\Config;

use PDO;

class Database
{
    private static $bdd = null;

    private function __construct() {
    }
// pass: 
    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=localhost; dbname=aht_mvc", 'root', 'J2 applycation');
        }
        return self::$bdd;
    }
}
?>