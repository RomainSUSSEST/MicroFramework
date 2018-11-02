<?php

namespace App;

class App
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'microframework';
    const DB_USER = 'root';
    const DB_PASS = '';

    private static $title = 'Microframework - Romain SUSSEST';

    private static $database;

    public static function getDatabase()
    {
        if(self::$database === null)
        {
            self::$database =  new Database(self::DB_NAME, self::DB_HOST, self::DB_USER, self::DB_PASS);
        }

        return self::$database;
    }

    public static function notFound()
    {
        header("HTTP/1.0 404 N ot Found");
        header('Location:index.php?page=404');
    }

    public static function getTitle()
    {
        return self::$title;
    }

    public static function setTitle($title)
    {
        self::$title = $title;
    }
}