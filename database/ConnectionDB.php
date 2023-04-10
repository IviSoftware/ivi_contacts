<?php

class ConnectionDB{
    private static $instance;
    private $connection;
    private $isError;

    private function __construct()
    {
        $isErrorConn = $this->makeConnection();
        $this->isError = $isErrorConn;
    }

    private function makeConnection(){
       try {
        $conn = new PDO("mysql:host=localhost;dbname=ivi_contact;","ivi","minino");
        $this->connection = $conn;
        return false;
       } catch (\PDOException $error) {
        return true;
       }
    }

    public static function getInstance(){
        if(!self::$instance instanceof self)
            self::$instance = new self();
        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }

    public function getError(){
        return $this->isError;
    }
}