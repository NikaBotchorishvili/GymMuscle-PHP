<?php

namespace config;

use PDO;
use Exception;
class Database{

    private $user = "root";
    private $password = "";
    private $host = "localhost";
    private $tableName = "muscle-gym";
    public $pdo;

    public function __construct(){
        try{
            $this->pdo = new PDO("mysql:host=" . $this->host .";dbname=" . $this->tableName, $this->user, $this->password);
        }catch(Exception $e){
            print_r($e->getMessage());
        }
    }

    public function getData($table){
        $data = [];

        $query = "SELECT * FROM " . $table;

        
        $sql = $this->pdo->prepare($query);

        $sql->execute();

        while($row = $sql->fetch()){
            $data[] = $row;
        }
        return $data;
    }

    public function getSingleData($table){
        $data = [];

        $query = "SELECT * FROM " . $table;

        
        $sql = $this->pdo->prepare($query);

        $sql->execute();

        while($row = $sql->fetch()){
            $data = $row;
        }
        return $data;
    }
}