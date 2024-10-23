<?php

namespace Private\Models;

use Config\Database\Connection;
use PDO;

class User {
    private $conn;
    private $table = 'user';

    public function __construct() {
        $database = new Connection();
        $this->conn = $database->connect();
    }

    public function create($data) {
        $sql = "INSERT INTO " . $this->table . " (name, email, password) VALUES(:name, :email, :password)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        return $stmt->execute();
    }

//     public function getAll() {
//         $sql = "SELECT * FROM " . $this->table;
//         $stmt = $this->conn->prepare($sql);
//         $stmt->execute();
//         return $stmt->fetchAll(PDO::FETCH_ASSOC);
//     }

    public function getAll(){
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        echo $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function getById($id) {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $sql = "UPDATE " . $this->table . " SET name = :name, email = :email WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
