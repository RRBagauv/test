<?php

class Db
{

    protected $db;
    private static $instance;

    private function __construct()
    {
        $data = require_once __DIR__ . 'settings/settings.php';
        try {
            $this->db = new PDO("mysql={$data['host']};dbname={$data['dbname']}", $data["name"], $data['password']);
        } catch (\PDOException $e) {
            echo 'Error';
        }
    }

    public static function instance()
    {
        if (self::$instance == null){
            $data = require_once __DIR__ . 'settings/settings.php';
            try {
                self::$instance = new PDO("mysql={$data['host']};dbname={$data['dbname']}", $data["name"], $data['password']);
            } catch (\PDOException $e) {
                echo 'Error';
            }
        }
        return self::$instance;
    }

}