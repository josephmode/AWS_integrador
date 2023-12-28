<?php

namespace App\Model;
use PDO;

class Conexion{
    public static function conexion (){
        $dsn = "mysql:host=localhost; port=3306; dbname=integrador; charset=utf8mb4";
        $user = "root";
        $pass = "123456789";
        $con = new PDO($dsn, $user, $pass);
        return $con;
    }
}

?>