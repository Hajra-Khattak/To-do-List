
<?php

namespace Config\Database;

use PDO;
use PDOException;

class Connection{
    private $dbhost = "localhost";
    private $dbusername = "root";
     private $dbpass = "";
     private $dbname = "testdb";

     public $conn;

     public function connect(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbusername, $this->dbpass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $this->conn = new mysqli($this->dbhost, $this->dbusername, $this->dbpass, $this->dbname);
            // if($this->conn->connect_error){
            //     throw new Exception("Connection Failed:",$this->conn->connect_error);
            // }
        }
        catch(PDOException $e){
            echo "Error" . $e->getMessage();
        }
        return $this->conn;
     }
}


?>