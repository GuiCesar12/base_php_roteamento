<?php
namespace app\models;
use PDO;
class Connection{
    public static function connect(){
        $pdo = new PDO("mysql:host=172.18.0.2;dbname=gprojects;charset=utf8","root","root");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        return $pdo;
    }
}