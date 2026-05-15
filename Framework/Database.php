<?php

namespace Framework;


use PDO;
use PDOException;
use Exception;
/**
 * Database class - Handles the database conncetion using PDO
 * (PHP Data Objects) - a secure and flexible way to connect
 * to database like MySQL, PostgreSQL, etc.
 */

class Database
{
    /**
     * Holds the active PDO connection instance.
     * Declared as public so other classess can access
     * $db->conn directly to run queries.
     */
    public $conn;
    /**
     * Constructor - automativally runs when you do: new Database($config)
     * 
     * Expects an associative array like: 
     * 
     */
    public function __construct($config)
    {
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];
        try {
            $this->conn = new PDO(
                $dsn,
                $config['username'],
                $config['password'],
                $options
            );
        } catch (PDOException $e) {
            throw new Exception("Database connection failed:
            {$e->getMessage()}");
        }

    }

    public function query($query, $params = [])
    {
        try {
            $sth = $this->conn->prepare($query);

            //Bind named parameters
            foreach ($params as $param => $value) {
                $sth->bindValue(':' . $param, $value);
            }
            $sth->execute();
            return $sth;
        } catch (PDOException $e) {
            throw new Exception("Query failed to execute: {$e->getMessage()}");
        }
    }
}