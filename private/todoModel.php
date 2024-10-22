<?php

namespace Private\Models;

use Config\Database\Connection;
use PDO;

// require_once dirname(__DIR__) . "/config/dbcon.php";

// require_once dirname(__FILE__). "/todoController.php";

class User{
        private $conn;
        private $table = 'users';

        public function __construct(){
                $database = new Connection();
                $this->conn = $database->connect();
        }

        public function create($data){
                $sql = "INSERT INTO ".$this->table . "(name, email, password) VALUES(:name, :email, :password )";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':name', $data['name']);
                $stmt->bindParam( ':email', $data['email']);
                $stmt->bindParam(':password', $data['password']);
                return $stmt->execute();
        }

        public function getAll(){
                $sql = "SELECT * FROM ". $this->table ;
                $stmt = $this->conn->prepare($sql);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getById($id){
                $sql = "SELECT * FROM". $this->table ."WHERE id = $id";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':id', $id);
           
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
        
        }
        public function update($id, $data){
                $sql = "UPDATE " . $this->table ."SET name = :name , email = :email WHERE id  = :id ";
                // $sql = "SELECT * FROM". $this->table ."WHERE id = $id";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':name', $data['name']);
                $stmt->bindParam(':email', $data['email']);
                $stmt->bindParam(':id', $id);
                return $stmt->execute();
        
        }
}



// class TodoModel extends Connection
// {
        // protected $today = date('F j, Y, g:i a');
//         public function addToDoDB($todo)
//         {
//                 $sql = "INSERT INTO `todo`(`todoName`,`createdDate`) VALUES (?, ? )";
//                 $stmt = $this->connect()->prepare($sql);
//                 $stmt = mysqli_stmt_bind_param('si', $todo, $today);
//                 $result = mysqli_stmt_execute($stmt);
//         }
// }
