<?php

include '../../env.php';

class Database
{

    // specify your own database credentials
    public $conn;


    // get the database connection
    public function getConnection()
    {
        $dbName = $GLOBALS['DATABASE_NAME'];
        $dbHost = $GLOBALS['DATABASE_HOST'];
        $dbUsername = $GLOBALS['DATABASE_USER'];
        $dbUserPassword = $GLOBALS['DATABASE_PASSWORD'];

        $this->conn = null;
        try {

            $this->conn =  new PDO("mysql:host=" . $dbHost . ";" . "dbname=" . $dbName .  ";" . "charset=utf8", $dbUsername, $dbUserPassword);
            // $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
