<?php 

abstract class Auth{
     
    protected static $pdo;

    private static function setBdd(){
            self::$pdo = new PDO('mysql:host=localhost;dbname=igpedia_db;charset=utf8', "root", "avent,ura123");
    }

    public static function getBdd(){
          
        if (self::$pdo == null){
            self::setBdd();
        }

    return self::$pdo;

    }
}