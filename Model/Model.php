<?php

class Model
{

    protected $db;
    private static string $tableName = '';

    public function __construct()
    {
        $this->db = Db::instance();
    }

    public static function getTableName():string
    {
        return self::$tableName;
    }

}