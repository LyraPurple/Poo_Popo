<?php

class Database
{
    private static $pdo;

    public static function getInstance()
    {
        /** Grâce à le static, on créay qu'une seule fowâ notre connexion 💪
        *Après ça ne bouge plus, on est comme ça, optimisay, que voulay vous. 
        */
        if (null === self::$pdo) { 
            self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=vtc;charset=utf8', 'root', '', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }

        return self::$pdo;
    }
}
