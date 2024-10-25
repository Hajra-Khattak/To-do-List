<?php

namespace Private\Models;

use Config\Database\Connection;


class User {
    private $conn;
    private $table = 'user';

    public function __construct() {
        $database = new Connection();
        $this->conn = $database->connect();
    }

    public function create($data) {
        $sql = "INSERT INTO  $this->table  (name, email, password) VALUES(?, ?, ?)";
        $stmt = mysqli_stmt_init($this->conn);

        if(mysqli_stmt_prepare($stmt,$sql)){
            $passwordHash = password_hash( $data['password'], PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss", $data['name'], $data['email'], $passwordHash);
                if(mysqli_stmt_execute($stmt)){
                    return true;
                }else{
                    error_log("Execute error:" . mysqli_stmt_error($stmt));
                    return false;
                }
        }else{
            error_log("prepare error:" . mysqli_stmt_error($stmt));
            return false;
        }

    }

    // public function getAll(){
    //     $sql = "SELECT * FROM " . $this->table;
    //     $stmt = mysqli_stmt_init($this->conn);
    //     if(mysqli_stmt_prepare($stmt,$sql)){
    //         mysqli_stmt_execute($stmt);

    //         $result = mysqli_stmt_get_result($stmt);
    //         $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
    //         return $users;
    //     }else{
    //         error_log("prepare error:" . mysqli_stmt_error($stmt));
    //         return [];
    //     }
            

    // }


    public function getAll() {
        $sql = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        echo "get All ";
        return $result->fetch_all(MYSQLI_ASSOC);
    }

//     public function getAll() {
//         $sql = "SELECT * FROM " . $this->table;
//         $stmt = $this->conn->prepare($sql);
//         $stmt->execute();
//         return $stmt->fetchAll(PDO::FETCH_ASSOC);
//     }

    // public function getAllll(){
    //     $sql = "SELECT * FROM " . $this->table;
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute();
    //     echo $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }
    

    // public function getById($id) {
    //     $sql = "SELECT * FROM " . $this->table . " WHERE id = :id";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //     $stmt->execute();
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }

    // public function update($id, $data) {
    //     $sql = "UPDATE " . $this->table . " SET name = :name, email = :email WHERE id = :id";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bindParam(':name', $data['name']);
    //     $stmt->bindParam(':email', $data['email']);
    //     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //     return $stmt->execute();
    // }

    // public function delete($id) {
    //     $sql = "DELETE FROM " . $this->table . " WHERE id = :id";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //     return $stmt->execute();
    // }
}
