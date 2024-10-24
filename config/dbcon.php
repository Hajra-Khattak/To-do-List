<?php

namespace Config\Database;

use mysqli;

class Connection{
    private $dbhost = "localhost";
    private $dbusername = "root";
     private $dbpass = "";
     private $dbname = "testdb";

     public $conn;

     

     public function connect(){
        $this->conn = new mysqli($this->dbhost, $this->dbusername, $this->dbpass, $this->dbname);

        if($this->conn->connect_error){
            die("Connection Failed". $this->conn->connect_error);
        }
        return $this->conn;
        
    }
    
    
}


?>