<?php

class Database
{
    private $dbName = "id10959264_candirecruit";
    private $dbHost = "localhost";
    private $userName = "id10959264_aminat";
    private $password = "AminatCanCode_123";
    private $charset = "utf8";

    public $conn;

    private $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    public function getConnection(){
        $this->conn = null;
        $dsn = "mysql:host={$this->dbHost};dbname={$this->dbName};charset={$this->charset}";
        try{
            $this->conn = new PDO($dsn,$this->userName,$this->password,$this->opt);
            return $this->conn;
        }catch(PDOException $ex){
            echo "There is problem in Connection".$ex->getMessage();
        }
    }
}