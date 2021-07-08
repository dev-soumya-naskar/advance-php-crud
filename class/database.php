<?php

class DB{
    public $DB_HOST;
    public $DB_NAME;
    public $DB_USER;
    public $DB_PASSWORD;
    
    public $conn;
    public $SQL;


    public function __construct() {
        $this->DB_HOST = DBHOST;
        $this->DB_NAME = DBNAME;
        $this->DB_USER = DBUSER;
        $this->DB_PASSWORD = DBPASSWORD;
        $this->conn = null;
        $this->SQL = "";
        $this->dbconnect();
    }
    
    public function dbconnect(){
        $this->conn = mysqli_connect($this->DB_HOST,$this->DB_USER,$this->DB_PASSWORD);
        if(!$this->conn){
            return "Database Connection Error";
        }
        mysqli_select_db($this->conn,$this->DB_NAME);
    }
    public function setQuery($query){
        $this->SQL = $query;
    }
    public function execute(){
        if($this->SQL==""){
            return false;
        }
        $result = mysqli_query($this->conn,$this->SQL);
        $this->SQL = "";
        if($result===false){
            return "Query is not proper";
        }
        return mysqli_affected_rows($this->conn);
    }
    public function select(){
        if($this->SQL==""){
            return false;
        }
        $result = mysqli_query($this->conn,$this->SQL);
        $this->SQL = "";
        if($result===false){
            return "Query is not proper";
        }
        $records = array();
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $records[] = $row;
        }
        return $records;
    }
    public function selectOne(){
         if($this->SQL==""){
            return false;
        }
        $result = mysqli_query($this->conn,$this->SQL);
        $this->SQL = "";
        if($result===false){
            return "Query is not proper";
        }
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
}

