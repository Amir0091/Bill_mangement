<?php

class Dbh{

    // Database info
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "factory";        

    // Connecting to database
    protected function connect() {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $th) {
        print "Error!: " . $th->getMessage() . "<br/>";
        die();
        }
    }
}