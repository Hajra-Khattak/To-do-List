
<?php

class Connection{
    private $dbhost = "localhost";
    private $dbusername = "root";
     private $dbpass = "";
     private $dbname = "testdb";

     public $conn;

     public function connect(){
        $this->conn = null;

        try{
            $this->conn = new mysqli($this->dbhost, $this->dbusername, $this->dbpass, $this->dbname);
            if($this->conn->connect_error){
                throw new Exception("Connection Failed:",$this->conn->connect_error);
            }
        }
        catch(Exception $e){
            echo "Error" . $e->getMessage();
        }
        return $this->conn;
     }
}


?>