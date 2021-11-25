<?php

class BaseManager
{
    protected static function dbConnect()
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
        return $db;
    }
}
?>